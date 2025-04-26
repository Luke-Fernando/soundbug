<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | $page_topic";
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
        <div class="w-full h-auto flex justify-start items-center"></div>
        <?php
        $page_topic = $page_topic;
        require __DIR__ . '/../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto flex justify-center items-start relative">
            <input id="filter-trigger" type="checkbox" class="hidden peer">
            <div class="w-0 min-h-screen h-full border-t-2 border-r-2 border-[var(--color-orange)] float-left mr-10 peer-checked:w-3/4 
            text-[var(--color-dark-blue)] peer-checked:text-[var(--color-orange)] ease-linear duration-100 bg-[var(--color-grey-bg)] 
            absolute md:sticky top-0 left-0 group">
                <label for="filter-trigger" class="w-10 text-inherit hover:text-[var(--color-orange)] 
                flex justify-center items-center absolute -top-5 -right-5 z-10">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_329_2" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="4" y="4" width="40" height="40">
                            <path d="M6 9C6 8.20435 6.31607 7.44129 6.87868 6.87868C7.44129 6.31607 8.20435 6 9 6H39C39.7956 6 40.5587 6.31607 41.1213 6.87868C41.6839 7.44129 42 8.20435 42 9V39C42 39.7956 41.6839 40.5587 41.1213 41.1213C40.5587 41.6839 39.7956 42 39 42H9C8.20435 42 7.44129 41.6839 6.87868 41.1213C6.31607 40.5587 6 39.7956 6 39V9Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                            <path d="M32 6V42ZM16 20L20 24L16 28" fill="white" />
                            <path d="M32 6V42M16 20L20 24L16 28" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M26 6H38ZM26 42H38Z" fill="white" />
                            <path d="M26 6H38M26 42H38" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </mask>
                        <g mask="url(#mask0_329_2)">
                            <path d="M0 0H48V48H0V0Z" fill="currentColor" />
                        </g>
                    </svg>
                </label>
                <div class="w-full min-h-auto h-screen overflow-x-hidden overflow-y-scroll">
                    <!-- filters here -->
                </div>
            </div>
            <div class="w-full h-auto product-flex px-5 md:px-0">
                <?php
                $width = "w-44 sm:w-64 md:w-64";
                $price = "9.99";
                for ($i = 0; $i < 16; $i++) {
                    require __DIR__ . '/../_includes/main_product_display.php';
                }
                ?>
            </div>
        </div>

    </section>
    <?php
    require __DIR__ . '/../_includes/pagination.php';
    ?>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>