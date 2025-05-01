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
        <div class="w-full h-auto grid grid-cols-5 justify-center gap-10">
            <div class="col-span-5 md:col-span-1 md:row-span-3 overflow-hidden flex flex-col justify-start items-center ">
                <div class="w-full max-w-36 aspect-square flex justify-center items-center overflow-hidden border-4 
                border-[var(--color-low-orange)] hover:border-[var(--color-orange)] ease-linear duration-100">
                    <img src="/assets/images/users/user.jpg" alt="User" class="min-w-full min-h-full">
                </div>
                <input type="file" class="hidden" id="upload-avatar" accept="image/*">
                <label for="upload-avatar" class="w-8 aspect-square text-[var(--color-dark-blue-bg)] flex justify-center items-center mt-2.5 
                hover:text-[var(--color-orange)] ease-linear duration-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full aspect-square" viewBox="0 0 20 20">
                        <path fill="currentColor" d="M6 3a3 3 0 0 0-3 3v9.076a.51.51 0 0 0 .868.363l1.342-1.325l3.738-3.68a1.5 1.5 0 0 1 2.104 0l1.742 1.715l2.308-2.308A2.86 2.86 0 0 1 17 9.003V6a3 3 0 0 0-3-3zm8 4.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 1-1 0a.5.5 0 0 1 1 0m-2.727 7.17l1.813-1.814l-1.735-1.709a.5.5 0 0 0-.702 0l-4.224 4.159c-.22.236-.008.587.296.478l.327-.117c.705-.253 1.764-.55 2.747-.154c.286.115.512.28.684.472c.154-.495.426-.947.794-1.315m.707.707l4.83-4.83a1.87 1.87 0 1 1 2.644 2.646l-4.83 4.829a2.2 2.2 0 0 1-1.02.578l-1.221.305c-1.122.328-2.795.222-3.314-.183c-.449-.35-.467-.887-.316-1.244c.034-.08-.026-.183-.111-.17c-.495.07-.9.25-1.3.427c-.584.26-1.156.513-1.976.411c-.711-.088-1.107-.459-1.325-.825c-.122-.204.147-.392.36-.286c.368.184.829.335 1.216.25c.251-.056.577-.193.943-.347c.885-.373 2.003-.843 2.863-.497c.636.256.583.981.404 1.33c-.035.066-.008.16.065.177a4.6 4.6 0 0 0 1.112.088a1 1 0 0 1 .023-.14l.375-1.498a2.2 2.2 0 0 1 .578-1.02" />
                    </svg>
                </label>
            </div>
            <div class="col-span-5 md:col-span-2 h-10">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-sm" placeholder="First name">
            </div>
            <div class="col-span-5 md:col-span-2 h-10">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-sm" placeholder="Last name">
            </div>
            <div class="col-span-5 md:col-span-4 h-10">
                <input type="text" class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-sm" placeholder="Username" readonly disabled>
            </div>
            <div for="country" class="col-span-5 md:col-span-4 h-10">
                <select class="w-full h-full bg-[var(--color-low-blue-bg)] box-border px-3 border-0 ring-0 focus:ring-2 
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-sm" placeholder="Country">
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
                focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-sm resize-none" rows="10" placeholder="Bio"></textarea>
            </div>
        </div>
        <div class="w-full h-auto flex justify-end items-center py-8">
            <button class="text-xs md:text-sm text-[var(--color-grey-bg)] px-3 py-3 hover:bg-[var(--color-orange)] 
            bg-[var(--color-dark-blue-bg)] ease-linear duration-100">
                Save
            </button>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>