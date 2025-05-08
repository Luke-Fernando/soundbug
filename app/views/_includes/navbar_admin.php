<nav class="w-full h-14 flex justify-between items-center mb-5 pl-4 pr-4">
    <a href="/admin" class="w-auto h-1/2 flex justify-center items-center text-[var(--color-orange)] font-bold font-train-one">
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
            <a href="/admin" class="text-xs md:text-sm text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
            duration-100 py-2 md:py-0 md:px-3">
                Home
            </a>
            <a href="/admin/account" class="text-xs md:text-sm text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
            duration-100 py-2 md:py-0 md:px-3">
                Account
            </a>
        </div>
    </div>
</nav>