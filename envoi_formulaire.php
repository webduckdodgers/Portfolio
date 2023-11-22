
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $destinataire = 'marc.romero.ostos@gmail.com'; // Remplacez par votre adresse e-mail

    $sujet = 'Nouveau message depuis le formulaire de contact';
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Message: $message\n";

    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($destinataire, $sujet, $contenu, $headers);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Votre Document à été envoyer :)</h1>
</body>
</html>

