<?php 

$name = "It is worth noting that the mail() function is not suitable for larger volumes of email in a loop. This function opens and closes an SMTP socket for each email, which is not very efficient.

The SMTP implementation (Windows only) of mail() differs in many ways from the sendmail implementation. First, it doesn't use a local binary for composing messages but only operates on direct sockets which means a MTA is needed listening on a network socket (which can either on the localhost or a remote machine).

Second, the custom headers like From:, Cc:, Bcc: and Date: are not interpreted by the MTA in the first place, but are parsed by PHP.";

$dva = "It is worth noting that the mail() function is not suitable for larger volumes of email in a loop. This function opens and closes an SMTP socket for each email, which is not very efficient.

The SMTP implementation (Windows only) of mail() differs in many ways from the sendmail implementation. First, it doesn't use a local binary for composing messages but only operates on direct sockets which means a MTA is needed listening on a network socket (which can either on the localhost or a remote machine).

Second, the custom headers like From:, Cc:, Bcc: and Date: are not interpreted by the MTA in the first place, but are parsed by PHP.";
$naslov = "VanillaLifetime" ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 class= "titles"> <?php echo $naslov; ?> </h1>
    <p><?php echo $name, "<br>", "<br>",  $dva ; ?></p>
</body>
</html>