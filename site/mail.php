<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('mdechir@la-providence.net', 'TP FINAL CONTACT', $_POST['message']);
    if ($retour) 
    {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>