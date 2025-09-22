<div id="sidebar" class="close-sidebar px-2 grid h-full w-[256px] shadow shadow-slate-100 fixed bg-slate-200 z-[999] left-[-257px]
  left-0">  {{--Ne pas toucher la répétition de la classe left, elle sert à dynamiser l'affichage du menu latéral --}}    
         <div class="grid w-full">
            <flux:button id="close-menu-button" icon="x-mark" variant="ghost" class="cursor-pointer justify-self-end" />
                <a href="{{route('home')}}">
                    <img src="/images/logo-genius.png" alt="logo Genius">
                </a>
         </div>

        <flux:navbar class="-mb-px grid">

         <flux:navbar.item icon="newspaper" badge="{{$global_service_counter}}" href="{{route('dashboard.services')}}"
                :current="request()->is('dashboard/services')">
                Services
            </flux:navbar.item>

            <flux:navbar.item icon="globe-alt" badge="{{$global_blog_counter}}" href="{{route('dashboard.blogs')}}"
                :current="request()->is('dashboard/blogs')">
                Blogs
            </flux:navbar.item>

            <flux:navbar.item icon="user-group" href="">
                Projets
            </flux:navbar.item>
            <flux:separator vertical variant="subtle" class="my-2" />

        </flux:navbar>
        <flux:spacer />

        <livewire:logout-button></livewire:logout-button>

</div>