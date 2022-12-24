<?php
 if(!isset($_POST['mail']) || !isset($_POST['message'])){
    echo "il vous faut un mail et un message pour que ce mail souhaite envoyer";
    return;
 }

 $mail = $_POST['mail'];
 $message = $_POST['message'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h5>Rappel de vos informations</h5>
    <p><strong>Votre mail</strong> : <?php echo htmlspecialchars($mail) ;?> </p>
    <p><strong>Votre message</strong> : <?php echo strip_tags($message) ;?> </p>
</body>
</html>