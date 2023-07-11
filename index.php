<?php
    require_once __DIR__.'/models/CommunicationsSistems.php';
    require_once __DIR__.'/models/Emails.php';
    require_once __DIR__.'/models/Attached.php';
    require_once __DIR__.'/models/Messages.php';
    require_once __DIR__.'/models/PushNotifications.php';

    //Creazione istanze
    $email1 = new Emails();
    $email1->setSender('Io');
    $email1->setReceiver('Boolean');
    $email1->setTitle('PHP OOP 3');
    $email1->setContent('Esercizio concluso');
    $email1->attached = new Attached('PHP-OOP-3', 'Esercizio completo');
    $email2 = new Emails();
    $email2->setSender('Boolean');
    $email2->setReceiver('Io');
    $email2->setTitle('PHP OOP 3');
    $email2->setContent('Ottimo lavoro');

    $message1 = new Messages();
    $message1->setSender('Christian');
    $message1->setReceiver('Gabri');
    $message1->setTitle('Che famo?');
    $message1->setContent('Che si fa stasera?');
    $message2 = new Messages();
    $message2->setSender('Christian');
    $message2->setReceiver('Gionni');
    $message2->setTitle('Stasera');
    $message2->setContent('Ci si sta organizzando, ti unisci?');

    $notification1 = new PushNotifications('path to icon');
    $notification1->setSender('Dragon Ball Z Dokkan Battle');
    $notification1->setReceiver('Christian');
    $notification1->setTitle('Top Grossing!');
    $notification1->setContent('Fai il log in per ritirare le stones del top grossing!');
    $notification2 = new PushNotifications('path to icon');
    $notification2->setSender('One Piece Treasure Cruise');
    $notification2->setReceiver('Christian');
    $notification2->setTitle('Che fine hai fatto?');
    $notification2->setContent('E\' da un po\' che non fai il log in, accedi ora!');

    echo '<pre>';
    var_dump($email1);
    var_dump($email2);

    var_dump($message1);
    var_dump($message2);

    var_dump($notification1);
    var_dump($notification2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
</head>
<body>
    <h1>
        <------------------------>
    </h1>
</body>
</html>