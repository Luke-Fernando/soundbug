<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Album";
require __DIR__ . '/../_includes/head.php';
?>

<body>
    <?php
    require __DIR__ . '/../_includes/navbar.php';
    ?>
    <section class="h-auto container-main">
        <?php
        require __DIR__ . '/../_includes/search/search_bar.php';
        ?>
    </section>
    <section class="h-auto container-sub flex flex-col justify-center items-start">
        <div class="w-full h-auto flex justify-start items-center">
            <?php
            $page_topic = $page_topic;
            require __DIR__ . '/../_includes/page_topic.php';
            ?>
        </div>
        <div class="w-full flex justify-between items-start gap-3 flex-wrap-reverse md:flex-nowrap relative">
            <div class="w-full md:w-5/12 h-auto grid grid-cols-1 gap-1">
                <?php
                for ($i = 0; $i < 15; $i++) {
                ?>
                    <div class="h-auto flex justify-start items-center">
                        <div class="w-auto h-auto flex justify-center items-center mr-1.5">
                            <input id="item-select-<?php echo $i; ?>" type="checkbox" class="hidden peer">
                            <label for="item-select-<?php echo $i; ?>" class="w-5 md:w-6 aspect-square border-2 border-[var(--color-low-blue-bg)] relative 
                            peer-checked:border-[var(--color-orange)] hover:border-[var(--color-orange)] before:content-[''] peer-checked:before:bg-[var(--color-orange)] 
                            before:w-full before:h-full before:m-0.5 before:absolute before:top-0 before:left-0 p-1 box-border ease-linear duration-100">
                            </label>
                        </div>
                        <?php
                        $styles = "w-full";
                        require __DIR__ . '/../_includes/saved_product_display.php';
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="w-full md:w-5/12 h-auto md:sticky md:top-0">
                <div class="w-full h-auto flex flex-col justify-center items-start gap-4 bg-[var(--color-grey-bg)] py-5 px-8 box-border">
                    <div class="w-full h-auto flex justify-between items-center gap-5">
                        <p class="text-xs md:text-sm text-[var(--color-dark-blue)] block min-w-max">Total &#40;<span>10</span>&#41;</p>
                        <div class="w-full h-0.5 bg-[var(--color-low-blue-bg)]"></div>
                        <p class="text-xs md:text-sm text-[var(--color-dark-blue)] block min-w-max">&#36;<span>05.99</span></p>
                    </div>
                    <div class="w-full h-auto flex justify-between items-center gap-5">
                        <p class="text-xs md:text-sm text-[var(--color-dark-blue)] block min-w-max">Discount</p>
                        <div class="w-full h-0.5 bg-[var(--color-low-blue-bg)]"></div>
                        <p class="text-xs md:text-sm text-[var(--color-dark-blue)] block min-w-max">&#36;<span>00.00</span></p>
                    </div>
                    <form class="w-full h-auto flex justify-center items-center">
                        <input type="text" class="text-xs md:text-sm h-9 md:h-11 w-full bg-[var(--color-low-blue-bg)] outline-0 focus:ring-1 
                        focus:ring-[var(--color-dark-blue)] text-[var(--color-dark-blue-bg)] px-3" placeholder="Enter coupon">
                    </form>
                </div>
                <div class="w-full h-auto flex flex-col justify-center items-start bg-[var(--color-dark-blue-bg)] py-3.5 md:py-5 px-8 box-border">
                    <div class="w-full h-auto flex justify-between items-center gap-5">
                        <p class="text-xs md:text-sm text-[var(--color-grey-bg)] block min-w-max">Subtotal</p>
                        <div class="w-full h-0.5 bg-[var(--color-grey-bg)]"></div>
                        <p class="text-xs md:text-sm text-[var(--color-grey-bg)] block min-w-max">&#36;<span>05.99</span></p>
                    </div>
                </div>
                <div class="w-full h-auto flex flex-col justify-center items-start mt-2">
                    <div class="w-full h-auto flex justify-end items-center gap-3">
                        <button class="text-xs md:text-sm text-[var(--color-dark-blue-bg)] hover:underline bg-[var(--color-low-blue-bg)] ease-linear duration-100 px-3 py-3">
                            Remove
                        </button>
                        <button class="text-xs md:text-sm text-[var(--color-grey-bg)] px-3 py-3 hover:underline 
                        bg-[var(--color-dark-blue-bg)] ease-linear duration-100">
                            Proceed to checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>