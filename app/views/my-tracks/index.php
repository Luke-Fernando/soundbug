<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | My Tracks";
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
        <div class="w-full h-auto flex justify-start items-center mb-16">
            <a href="#" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-dark-blue-bg)]">Active</a>
            <a href="#" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-low-blue-bg)] 
            hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Inactive</a>
        </div>
        <div class="w-full h-auto flex justify-start items-center mb-10">
            <a href="/track/add" class="text-sm text-[var(--color-dark-blue-bg)] flex justify-start items-center hover:underline">
                Add new track
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 aspect-square" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M7.345 4.017a42.3 42.3 0 0 1 9.31 0c1.713.192 3.095 1.541 3.296 3.26a40.7 40.7 0 0 1 0 9.446c-.201 1.719-1.583 3.068-3.296 3.26a42.3 42.3 0 0 1-9.31 0c-1.713-.192-3.095-1.541-3.296-3.26a40.7 40.7 0 0 1 0-9.445a3.734 3.734 0 0 1 3.295-3.26M12 7.007a.75.75 0 0 1 .75.75v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1 0-1.5h3.493V7.757a.75.75 0 0 1 .75-.75" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="w-full h-auto grid grid-cols-1 md:grid-cols-2 gap-1">
            <?php
            for ($i = 0; $i < 15; $i++) {
            ?>
                <div class="w-auto h-auto flex justify-between items-center bg-[var(--color-grey-bg)] relative">
                    <label for="option-<?php echo $i; ?>" class="w-7 mx-1 h-auto flex justify-center items-center text-[var(--color-dark-bg)] hover:text-[var(--color-orange)] 
                    ease-linear duration-100 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-square rotate-90" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 9a3 3 0 0 0-2.82 2H3a1 1 0 0 0 0 2h13.18A3 3 0 1 0 19 9M3 7h1.18a3 3 0 0 0 5.64 0H21a1 1 0 0 0 0-2H9.82a3 3 0 0 0-5.64 0H3a1 1 0 0 0 0 2m18 10h-7.18a3 3 0 0 0-5.64 0H3a1 1 0 0 0 0 2h5.18a3 3 0 0 0 5.64 0H21a1 1 0 0 0 0-2" />
                        </svg>
                        <input id="option-<?php echo $i; ?>" type="checkbox" class="hidden peer">
                        <div class="w-auto h-auto flex-col justify-center items-start bg-white border border-[var(--color-low-blue-bg)] absolute 
                        top-1/2 left-full transform -translate-y-1/2 hidden peer-checked:flex px-3 py-4">
                            <a href="/track/edit?id=<?php echo $i; ?>" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear duration-100 py-1">Edit</a>
                            <a href="#" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                            duration-100 py-1">Pause</a>
                            <a href="#" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                            duration-100 py-1">Delete</a>
                        </div>
                    </label>
                    <?php
                    $styles = "w-full";
                    require __DIR__ . '/../_includes/saved_product_display.php';
                    ?>
                </div>
            <?php
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