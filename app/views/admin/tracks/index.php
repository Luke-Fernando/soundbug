<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Admin";
require __DIR__ . '/../../_includes/head.php';
?>

<body>
    <?php
    require __DIR__ . '/../../_includes/navbar_admin.php';
    ?>
    <section class="h-auto container-sub flex flex-col justify-start items-start">
        <?php
        $page_topic = "Admin";
        require __DIR__ . '/../../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto flex justify-start items-center mb-16">
            <a href="admin/tracks" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-dark-blue-bg)]">Tracks</a>
            <a href="admin/people" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-low-blue-bg)] 
            hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">People</a>
            <a href="admin/admins" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-low-blue-bg)] 
            hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Admins</a>
            <a href="admin/stats" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-low-blue-bg)] 
            hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Stats</a>
        </div>
        <?php
        require __DIR__ . '/../../_includes/search/search_bar_admin.php';
        ?>
        <div class="w-full h-auto flex flex-col justify-start items-start overflow-auto">
            <div class="w-full min-w-[687px] h-auto flex flex-col justify-start items-start pb-20">
                <div class="w-full h-auto grid grid-cols-10 mb-10">
                    <div class="col-span-1 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Thumbnail</p>
                    </div>
                    <div class="col-span-3 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Track</p>
                    </div>
                    <div class="col-span-3 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Preview</p>
                    </div>
                    <div class="col-span-1 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Artist</p>
                    </div>
                    <div class="col-span-1 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Price</p>
                    </div>
                    <div class="col-span-1 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Actions</p>
                    </div>
                </div>
                <?php
                for ($i = 0; $i < 10; $i++) {
                ?>
                    <!-- row  -->
                    <div class="w-full h-auto grid grid-cols-10 my-2">
                        <div class="col-span-1 flex justify-center items-center">
                            <a href="/track" target="_blank" class="w-3/5 aspect-square flex justify-center items-center overflow-hidden">
                                <img src="/assets/images/products/flower.jpg" class="min-w-full min-h-full" alt="">
                            </a>
                        </div>
                        <div class="col-span-3 py-2 flex justify-start items-start">
                            <a href="/track" target="_blank" class="text-xs text-[var(--color-dark-blue)] line-clamp-2">
                                Love like a flower Love like a flower Love like a flower Love like a flower Love like a flower
                            </a>
                        </div>
                        <div class="col-span-3 py-2 flex justify-center items-center box-border px-2.5">
                            <input type="checkbox" id="track-preview-<?php echo $i; ?>" class="peer hidden">
                            <label for="track-preview-<?php echo $i; ?>" class="w-8 aspect-square flex justify-center items-center text-[var(--color-dark-blue-bg)] 
                            hover:text-[var(--color-orange)] ease-linear duration-100 peer-checked:text-[var(--color-orange)] 
                            peer-checked:scale-95">
                                <?php
                                $styles = "w-full";
                                require __DIR__ . '/../../_includes/icons/play-icon.php';
                                ?>
                            </label>
                            <div class="w-3/5 h-1 relative flex justify-start items-center bg-[var(--color-low-blue-bg)]">
                                <div class="w-[50%] h-full bg-[var(--color-orange)]"></div>
                            </div>
                            <div class="w-auto h-auto flex justify-center items-center ml-2">
                                <p class="text-xs text-[var(--color-dark-blue-bg)]">00:00</p>
                            </div>
                        </div>
                        <div class="col-span-1 py-2 flex justify-center items-center">
                            <p class="text-xs text-[var(--color-dark-blue)]">&#64;<span>gorilla1</span></p>
                        </div>
                        <div class="col-span-1 py-2 flex justify-center items-center">
                            <p class="text-xs text-[var(--color-dark-blue)]">&#36;<span>04.99</span></p>
                        </div>
                        <div class="col-span-1 py-2 flex justify-center items-center">
                            <label for="option-<?php echo $i; ?>" class="w-7 mx-1 h-auto flex justify-center items-center text-[var(--color-dark-bg)] hover:text-[var(--color-orange)] 
                        ease-linear duration-100 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-square rotate-90" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 9a3 3 0 0 0-2.82 2H3a1 1 0 0 0 0 2h13.18A3 3 0 1 0 19 9M3 7h1.18a3 3 0 0 0 5.64 0H21a1 1 0 0 0 0-2H9.82a3 3 0 0 0-5.64 0H3a1 1 0 0 0 0 2m18 10h-7.18a3 3 0 0 0-5.64 0H3a1 1 0 0 0 0 2h5.18a3 3 0 0 0 5.64 0H21a1 1 0 0 0 0-2"></path>
                                </svg>
                                <input id="option-<?php echo $i; ?>" type="checkbox" class="hidden peer">
                                <div class="w-auto h-auto flex-col justify-center items-start bg-white border border-[var(--color-low-blue-bg)] absolute 
                            top-1/2 right-full transform -translate-y-1/2 hidden peer-checked:flex px-3 py-4 z-50">
                                    <a href="/track/edit?id=0" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] 
                                    ease-linear duration-100 py-1">Edit</a>
                                    <a href="#" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                                    duration-100 py-1">Pause</a>
                                    <a href="#" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                                    duration-100 py-1">Deactivate</a>
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- row  -->
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../../_includes/pagination.php';
    ?>
    <?php
    require __DIR__ . '/../../_includes/footer.php';
    ?>
</body>

</html>