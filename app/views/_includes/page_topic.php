<div class="w-auto h-auto flex justify-start items-center pb-16">
    <div class="w-auto h-auto flex justify-start items-center">
        <h3 class="text-[var(--color-dark-blue)] text-base md:text-lg capitalize">
            <?php echo $page_topic; ?>
        </h3>
    </div>
    <div class="w-6 md:w-8 h-auto flex justify-center items-center text-[var(--color-dark-blue)] ml-7">
        <?php
        $styles = "w-full -rotate-[20deg]";
        require __DIR__ . '/../_includes/icons/music-icon.php';
        ?>
    </div>
</div>