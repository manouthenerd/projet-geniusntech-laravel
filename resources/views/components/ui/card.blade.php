<div class="max-w-sm bg-[url('/images/background.jpg')] bg-center border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 space-y-2 p-4">
    <div class="p-5 bg-transparent backdrop-blur-2xl glass">
        <p href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#193CB8] dark:text-white">
               
                {{$head}}
            </h5>
        </p>
        <p class="mb-3 font-normal text-white dark:text-gray-400">
           
            {{$body}}
        </p>

        {{$slot}}
        
    </div>
</div>
