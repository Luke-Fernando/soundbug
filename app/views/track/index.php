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
        <div class="w-auto max-w-full h-auto flex justify-center items-start">
            <div class="w-24 aspect-square flex justify-center items-center overflow-hidden">
                <img src="/assets/images/products/flower.jpg" alt="<?php echo $track_name . " image"; ?>" class="min-w-full min-h-full">
            </div>
            <div class="flex flex-col justify-start items-start ml-10"></div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>