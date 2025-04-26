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
        <div class="w-full h-auto flex justify-start items-center">
            <?php
            $page_topic = $page_topic;
            require __DIR__ . '/../_includes/page_topic.php';
            ?>
        </div>
        <div class="w-full h-auto product-grid">
            <?php
            $price = "9.99";
            for ($i = 0; $i < 15; $i++) {
                require __DIR__ . '/../_includes/main_product_display.php';
            }
            ?>
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