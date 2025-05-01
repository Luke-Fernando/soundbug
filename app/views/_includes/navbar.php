<nav class="w-full h-14 flex justify-between items-center mb-5 pl-4 pr-4">
    <a href="/" class="w-auto h-1/2 flex justify-center items-center text-[var(--color-orange)] font-bold font-train-one">
        SoundBug.<span class="text-[var(--color-dark-blue)]">io</span>
    </a>
    <div class="flex justify-center items-center w-auto h-auto relative">
        <input id="mobile-menu-trigger" type="checkbox" class="hidden peer">
        <label for="mobile-menu-trigger" class="h-7 flex md:hidden justify-center items-center text-[var(--color-dark-blue)] 
        hover:text-[var(--color-orange)] ease-linear duration-100 peer-checked:text-[var(--color-orange)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full aspect-square" viewBox="0 0 512 512">
                <path fill="currentColor" d="M32 96v64h448V96zm0 128v64h448v-64zm0 128v64h448v-64z" />
            </svg>
        </label>
        <div class="hidden peer-checked:flex md:flex justify-start items-start md:flex-row flex-col md:static absolute z-10 top-full right-0 pt-7.5 
        pb-5.5 px-5.5 md:p-0 md:bg-transparent bg-white border border-[var(--color-low-blue-bg)] md:border-0">
            <a href="/home" class="text-sm md:text-sm text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
            duration-100 py-2 md:py-0 md:px-3">
                Home
            </a>
            <a href="/collections" class="text-sm md:text-sm text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
            duration-100 py-2 md:py-0 md:px-3">
                Collections
            </a>
            <a href="/album" class="text-sm md:text-sm text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
            duration-100 py-2 md:py-0 md:px-3">
                Album
            </a>
            <div class="relative w-max h-auto flex justify-center items-center text-sm md:text-sm text-[var(--color-dark-blue)] 
            hover:text-[var(--color-orange)] ease-linear duration-100 py-2 md:py-0 md:px-3">
                <input id="account-dropdown-trigger" type="checkbox" class="hidden peer">
                <label for="account-dropdown-trigger" class="text-inherit border-0 bg-transparent cursor-pointer peer-checked:text-[var(--color-orange)]">
                    Account
                </label>
                <div id="account-dropdown" class="peer-checked:flex w-auto h-auto flex-col justify-center items-start absolute top-0 right-[110%] md:top-full md:right-0 hidden 
                bg-white border border-[var(--color-low-blue-bg)] py-6 px-4 text-[var(--color-dark-blue)] text-xs">
                    <?php if ($user != null) { ?>
                        <a href="/account" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Account</a>
                        <a href="/profile" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Profile</a>
                        <a href="/stats" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Stats</a>
                        <a href="/my-tracks" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">My tracks</a>
                        <a href="/signout" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Signout</a>
                    <?php } else { ?>
                        <a href="/signin" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Signin</a>
                        <a href="/signup" class="block w-max h-auto text-inherit hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Signup</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</nav>