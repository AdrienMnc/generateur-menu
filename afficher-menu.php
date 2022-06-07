<?php

function afficher_menu($menu)
{ ?>

    <?php foreach ($menu as $key => $value) { ?>

        <a href="<?php echo $value; ?>"> <?php echo $key; ?></a>

<?php }
} ?>