<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Admin Signin";
require __DIR__ . '/../../_includes/head.php';
?>

<body>
    <?php
    require __DIR__ . '/../../_includes/navbar_admin.php';
    ?>
    <section class="h-auto container-sub flex flex-col justify-start items-start">
        <?php
        $page_topic = "Admin Signin";
        require __DIR__ . '/../../_includes/page_topic.php';
        ?>
        <form action="#" class="w-full h-auto grid grid-cols-1 gap-y-5 sm:gap-y-10 gap-x-5 box-border md:px-32">
            <div class="col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="email" class="text-[var(--color-dark-blue)] text-sm">
                    Email
                </label>
                <input type="email" name="email" id="email" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your username here">
            </div>
            <div class="col-span-1 h-auto flex justify-end items-center mt-3.5">
                <?php
                $btn_text = "Send signin link";
                require __DIR__ . '/../../_includes/primary-btn.php';
                ?>
            </div>
        </form>
    </section>
    <?php
    require __DIR__ . '/../../_includes/footer.php';
    ?>
</body>

</html>