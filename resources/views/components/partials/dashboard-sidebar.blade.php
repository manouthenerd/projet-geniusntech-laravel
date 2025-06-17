<div class="px-2 grid h-full w-[256px] shadow shadow-slate-100 fixed bg-slate-200 z-[999]">     
         <div class="grid w-full">
            <flux:button icon="x-mark" variant="ghost" class=" justify-self-end" />
                <div>
                    <img src="/images/logo-genius.png" alt="logo Genius">
                </div>
         </div>

        <flux:navbar class="-mb-px max-lg:hidden grid">

            <flux:navbar.item icon="home" href="/dashboard" :current="request()->is('dashboard')">
                Accueil
            </flux:navbar.item>

            <flux:navbar.item icon="globe-alt" badge="12" href="/dashboard/blogs"
                :current="request()->is('dashboard/blogs')">
                Blogs
            </flux:navbar.item>

            <flux:navbar.item icon="newspaper" badge="08" href="/dashboard/services"
                :current="request()->is('dashboard/services')">
                Services
            </flux:navbar.item>

            <flux:navbar.item icon="user-group" href="dashboard/notre-equipe" :current="request()->is('dashboard/our-team')">
                Team
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