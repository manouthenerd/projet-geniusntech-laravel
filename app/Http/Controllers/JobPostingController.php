<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobPostingController extends Controller
{
    public function index()
    {
        $jobPostings = JobPosting::active()
            ->open()
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('jobs.index', compact('jobPostings'));
    }

    public function show(JobPosting $jobPosting)
    {
        if (!$jobPosting->is_active) {
            abort(404);
        }

        return view('jobs.show', compact('jobPosting'));
    }

    public function apply(JobPosting $jobPosting)
    {
        if (!$jobPosting->is_active) {
            abort(404);
        }

        return view('jobs.apply', compact('jobPosting'));
    }

    public function storeApplication(Request $request, JobPosting $jobPosting)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'cover_letter' => 'required|string|max:5000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        JobApplication::create([
            'job_posting_id' => $jobPosting->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cover_letter' => $request->cover_letter,
            'resume_path' => $resumePath,
        ]);

        return redirect()->route('jobs.show', $jobPosting)
            ->with('success', 'Votre candidature a été soumise avec succès!');
    }
}
