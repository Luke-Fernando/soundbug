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
        $active_page = "stats";
        require __DIR__ . '/../../_includes/admin_navigations.php';
        ?>
        <?php
        require __DIR__ . '/../../_includes/search/search_bar_admin.php';
        ?>
        <div class="w-full h-auto flex flex-col justify-center items-center gap-5">
            <div class="w-full h-auto grid grid-cols-6 gap-3.5 sm:gap-2.5">
                <div class="col-span-6 sm:col-span-4 h-auto flex flex-col justify-start items-start gap-1 sm:gap-3.5">
                    <label for="type" class="text-[var(--color-dark-blue)] text-sm">
                        Report type
                    </label>
                    <select name="type" id="type" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                        <option selected value="">Select your report type</option>
                        <option selected value="monthly-sales">Monthly sales</option>
                        <option selected value="most-popular-songs">Most popular songs</option>
                        <option selected value="most-popular-artists">Most popular artists</option>
                        <option selected value="most-popular-albums">Most popular albums</option>
                        <option selected value="most-popular-genres">Most popular genres</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-1 sm:gap-3.5">
                    <label for="from" class="text-[var(--color-dark-blue)] text-sm">
                        From
                    </label>
                    <input type="date" name="from" id="from" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                </div>
                <div class="col-span-6 sm:col-span-1 h-auto flex flex-col justify-start items-start gap-1 sm:gap-3.5">
                    <label for="to" class="text-[var(--color-dark-blue)] text-sm">
                        To
                    </label>
                    <input type="date" name="to" id="to" class="w-full h-8 bg-[var(--color-low-blue-bg)] box-border px-3 border-0 
                    ring-0 focus:ring-2 focus:ring-[var(--color-orange)] outline-0 text-[var(--color-dark-blue-bg)] text-xs">
                </div>
            </div>
            <div class="w-full h-auto flex justify-end items-center">
                <?php
                $btn_text = "Generate";
                require __DIR__ . '/../../_includes/primary-btn.php';
                ?>
            </div>
        </div>
        <div class="w-full h-auto flex flex-col justify-start items-start overflow-auto">
            <div class="w-full min-w-[687px] h-auto flex flex-col justify-start items-start pb-20">
                <div class="w-full h-auto flex justify-start items-start mt-10">
                    <table class="w-full h-auto border border-[var(--color-low-blue-bg)]">
                        <thead class="bg-[var(--color-low-blue-bg)] py-2">
                            <tr>
                                <th class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)]">Date</th>
                                <th class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)]">Order no</th>
                                <th class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)]">Buyer</th>
                                <th class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)]">Gross</th>
                                <th class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)]">Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 20; $i++) {
                            ?>
                                <tr>
                                    <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                        01&#47;04&#47;2025
                                    </td>
                                    <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                        21544785
                                    </td>
                                    <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                        &#64;aintchicken
                                    </td>
                                    <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                        &#36;<span>05.00</span>
                                    </td>
                                    <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                        &#36;<span>05.00</span>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2">

                                </td>
                                <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2">

                                </td>
                                <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                    Total
                                </td>
                                <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                    &#36;<span>100.00</span>
                                </td>
                                <td class="w-auto text-xs text-[var(--color-dark-blue)] py-2 border border-[var(--color-low-blue-bg)] px-0.5">
                                    &#36;<span>80.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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