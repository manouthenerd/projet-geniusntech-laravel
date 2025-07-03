<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'     => ['required', 'string'],
            'category'  => ['required', 'string'],
            'summary'   => ['required', 'string'],
            'content'   => ['required', 'string'],
            'image'     => ['sometimes', 'required', 'image', 'max:10240'],
        ];
    }

    public function attributes()
    {
        return [
            'title'     => 'titre',
            'category'  => 'catégorie',
            'summary'   => 'résumé',
            'content'   => 'contenu de l\'article'
        ];
    }
}
