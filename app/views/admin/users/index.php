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
        <?php
        $active_page = "users";
        require __DIR__ . '/../../_includes/admin_navigations.php';
        ?>
        <?php
        require __DIR__ . '/../../_includes/search/search_bar_admin.php';
        ?>
        <div class="w-full h-auto flex flex-col justify-start items-start overflow-auto">
            <div class="w-full min-w-[687px] h-auto flex flex-col justify-start items-start pb-20">
                <div class="w-full h-auto grid grid-cols-10 mb-10">
                    <div class="col-span-1 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]"></p>
                    </div>
                    <div class="col-span-3 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Name</p>
                    </div>
                    <div class="col-span-3 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Username</p>
                    </div>
                    <div class="col-span-1 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Since</p>
                    </div>
                    <div class="col-span-1 py-2 flex justify-center items-center">
                        <p class="text-sm text-[var(--color-dark-blue)]">Status</p>
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
                            <a href="/profile" target="_blank" class="w-3/5 aspect-square border-4 border-[var(--color-low-orange)] 
                            hover:border-[var(--color-orange)] flex justify-center items-center overflow-hidden ease-linear duration-100">
                                <img src="/assets/images/users/user.jpg" class="min-w-full min-h-full" alt="">
                            </a>
                        </div>
                        <div class="col-span-3 py-2 flex justify-start items-start">
                            <a href="/profile" target="_blank" class="text-xs text-[var(--color-dark-blue)] line-clamp-2">
                                Annie Noran
                            </a>
                        </div>
                        <div class="col-span-3 py-2 flex justify-center items-center box-border px-2.5">
                            <a href="/profile" target="_blank" class="text-xs text-[var(--color-dark-blue)] line-clamp-2">
                                @annienoran
                            </a>
                        </div>
                        <div class="col-span-1 py-2 flex justify-center items-center">
                            <p class="text-xs text-[var(--color-dark-blue)]">01 Dec 2022</p>
                        </div>
                        <div title="Active" class="col-span-1 py-2 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 aspect-square text-green-300" viewBox="0 0 12 12">
                                <rect width="10" height="10" x="1" y="1" fill="currentColor" fill-rule="evenodd" stroke="currentColor" rx="1" stroke-width="1" />
                            </svg>
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
                                    ease-linear duration-100 py-1">Promote</a>
                                    <a href="#" class="text-xs text-[var(--color-dark-blue)] hover:text-[var(--color-orange)] ease-linear 
                                    duration-100 py-1">Suspend</a>
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