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
        <div class="w-full flex justify-start items-start">
            <div class="w-full md:w-5/12 h-auto grid grid-cols-1 gap-1">
                <?php
                for ($i = 0; $i < 15; $i++) {
                    require __DIR__ . '/../_includes/saved_product_display.php';
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>