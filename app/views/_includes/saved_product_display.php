<div class="<?php echo $styles; ?> h-auto flex justify-start items-start gap-3 bg-[var(--color-grey-bg)] p-5">
    <div class="w-2/6 h-auto flex flex-col justify-center items-center gap-2">
        <div class="w-full aspect-square flex justify-center items-center overflow-hidden">
            <img src="/assets/images/products/flower.jpg" alt="" class="min-w-full min-h-full">
        </div>
        <div class="flex justify-center items-center gap-1.5">
            <button class="w-5 md:w-7 aspect-square flex justify-center items-center text-[var(--color-dark-blue)] 
            hover:text-[var(--color-orange)] ease-linear duration-100">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/collection-icon.php';
                ?>
            </button>
            <button class="w-5 md:w-7 aspect-square flex justify-center items-center text-[var(--color-dark-blue)] 
            hover:text-[var(--color-orange)] ease-linear duration-100">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/album-icon.php';
                ?>
            </button>
        </div>
    </div>
    <div class="flex flex-col justify-start items-start gap-2 md:gap-5">
        <div class="flex justify-center items-center px-3 py-2 bg-[var(--color-grey-bg)]">
            <p class="text-sm text-[var(--color-dark-blue)]">&#36; <span>05.99</span></p>
        </div>
        <div class="w-full h-auto flex justify-start items-start">
            <p class="text-sm text-[var(--color-dark-blue)] truncate">
                Love like a flower
            </p>
        </div>
        <div class="w-full max-w-full h-auto flex justify-start items-center">
            <input id="track-play" type="checkbox" class="hidden peer">
            <label for="track-play" class="w-10 aspect-square flex justify-center items-center text-[var(--color-dark-blue-bg)] hover:text-[var(--color-orange)] 
                    ease-linear duration-100 peer-checked:text-[var(--color-orange)] peer-checked:scale-90 rotate-0">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/play-icon.php';
                ?>
            </label>
            <div class="w-full h-1 bg-[var(--color-grey-bg)] relative">
                <div class="absolute top-0 left-0 w-[78%] h-full bg-[var(--color-orange)]"></div>
            </div>
        </div>
    </div>
</div>