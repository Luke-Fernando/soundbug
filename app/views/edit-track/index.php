<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Edit Track";
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
    <section class="h-auto container-sub">
        <?php
        $page_topic = "Edit Track";
        require __DIR__ . '/../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto flex flex-col justify-start items-start gap-10">
            <div class="w-full h-auto flex justify-start items-start gap-10 flex-wrap">
                <div class="w-44 h-auto flex flex-col justify-start items-start gap-3.5">
                    <p class="text-sm text-[var(--color-dark-blue)]">Thumbnail</p>
                    <input type="file" class="hidden" id="upload-thumbnail" accept="image/*">
                    <label for="upload-thumbnail" class="w-full aspect-square flex justify-center items-center border-dotted border-2 
                    border-[var(--color-dark-blue-bg)] bg-[var(--color-grey-bg)] text-[var(--color-dark-blue-bg)] 
                    hover:text-[var(--color-orange)] hover:border-[var(--color-orange)] ease-linear duration-100 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 aspect-square my-1" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M3 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0 15a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1z" />
                            <path fill="currentColor" d="M17 4H3v10h14zM5 12l2.5-3l2 2L12 8l3 4zm-1 3h12v1H4z" />
                        </svg>
                        <div class="w-5/6 aspect-square opacity-40 flex justify-center items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 
                        -translate-y-1/2 overflow-hidden pointer-events-none">
                            <img src="/assets/images/products/flower.jpg" class="min-w-full min-h-full" alt="Image preview">
                        </div>
                    </label>
                </div>
                <div class="w-52 h-auto flex flex-col justify-start items-start gap-3.5">
                    <p class="text-sm text-[var(--color-dark-blue)]">Track</p>
                    <input type="file" class="hidden" id="upload-track" accept="audio/*">
                    <label for="upload-track" class="w-full h-auto flex justify-center items-center border-dotted border-2 
                    border-[var(--color-dark-blue-bg)] bg-[var(--color-grey-bg)] text-[var(--color-dark-blue-bg)] 
                    hover:text-[var(--color-orange)] hover:border-[var(--color-orange)] ease-linear duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 aspect-square my-1" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M17.47 14.47a.75.75 0 0 1 1.06 0l2.5 2.5a.75.75 0 1 1-1.06 1.06l-1.22-1.22V22a.75.75 0 0 1-1.5 0v-5.19l-1.22 1.22a.75.75 0 1 1-1.06-1.06z" clip-rule="evenodd" />
                            <path fill="currentColor" d="M12.25 15a1.25 1.25 0 1 0-2.5 0a1.25 1.25 0 0 0 2.5 0" />
                            <path fill="currentColor" fill-rule="evenodd" d="M15.75 21.273A10 10 0 0 1 12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10a10 10 0 0 1-.547 3.27l-1.863-1.86a2.25 2.25 0 0 0-3.182 0l-2.5 2.5a2.25 2.25 0 0 0 1.841 3.827zM13 6.25a.75.75 0 0 1 .75.75A2.25 2.25 0 0 0 16 9.25a.75.75 0 0 1 0 1.5a3.73 3.73 0 0 1-2.25-.75v5a2.75 2.75 0 1 1-1.5-2.45V7a.75.75 0 0 1 .75-.75" clip-rule="evenodd" />
                        </svg>
                    </label>
                    <div class="w-full h-auto flex justify-start items-center">
                        <input type="checkbox" class="hidden peer" id="preview-track">
                        <label for="preview-track" class="w-6 aspect-square flex justify-center items-center text-[var(--color-dark-blue-bg)] 
                        hover:text-[var(--color-orange)] peer-checked:scale-90 peer-checked:text-[var(--color-orange)] ease-linear 
                        duration-100">
                            <?php
                            $styles = "w-full";
                            require __DIR__ . '/../_includes/icons/play-icon.php';
                            ?>
                        </label>
                        <div class="w-full h-1 bg-[var(--color-grey-bg)] relative">
                            <div class="w-1/2 h-full bg-[var(--color-orange)] absolute top-0 left-0"></div>
                        </div>
                    </div>
                    <div class="w-full h-auto flex justify-end items-center">
                        <p class="text-xs text-[var(--color-dark-blue-bg)]">00:00</p>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto grid grid-cols-6 gap-5 md:gap-8">
                <div class="col-span-4 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="title" class="text-[var(--color-dark-blue)] text-sm">
                        Title
                    </label>
                    <input type="text" name="title" id="title" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                </div>
                <div class="col-span-2 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="price" class="text-[var(--color-dark-blue)] text-sm">
                        Price &#40;usd&#41;
                    </label>
                    <input type="text" name="price" id="price" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                </div>
                <div class="col-span-3 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="category" class="text-[var(--color-dark-blue)] text-sm">
                        Category
                    </label>
                    <select type="text" name="category" id="category" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                        <option selected value="">Category</option>
                        <option selected value="classic">Classic</option>
                        <option selected value="pop">Pop</option>
                        <option selected value="rap">Rap</option>
                        <option selected value="rock">Rock</option>
                    </select>
                </div>
                <div class="col-span-3 h-auto flex flex-col justify-start items-start gap-3.5">
                    <label for="sub-category" class="text-[var(--color-dark-blue)] text-sm">
                        Sub category
                    </label>
                    <select type="text" name="sub-category" id="sub-category" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                        <option selected value="">Sub category</option>
                        <option selected value="modern">Modern</option>
                        <option selected value="classic">Classic</option>
                        <option selected value="pop">Pop</option>
                        <option selected value="rap">Rap</option>
                        <option selected value="rock">Rock</option>
                    </select>
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
                require __DIR__ . '/../_includes/primary-btn.php';
                ?>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>