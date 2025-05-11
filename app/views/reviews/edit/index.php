<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Edit Review";
require __DIR__ . '/../../_includes/head.php';
?>

<body>
    <?php
    require __DIR__ . '/../../_includes/navbar.php';
    ?>
    <section class="h-auto container-main">
        <?php
        require __DIR__ . '/../../_includes/search/search_bar.php';
        ?>
    </section>
    <section class="h-auto container-sub">
        <?php
        $page_topic = "Edit Review";
        require __DIR__ . '/../../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto flex flex-col justify-start items-start gap-10">
            <div class="w-full h-auto grid grid-cols-6 gap-5 md:gap-8">
                <div class="col-span-4 h-auto flex flex-col justify-start items-start gap-5">
                    <label for="rate" class="text-[var(--color-dark-blue)] text-sm">
                        Rate from 1 to 10
                    </label>
                    <div class="flex justify-start items-center gap-3">
                        <input type="text" name="rate" id="rate" class="w-10 h-10 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                        ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-base">
                        <p class=" text-[var(--color-dark-blue)] text-sm">/10</p>
                    </div>

                </div>
                <div class="col-span-6 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="title" class="text-[var(--color-dark-blue)] text-sm">
                        Title
                    </label>
                    <input type="text" name="title" id="title" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                </div>
                <div class="col-span-6 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="description" class="text-[var(--color-dark-blue)] text-sm">
                        Description
                    </label>
                    <textarea rows="15" type="text" name="description" id="description" class="w-full p-3 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs resize-none"></textarea>
                </div>
            </div>
            <div class="w-full h-auto flex justify-end items-center">
                <?php
                $btn_text = "Save";
                require __DIR__ . '/../../_includes/primary-btn.php';
                ?>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../../_includes/footer.php';
    ?>
</body>

</html>