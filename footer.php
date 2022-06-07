<?php function afficher_footer($nom, $prenom, $email)
{ ?>

    <p> Je suis <?php echo $nom . " " . $prenom ?>.
        <br />
        Contactez-moi à: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>

    </p>


<?php } ?>