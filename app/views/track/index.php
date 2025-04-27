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
        <div class="w-auto max-w-full h-auto flex flex-col sm:flex-row justify-center items-center sm:items-start m-auto">
            <div class="w-52 aspect-square flex justify-center items-center overflow-hidden">
                <img src="/assets/images/products/flower.jpg" alt="<?php echo $track_name . " image"; ?>" class="min-w-full min-h-full">
            </div>
            <div class="flex flex-col justify-start items-center sm:items-start sm:ml-10">
                <div class="text-[var(--color-dark-blue)] text-xl px-3.5 py-2 bg-[var(--color-grey-bg)]">
                    &#36;
                    <?php $price = "04.99"; ?>
                    <span><?php echo $price; ?></span>
                </div>
                <div class="w-auto max-w-3xs h-auto flex justify-start items-start my-4">
                    <p class="text-[var(--color-dark-blue)] text-xs sm:text-sm">Love like a flower</p>
                </div>
                <div class="w-auto max-w-full h-auto flex justify-start items-center">
                    <input id="track-play" type="checkbox" class="hidden peer">
                    <label for="track-play" class="w-10 aspect-square flex justify-center items-center text-[var(--color-dark-blue-bg)] hover:text-[var(--color-orange)] 
                    ease-linear duration-100 peer-checked:text-[var(--color-orange)] peer-checked:scale-90 rotate-0">
                        <?php
                        $styles = "w-full";
                        require __DIR__ . '/../_includes/icons/play-icon.php';
                        ?>
                    </label>
                    <div class="w-40 h-1 bg-[var(--color-grey-bg)] relative">
                        <div class="absolute top-0 left-0 w-[78%] h-full bg-[var(--color-orange)]"></div>
                    </div>
                    <div class="w-auto h-auto flex justify-center items-center ml-3.5">
                        <p class="text-[var(--color-dark-blue-bg)] text-sm">03:44</p>
                    </div>
                </div>
                <div class="w-auto h-auto flex justify-center items-center mt-6">
                    <button class="w-auto h-auto bg-[var(--color-dark-blue-bg)] text-[var(--color-grey-bg)] hover:bg-[var(--color-orange)] px-3 py-2 
                    flex justify-center items-center ease-linear duration-100 cursor-pointer text-sm">
                        Get now
                    </button>
                    <a href="#" class="w-auto h-auto text-[var(--color-dark-blue-bg)] hover:text-[var(--color-orange)] px-3 py-2 
                    flex justify-center items-center ease-linear duration-100 cursor-pointer text-sm">
                        Add to collection
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full h-auto flex justify-start items-center gap-2 mt-20">
            <a href="#" class="w-16 sm:w-20 aspect-square flex justify-center items-center overflow-hidden border-4 border-[var(--color-low-orange)] 
            hover:border-[var(--color-orange)] ease-linear duration-100">
                <img src="/assets/images/users/user.jpg" alt="Profile picture of user" class="min-w-full min-h-full">
            </a>
            <div class="flex flex-col justify-start w-auto h-auto gap-1">
                <p class="text-xs text-[var(--color-dark-blue-bg)]">Creator</p>
                <a href="#" class=" text-xs sm:text-sm text-[var(--color-dark-blue)]">Annie Norman</a>
            </div>
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-center mt-20">
            <div class="w-full h-auto flex justify-start items-center mb-10">
                <h3 class="text-[var(--color-dark-blue)]">Description</h3>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start">
                <input id="read-more" type="checkbox" class="hidden peer">
                <p class="text-xs/7 text-[var(--color-dark-blue)] line-clamp-2 peer-checked:line-clamp-none">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe ab ex consectetur, quibusdam dolores quod ipsum animi repudiandae ut quaerat quas quae autem nemo velit assumenda nulla, provident accusamus ullam voluptatum suscipit tempore. Quis hic aliquam labore, et nesciunt molestiae laudantium numquam odit officia a? Suscipit rem, enim nobis reprehenderit, ducimus eveniet asperiores cum quisquam vitae, praesentium itaque modi consequatur. Reiciendis modi quod fugiat unde veritatis incidunt non tempora labore commodi quaerat, voluptatum vel officia molestiae excepturi quae repudiandae, et dignissimos itaque eligendi. Asperiores veritatis ab non cupiditate! Sint, enim consequatur magni quas obcaecati officiis modi veritatis expedita quos officia, asperiores quod voluptate sit. Quam eos nihil deleniti dolorum animi nostrum pariatur? Odit iste repudiandae maiores minus sed asperiores earum sunt perspiciatis voluptatibus architecto aliquam consequuntur alias, veritatis blanditiis ratione dolores ipsa magnam suscipit. Fugiat, impedit molestias enim dicta aspernatur, consequatur ut distinctio at possimus iure culpa, nulla facere excepturi!
                </p>
                <label for="read-more" class="text-[var(--color-orange)] hover:underline ease-linear duration-100 
                cursor-pointer text-xs mt-1.5">
                    Read more
                </label>
            </div>
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-center mt-20">
            <div class="w-full h-auto flex justify-start items-center mb-10">
                <h3 class="text-[var(--color-dark-blue)]">Reviews</h3>
                <p class="text-[var(--color-dark-blue-bg)] text-sm ml-1.5">(10)</p>
            </div>
            <div class="w-full h-auto justify-start items-center">
                <p class="text-5xl text-[var(--color-dark-blue)]">4&#47;<span class="text-[var(--color-orange)] text-2xl">5</span></p>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start gap-10 mt-14">
                <?php
                for ($i = 0; $i < 5; $i++) {
                    require __DIR__ . '/../_includes/review.php';
                }
                ?>
                <a href="#" class="text-sm text-[var(--color-orange)] hover:underline ease-linear duration-100 cursor-pointer">
                    See all
                </a>
            </div>
        </div>
    </section>
    <section class="container-sub flex flex-col justify-center items-center">
        <a href="#" class="w-full h-auto flex flex-col justify-center items-start hover:underline pt-15 md:pt-20">
            <?php
            $page_topic = "Related tracks";
            require __DIR__ . '/../_includes/page_topic.php';
            ?>
        </a>
        <div class="w-full h-auto product-grid">
            <?php
            $price = "9.99";
            require __DIR__ . '/../_includes/main_product_display.php';
            require __DIR__ . '/../_includes/main_product_display.php';
            require __DIR__ . '/../_includes/main_product_display.php';
            require __DIR__ . '/../_includes/main_product_display.php';
            ?>
        </div>
    </section>
    <?php
    require __DIR__ . '/../_includes/footer.php';
    ?>
</body>

</html>