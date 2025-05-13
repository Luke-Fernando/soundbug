<button id="<?php echo $id ? $id : ""; ?>" class="text-xs text-[var(--color-grey-bg)] px-4 py-3 hover:bg-[var(--color-orange)] 
bg-[var(--color-dark-blue-bg)] ease-linear duration-100" type="<?php echo $type ? $type : "button"; ?>">
    <?php
    echo $btn_text ? $btn_text : "";
    ?>
</button>