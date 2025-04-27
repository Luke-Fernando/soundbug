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
        <div class="w-full h-auto flex justify-start items-start gap-2">
            <a href="#" class="w-16 aspect-square flex justify-center items-center overflow-hidden">
                <img src="/assets/images/products/flower.jpg" alt="Profile picture of user" class="min-w-full min-h-full">
            </a>
            <div class="flex flex-col justify-start w-auto h-auto gap-1">
                <a href="#" class=" text-xs sm:text-sm text-[var(--color-dark-blue)]">Love like a flower</a>
                <p class="text-4xl text-[var(--color-dark-blue)]">4&#47;<span class="text-[var(--color-orange)] text-2xl">5</span></p>
            </div>
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-center mt-5">
            <div class="w-full h-auto flex flex-col justify-start items-start gap-10 mt-14">
                <?php
                for ($i = 0; $i < 7; $i++) {
                    require __DIR__ . '/../_includes/review.php';
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