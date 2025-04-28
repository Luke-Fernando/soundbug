<div class="<?php echo $width; ?> h-auto mr-auto flex flex-col justify-start items-center bg-[var(--color-grey-bg)] px-3 py-2 relative">
    <div class="absolute top-0 right-0 w-auto h-auto p-1 flex justify-center items-center bg-[var(--color-grey-bg)]">
        <a href="#" class="text-[var(--color-dark-blue)]">
            $
            <span><?php echo $price; ?></span>
        </a>
    </div>
    <div class="w-full h-auto flex flex-col justify-center items-start">
        <a href="#" class="w-full aspect-square flex justify-center items-center overflow-hidden">
            <img src="/assets/images/products/flower.jpg" alt="" class="min-w-full min-h-full">
        </a>
        <div class="w-full h-auto flex justify-start items-start my-3">
            <a href="#" class="text-[var(--color-dark-blue)] text-xs truncate">Love like a flower</a>
        </div>
        <div class="w-full h-auto flex justify-between items-center">
            <div class="w-auto h-auto flex justify-start items-center gap-2 text-sm">
                <button class="w-6 aspect-square flex justify-center items-center text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                duration-100">
                    <?php
                    $styles = "w-full";
                    require __DIR__ . '/../_includes/icons/collection-icon.php';
                    ?>
                </button>
                <button class="w-6 aspect-square flex justify-center items-center text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                duration-100">
                    <?php
                    $styles = "w-full";
                    require __DIR__ . '/../_includes/icons/album-icon.php';
                    ?>
                </button>
            </div>
            <button class="w-10 aspect-square flex justify-center items-center text-[var(--color-orange)] hover:scale-110 active:scale-90 
            ease-linear duration-100">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/play-icon.php';
                ?>
            </button>
        </div>
    </div>
</div>