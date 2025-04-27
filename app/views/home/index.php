<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Home";
require __DIR__ . '/../_includes/head.php';
?>

<body>
    <?php
    require __DIR__ . '/../_includes/navbar.php';
    ?>
    <section class="h-auto container-main">
        <header class="container-sub relative h-auto max-h-[696px]">
            <div class="w-full h-auto flex flex-col justify-start items-start pb-80">
                <div class="w-auto h-auto flex justify-start items-start">
                    <h1 class="md:text-7xl text-6xl font-bold font-train-one text-[var(--color-dark-blue)]">
                        Find the <br>tracks that <br>suits you <br>
                        <span class="text-[var(--color-orange)]">better</span>
                    </h1>
                </div>
                <div class="w-auto h-auto flex justify-start items-center mt-5">
                    <a href="/all-tracks" class="w-16 h-auto text-[var(--color-orange)] flex justify-center items-center">
                        <?php
                        $styles = "w-full";
                        require __DIR__ . '/../_includes/icons/play-icon.php';
                        ?>
                    </a>
                    <form id="hero-search" action="/hello" class="w-auto h-8 flex justify-start items-center">
                        <input id="hero-search-input" type="text" class="w-40 h-full bg-[var(--color-low-blue-bg)] pl-1 pr-1 text-[var(--color-dark-blue)] 
                        focus:outline-none focus:ring-2 focus:ring-[var(--color-orange)]">
                        <button type="submit" class="w-8 h-full flex justify-center items-center p-1 
                        bg-[var(--color-low-blue-bg)] text-[var(--color-dark-blue)] ml-0.5">
                            <?php
                            $styles = "h-full";
                            require __DIR__ . '/../_includes/icons/search-icon.php';
                            ?>
                        </button>
                    </form>
                </div>
            </div>
            <div class="absolute -z-1 bottom-0 right-0 md:w-[50%] sm:w-[70%] w-[85%] max-w-full h-auto flex justify-center items-center">
                <img src="/assets/images/hero/hero.svg" alt="Hero image" class="w-full h-auto">
            </div>
            <div class="absolute -z-1 top-0 md:right-20 right-0 w-11 h-auto flex justify-center items-center 
            text-[var(--color-dark-blue-bg)] rotate-45">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/music-icon.php';
                ?>
            </div>
            <div class="absolute -z-1 bottom-20 md:left-20 left-0 w-11 h-auto flex justify-center items-center 
            text-[var(--color-dark-blue-bg)]">
                <?php
                $styles = "w-full";
                require __DIR__ . '/../_includes/icons/music-icon.php';
                ?>
            </div>
        </header>
        <section class="container-sub flex flex-col justify-center items-center">
            <a href="#" class="w-full h-auto flex flex-col justify-center items-start hover:underline pt-15 md:pt-20">
                <?php
                $page_topic = "Most popular";
                require __DIR__ . '/../_includes/page_topic.php';
                ?>
            </a>
            <div class="w-full h-auto product-grid">
                <?php
                $price = "9.99";
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                ?>
            </div>
        </section>
        <section class="container-sub flex flex-col justify-center items-center">
            <a href="#" class="w-full h-auto flex flex-col justify-center items-start hover:underline pt-15 md:pt-20">
                <?php
                $page_topic = "Newest";
                require __DIR__ . '/../_includes/page_topic.php';
                ?>
            </a>
            <div class="w-full h-auto product-grid">
                <?php
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                ?>
            </div>
        </section>
        <section class="container-sub flex flex-col justify-center items-center">
            <a href="#" class="w-full h-auto flex flex-col justify-center items-start hover:underline pt-15 md:pt-20">
                <?php
                $page_topic = "Fan favorites";
                require __DIR__ . '/../_includes/page_topic.php';
                ?>
            </a>
            <div class="w-full h-auto product-grid">
                <?php
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                require __DIR__ . '/../_includes/main_product_display.php';
                ?>
            </div>
        </section>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>