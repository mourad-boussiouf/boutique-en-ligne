<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
</head>
<body>
    <form action="" method="">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">Send me a random password</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['email'])) {
    $password = uniqid();
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $subject = 'Mot de passe oublié';
    $message = "Bonjour, voici votre nouveau mot de passe : $password";
    $headers = 'Content-Type: text/plain; charset="UTF-8"';

    if (mail($_POST['email'], $subject, $message, $headers)) {
        $stmt = $db->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->execute([$hashedPassword, $_POST['email']]);
        echo "E-mail envoyé";
    } else {
        echo "Une erreur est survenue";
    }
}
?>