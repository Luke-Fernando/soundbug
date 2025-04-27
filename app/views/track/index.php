<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | $track_name";
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
        <div class="w-auto max-w-full h-auto flex flex-col sm:flex-row justify-center items-center sm:items-start m-auto">
            <div class="w-52 aspect-square flex justify-center items-center overflow-hidden">
                <img src="/assets/images/products/flower.jpg" alt="<?php echo $track_name . " image"; ?>" class="min-w-full min-h-full">
            </div>
            <div class="flex flex-col justify-start items-center sm:items-start sm:ml-10">
                <div class="text-[var(--color-dark-blue)] text-xl px-3.5 py-2 bg-[var(--color-grey-bg)]">
                    &#36;
                    <?php $price = "04.99"; ?>
                    <span><?php echo $price; ?></span>
                </div>
                <div class="w-auto max-w-3xs h-auto flex justify-start items-start my-4">
                    <p class="text-[var(--color-dark-blue)] text-xs sm:text-sm">Love like a flower</p>
                </div>
                <div class="w-auto max-w-full h-auto flex justify-start items-center">
                    <input id="track-play" type="checkbox" class="hidden peer">
                    <label for="track-play" class="w-10 aspect-square flex justify-center items-center text-[var(--color-dark-blue-bg)] hover:text-[var(--color-orange)] 
                    ease-linear duration-100 peer-checked:text-[var(--color-orange)] peer-checked:scale-90 rotate-0">
                        <?php
                        $styles = "w-full";
                        require __DIR__ . '/../_includes/icons/play-icon.php';
                        ?>
                    </label>
                    <div class="w-40 h-1 bg-[var(--color-grey-bg)] relative">
                        <div class="absolute top-0 left-0 w-[78%] h-full bg-[var(--color-orange)]"></div>
                    </div>
                    <div class="w-auto h-auto flex justify-center items-center ml-3.5">
                        <p class="text-[var(--color-dark-blue-bg)] text-sm">03:44</p>
                    </div>
                </div>
                <div class="w-auto h-auto flex justify-center items-center mt-6">
                    <button class="w-auto h-auto bg-[var(--color-dark-blue-bg)] text-[var(--color-grey-bg)] hover:bg-[var(--color-orange)] px-3 py-2 
                    flex justify-center items-center ease-linear duration-100 cursor-pointer text-sm">
                        Get now
                    </button>
                    <a href="#" class="w-auto h-auto text-[var(--color-dark-blue-bg)] hover:text-[var(--color-orange)] px-3 py-2 
                    flex justify-center items-center ease-linear duration-100 cursor-pointer text-sm">
                        Add to collection
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-center mt-40">
            <div class="w-full h-auto flex justify-start items-center mb-10">
                <h3 class="text-[var(--color-dark-blue)]">Description</h3>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start">
                <input id="read-more" type="checkbox" class="hidden peer">
                <p class="text-sm/7 text-[var(--color-dark-blue)] line-clamp-2 peer-checked:line-clamp-none">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores tenetur labore culpa assumenda beatae tempora autem ullam nostrum dolores, incidunt corrupti dolor suscipit alias iure voluptatem facilis! Minus harum, sunt aperiam hic incidunt dolores nulla.
                </p>
                <label for="read-more" class="text-[var(--color-orange)] hover:underline ease-linear duration-100 
                cursor-pointer text-xs mt-1.5">
                    Read more
                </label>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>