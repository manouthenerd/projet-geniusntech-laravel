<section class="h-screen w-full grid place-content-center">


    <div class="mx-1 my-2 flex justify-between">

        <p class="text-xs text-zinc-500">
            Connexion Admin ⁖
        </p>

        <a href="#"
            class="ring-3 rounded-sm ring-offset-2 ring-blue-800/70 hover:ring-blue-800 transition-all border text-xs text-zinc-600">Visiter
            Genius Data
            →
        </a>
    </div>

    <div id="form-wrapper" class="border border-slate-200 shadow shadow-slate-300 bg-white rounded">

        <form wire:submit.prevent="login" method="post" class="mx-auto p-12">

            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Adresse email
                </label>
                <input wire:model="email" name="email" type="email" id="email"
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                    placeholder="example@gmail.com" required />
                @error('email')
                    <p class="text-xs text-red-600 ml-0.5 mt-1.5" wire:transition>
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Mot de passe
                </label>
                <input wire:model="password" name="password" type="password" id="password" placeholder="Votre mot de passe"
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                    required />

                @error('password')
                    <p class="text-xs text-red-600 ml-0.5 mt-1.5" wire:transition>
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <button type="submit"
                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Connexion
            </button>
        </form>
    </div>

</section>
