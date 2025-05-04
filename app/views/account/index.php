<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "My account";
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
        $page_topic = "My account";
        require __DIR__ . '/../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto grid grid-cols-5 justify-center gap-8">
            <div class="col-span-5 md:col-span-1 md:row-span-3 h-auto flex justify-center items-start">
                <input type="file" class="hidden" id="upload-thumbnail" accept="image/*">
                <label for="upload-thumbnail" class="w-full max-w-36 aspect-square flex justify-center items-center border-dotted border-2 
                    border-[var(--color-dark-blue-bg)] bg-[var(--color-grey-bg)] text-[var(--color-dark-blue-bg)] 
                    hover:text-[var(--color-orange)] hover:border-[var(--color-orange)] ease-linear duration-100 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 aspect-square my-1" viewBox="0 0 20 20">
                        <path fill="currentColor" d="M6 3a3 3 0 0 0-3 3v9.076a.51.51 0 0 0 .868.363l1.342-1.325l3.738-3.68a1.5 1.5 0 0 1 2.104 0l1.742 1.715l2.308-2.308A2.86 2.86 0 0 1 17 9.003V6a3 3 0 0 0-3-3zm8 4.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 1-1 0a.5.5 0 0 1 1 0m-2.727 7.17l1.813-1.814l-1.735-1.709a.5.5 0 0 0-.702 0l-4.224 4.159c-.22.236-.008.587.296.478l.327-.117c.705-.253 1.764-.55 2.747-.154c.286.115.512.28.684.472c.154-.495.426-.947.794-1.315m.707.707l4.83-4.83a1.87 1.87 0 1 1 2.644 2.646l-4.83 4.829a2.2 2.2 0 0 1-1.02.578l-1.221.305c-1.122.328-2.795.222-3.314-.183c-.449-.35-.467-.887-.316-1.244c.034-.08-.026-.183-.111-.17c-.495.07-.9.25-1.3.427c-.584.26-1.156.513-1.976.411c-.711-.088-1.107-.459-1.325-.825c-.122-.204.147-.392.36-.286c.368.184.829.335 1.216.25c.251-.056.577-.193.943-.347c.885-.373 2.003-.843 2.863-.497c.636.256.583.981.404 1.33c-.035.066-.008.16.065.177a4.6 4.6 0 0 0 1.112.088a1 1 0 0 1 .023-.14l.375-1.498a2.2 2.2 0 0 1 .578-1.02" />
                    </svg>
                    <div class="w-5/6 aspect-square opacity-40 flex justify-center items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 
                        -translate-y-1/2 overflow-hidden pointer-events-none">
                        <img src="/assets/images/users/user.jpg" class="min-w-full min-h-full" alt="Image preview">
                    </div>
                </label>
            </div>
            <div class="col-span-5 md:col-span-2 h-8">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="First name">
            </div>
            <div class="col-span-5 md:col-span-2 h-8">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Last name">
            </div>
            <div class="col-span-5 md:col-span-4 h-8">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Username" readonly disabled>
            </div>
            <div for="country" class="col-span-5 md:col-span-4 h-8">
                <select class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Country">
                    <option selected value="">Country</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="singapore">Singapore</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="thailand">Thailand</option>
                    <option value="vietnam">Vietnam</option>
                    <option value="pakistan">Pakistan</option>
                </select>
            </div>
            <div class="col-span-5 h-auto">
                <textarea type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border p-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs resize-none" rows="10" placeholder="Bio"></textarea>
            </div>
        </div>
        <div class="w-full h-auto flex justify-end items-center py-8">
            <?php
            $btn_text = "Save";
            require __DIR__ . '/../_includes/primary-btn.php';
            ?>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>