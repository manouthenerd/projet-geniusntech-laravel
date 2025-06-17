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
        <a href="#"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Découvrir
            <x-ui.right-arrow/>
        </a>
    </div>
</div>
