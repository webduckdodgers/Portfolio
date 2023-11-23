
<?php
    $destinataire = "marc.romero.ostos@gmail.com";
    $sujet = "Essai";
    $contenu = "Coucou! Ça marche";

    mail($destinataire, $sujet, $contenu, "");
?>