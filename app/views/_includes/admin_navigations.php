<?php
$active = "text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-dark-blue-bg)]";
$inactive = "text-[var(--color-grey-bg)] px-2.5 py-1 text-xs bg-[var(--color-low-blue-bg)] hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100";
$nav_links = ["Tracks", "Users", "Operators", "Stats"];
?>
<div class="w-full h-auto flex justify-start items-center mb-16">
    <?php
    for ($i = 0; $i < count($nav_links); $i++) {
    ?>
        <a href="/admin/<?php echo strtolower($nav_links[$i]); ?>" class="<?php
                                                                            if ($active_page == strtolower($nav_links[$i])) {
                                                                                echo $active;
                                                                            } else {
                                                                                echo $inactive;
                                                                            }
                                                                            ?>">
            <?php echo $nav_links[$i]; ?>
        </a>
    <?php
    }
    ?>
    <!-- <a href="admin/tracks" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs <?php if ($active_page == "tracks") {
                                                                                            echo $active;
                                                                                        } ?> 
    bg-[var(--color-dark-blue-bg)]">Tracks</a>
    <a href="admin/people" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs <?php if ($active_page == "users") {
                                                                                    ?>!bg-[var(--color-dark-blue-bg)]<?php
                                                                                                                    }  ?> 
    bg-[var(--color-low-blue-bg)] hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Users</a>
    <a href="admin/admins" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs <?php if ($active_page == "operators") {
                                                                                        echo $active;
                                                                                    }  ?> 
    bg-[var(--color-low-blue-bg)] hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Operators</a>
    <a href="admin/stats" class="text-[var(--color-grey-bg)] px-2.5 py-1 text-xs <?php if ($active_page == "stats") {
                                                                                        echo $active;
                                                                                    }  ?> 
    bg-[var(--color-low-blue-bg)] hover:bg-[var(--color-dark-blue-bg)] ease-linear duration-100">Stats</a> -->
</div>