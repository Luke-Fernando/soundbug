<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "My profile";
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
        $page_topic = "My profile";
        require __DIR__ . '/../_includes/page_topic.php'
        ?>
        <div class="w-full h-auto flex flex-col sm:flex-row justify-center items-center sm:items-start gap-7 sm:gap-16">
            <div class="w-28 aspect-square overflow-hidden flex justify-center items-center border-4 border-[var(--color-low-orange)] 
            hover:border-[var(--color-orange)] ease-linear duration-100">
                <img src="/assets/images/users/user.jpg" alt="User" class="min-w-full min-h-full">
            </div>
            <div class="max-w-full w-auto h-auto flex flex-col justify-start items-start">
                <p class="text-base text-[var(--color-dark-blue)] mb-0.5">Annie Norman</p>
                <p class="text-xs text-[var(--color-dark-blue)] mb-2">@annienor</p>
                <p class="text-sm text-[var(--color-dark-blue)]">Sri Lanka</p>
            </div>
        </div>
        <div class="w-full h-auto flex lg:flex-row flex-col justify-center items-start mt-16 gap-5 lg:gap-0">
            <div class="w-full lg:w-1/2 h-auto flex flex-col justify-start items-start box-border sm:px-8">
                <input type="checkbox" class="peer hidden" id="read-bio">
                <p class="text-xs/7 text-[var(--color-dark-blue)] line-clamp-6 peer-checked:line-clamp-none">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quidem sequi nemo amet ipsa minus odit nisi veritatis commodi totam praesentium laborum recusandae, in reprehenderit alias nulla obcaecati adipisci. Nemo quis libero soluta beatae culpa maiores obcaecati suscipit accusantium aliquam temporibus, qui, veritatis at. Voluptas ducimus quisquam tempore similique natus nemo fugiat, ex dolor dolorem. Voluptates voluptatibus quasi placeat eligendi eum. Vero repellendus veniam eos harum quidem praesentium quaerat quasi et saepe quos consequatur libero quia, ducimus obcaecati dolore perferendis. Id impedit laboriosam voluptatem, neque eius similique fugit praesentium veritatis repudiandae temporibus quisquam. Delectus et ipsum adipisci dicta iste velit!
                </p>
                <label for="read-bio" class="text-xs text-[var(--color-dark-blue-bg)] underline hover:text-[var(--color-orange)] mt-1 
                ease-linear duration-100">
                    Read more
                </label>
            </div>
            <div class="w-full lg:w-2/5 h-auto flex flex-col justify-center items-start box-border sm:px-8">
                <div class="w-full h-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-1">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $styles = "w-auto";
                        require __DIR__ . '/../_includes/saved_product_display.php';
                    }
                    ?>
                </div>
                <a href="/all-tracks" class="text-xs text-[var(--color-dark-blue-bg)] underline hover:text-[var(--color-orange)] 
                mt-2 ease-linear duration-100">See all</a>
            </div>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>