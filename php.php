<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="post">
        <label> Email </label>
        <input type="email" name ="email" required>
        <label> Sujet </label>
        <input type="text" name="sujet" required>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit" value="Envoyer le message">
    </form>

    <?php
    if (isset($_POST['message'])) {
        $retour = mail('theo.briffaux@gmail.com', 'Envoi depuis la page Contact', $_POST['message'] . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>