<div class="w-full h-auto flex flex-col md:flex-row justify-center md:justify-start items-start md:items-center mb-14 md:mb-20 gap-2 md:gap-4">
    <form action="/hello" class="w-full sm:w-auto h-8 flex justify-center items-center gap-1">
        <input id="search-input" type="text" class="w-full md:w-96 h-full bg-[var(--color-grey-bg)] text-[var(--color-dark-blue)] 
        focus:outline-none ring-1 ring-[var(--color-dark-blue)] focus:ring-2 focus:ring-[var(--color-orange)] px-2 text-sm">
        <button type="submit" class="h-full px-2 w-auto flex justify-center items-center bg-[var(--color-grey-bg)] ring-1 
        ring-[var(--color-dark-blue)] active:ring-[var(--color-orange)] ease-linear duration-100 text-[var(--color-dark-blue)]">
            <?php
            $styles = "h-3/4";
            require __DIR__ . '/../../_includes/icons/search-icon.php';
            ?>
        </button>
    </form>
</div>