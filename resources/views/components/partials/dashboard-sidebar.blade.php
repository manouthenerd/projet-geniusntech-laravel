<div id="sidebar" class="close-sidebar px-2 grid h-full w-[256px] shadow shadow-slate-100 fixed bg-slate-200 z-[999] left-[-257px]
  left-0">     
         <div class="grid w-full">
            <flux:button id="close-menu-button" icon="x-mark" variant="ghost" class="cursor-pointer justify-self-end" />
                <a href="{{route('home')}}" wire:navigate>
                    <img src="/images/logo-genius.png" alt="logo Genius">
                </a>
         </div>

        <flux:navbar class="-mb-px grid">

            <flux:navbar.item icon="home" href="{{route('dashboard')}}" :current="request()->is('dashboard')">
                Accueil
            </flux:navbar.item>

            <flux:navbar.item icon="globe-alt" badge="12" href="{{route('dashboard.blogs')}}"
                :current="request()->is('dashboard/blogs')">
                Blogs
            </flux:navbar.item>

            <flux:navbar.item icon="newspaper" badge="08" href="{{route('dashboard.services')}}"
                :current="request()->is('dashboard/services')">
                Services
            </flux:navbar.item>

            <flux:navbar.item icon="user-group" href="{{route('dashboard.achievement')}}" :current="request()->is('dashboard/our-team')">
                Projets
            </flux:navbar.item>
            <flux:separator vertical variant="subtle" class="my-2" />

        </flux:navbar>
        <flux:spacer />

        <div id="logout-button" class="justify-self-center">
            <flux:button type="submit" variant="ghost"  class="text-red-600 hover:cursor-pointer">
                <span class="text-red-700 font-medium">Se déconnecter</span>
            </flux:button>
        </div>

</div>