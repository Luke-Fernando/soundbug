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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full aspect-square" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M2.854 2.121a2.5 2.5 0 0 0-1.768 3.062L2.12 9.047A2.5 2.5 0 0 0 5 10.857V8a3 3 0 0 1 3-3h2.354L9.78 2.854a2.5 2.5 0 0 0-3.062-1.768zM6 8a2 2 0 0 1 2-2h5a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0-.5.5V10H8.5a.5.5 0 0 0 0 1H10v1.5a.5.5 0 0 0 1 0V11h1.5a.5.5 0 0 0 0-1H11V8.5a.5.5 0 0 0-.5-.5" />
                    </svg>
                </button>
                <button class="w-6 aspect-square flex justify-center items-center text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                duration-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full aspect-square" viewBox="0 0 56 56">
                        <path fill="currentColor" d="M16.844 3.637c.14-1.992 1.289-3.024 3.445-3.024h14.93c2.156 0 3.281 1.032 3.422 3.024zm-4.149 6.492c.352-2.133 1.36-3.305 3.703-3.305h22.524c2.344 0 3.351 1.172 3.703 3.305zm1.899 45.258c-4.875 0-7.36-2.414-7.36-7.266v-27c0-4.828 2.485-7.265 7.36-7.265h26.812c4.899 0 7.36 2.437 7.36 7.265v27c0 4.828-2.438 7.266-6.657 7.266zM34.44 30.635c1.019-.276 1.337-.488 1.337-1.719v-4.159c0-.806-.276-1.167-1.4-.891l-6.218 1.549c-1.04.255-1.273.467-1.273 1.719v9.57c0 .934-.085 1.104-1.146 1.4l-1.952.51c-1.931.51-3.565 1.655-3.565 3.735c0 1.803 1.358 3.119 3.501 3.119c3.035 0 5.093-2.186 5.093-5.263v-7.278c0-.785.17-.997.658-1.104z" />
                    </svg>
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