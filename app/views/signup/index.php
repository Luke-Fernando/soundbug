<!DOCTYPE html>
<html lang="en">
<?php
$head_title = "SoundBug | Sign Up";
require __DIR__ . '/../_includes/head.php';
?>

<body data-handler="signup">
    <?php
    require __DIR__ . '/../_includes/navbar.php';
    ?>
    <section class="h-auto container-sub flex flex-col justify-start items-start">
        <?php
        $page_topic = "Sign Up";
        require __DIR__ . '/../_includes/page_topic.php';
        ?>
        <div class="w-full h-auto grid grid-cols-2 gap-y-5 sm:gap-y-10 gap-x-5">
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="first-name" class="text-[var(--color-dark-blue)] text-sm">
                    First name
                </label>
                <input type="text" name="first-name" id="first-name" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your first name here">
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="last-name" class="text-[var(--color-dark-blue)] text-sm">
                    Last name
                </label>
                <input type="text" name="last-name" id="last-name" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your last name here">
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="username" class="text-[var(--color-dark-blue)] text-sm">
                    Username
                </label>
                <input type="text" name="username" id="username" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your username here">
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="email" class="text-[var(--color-dark-blue)] text-sm">
                    Email
                </label>
                <input type="email" name="email" id="email" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your email here">
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="mobile" class="text-[var(--color-dark-blue)] text-sm">
                    Mobile No
                </label>
                <input type="text" name="mobile" id="mobile" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your mobile number here">
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5">
                <label for="country" class="text-[var(--color-dark-blue)] text-sm">
                    Country
                </label>
                <select name="country" id="country" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                    <option value="" selected>Select your country</option>
                    <?php
                    foreach ($countries as $country) {
                        $id = $country['id'];
                        $name = $country['name'];
                    ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5 relative">
                <label for="password" class="text-[var(--color-dark-blue)] text-sm">
                    Password
                </label>
                <input type="password" name="password" id="password" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border pl-3 pr-8 border-0 
                ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your password here">
                <label for="password-toggle" class="h-8 aspect-square flex justify-center items-center absolute bottom-0 right-0 
                text-[var(--color-dark-blue-bg)]">
                    <input type="checkbox" name="password-toggle" id="password-toggle" class="hidden peer" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 aspect-square peer-checked:block hidden" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path d="M14 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                            <path fill-rule="evenodd" d="M12 3C6.408 3 1.71 6.824.378 12C1.71 17.176 6.408 21 12 21s10.29-3.824 11.622-9C22.29 6.824 17.592 3 12 3m4 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0" clip-rule="evenodd" />
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 aspect-square peer-checked:hidden" viewBox="0 0 24 24">
                        <g fill="none">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 3l18 18" />
                            <path fill="currentColor" fill-rule="evenodd" d="M5.4 6.23c-.44.33-.843.678-1.21 1.032a15.1 15.1 0 0 0-3.001 4.11a1.44 1.44 0 0 0 0 1.255a15.1 15.1 0 0 0 3 4.111C5.94 18.423 8.518 20 12 20c2.236 0 4.1-.65 5.61-1.562l-3.944-3.943a3 3 0 0 1-4.161-4.161L5.401 6.229zm15.266 9.608a15 15 0 0 0 2.145-3.21a1.44 1.44 0 0 0 0-1.255a15.1 15.1 0 0 0-3-4.111C18.06 5.577 15.483 4 12 4a10.8 10.8 0 0 0-2.808.363z" clip-rule="evenodd" />
                        </g>
                    </svg>
                </label>
            </div>
            <div class="col-span-2 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-2 sm:gap-3.5 relative">
                <label for="confirm-password" class="text-[var(--color-dark-blue)] text-sm">
                    Confirm password
                </label>
                <input type="password" name="confirm-password" id="confirm-password" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border pl-3 pr-8 border-0 
                ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs" placeholder="Place your password here">
                <label for="confirm-password-toggle" class="h-8 aspect-square flex justify-center items-center absolute bottom-0 right-0 
                text-[var(--color-dark-blue-bg)]">
                    <input type="checkbox" name="confirm-password-toggle" id="confirm-password-toggle" class="hidden peer" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 aspect-square peer-checked:block hidden" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path d="M14 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                            <path fill-rule="evenodd" d="M12 3C6.408 3 1.71 6.824.378 12C1.71 17.176 6.408 21 12 21s10.29-3.824 11.622-9C22.29 6.824 17.592 3 12 3m4 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0" clip-rule="evenodd" />
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 aspect-square peer-checked:hidden" viewBox="0 0 24 24">
                        <g fill="none">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 3l18 18" />
                            <path fill="currentColor" fill-rule="evenodd" d="M5.4 6.23c-.44.33-.843.678-1.21 1.032a15.1 15.1 0 0 0-3.001 4.11a1.44 1.44 0 0 0 0 1.255a15.1 15.1 0 0 0 3 4.111C5.94 18.423 8.518 20 12 20c2.236 0 4.1-.65 5.61-1.562l-3.944-3.943a3 3 0 0 1-4.161-4.161L5.401 6.229zm15.266 9.608a15 15 0 0 0 2.145-3.21a1.44 1.44 0 0 0 0-1.255a15.1 15.1 0 0 0-3-4.111C18.06 5.577 15.483 4 12 4a10.8 10.8 0 0 0-2.808.363z" clip-rule="evenodd" />
                        </g>
                    </svg>
                </label>
            </div>
            <div class="col-span-2 h-auto flex justify-between items-center mt-3.5">
                <p class="text-xs text-[var(--color-dark-blue)]">
                    Already have an account? <a href="/signin" class="underline pl-1 hover:text-[var(--color-orange)] ease-linear 
                    duration-100">Signin</a>
                </p>
                <?php
                $btn_text = "Sign Up";
                $id = "send";
                $type = "submit";
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