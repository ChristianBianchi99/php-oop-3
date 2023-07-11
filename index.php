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

    $notification1 = new PushNotifications('<-path to icon->');
    $notification1->setSender('Dragon Ball Z Dokkan Battle');
    $notification1->setReceiver('Christian');
    $notification1->setTitle('Top Grossing!');
    $notification1->setContent('Fai il log in per ritirare le stones del top grossing!');
    $notification2 = new PushNotifications('<-path to icon->');
    $notification2->setSender('One Piece Treasure Cruise');
    $notification2->setReceiver('Christian');
    $notification2->setTitle('Che fine hai fatto?');
    $notification2->setContent('E\' da un po\' che non fai il log in, accedi ora!');

    //Creazione array istanze
    $emails = [
        $email1,
        $email2,
    ];
    $messages = [
        $message1,
        $message2,
    ];
    $notifications = [
        $notification1,
        $notification2,
    ];

    //Utilizzo metodi
    $email1->send();
    $message1->send();
    $notification1->send();
    $notification2->send();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- INIZIO STAMPA EMAILS -->
                <div class="headline">
                    <h2>
                        Email
                    </h2>
                    <div class="led <?php echo Emails::$notificationsLed ?>">

                    </div>
                </div>
                <div class="email">
                    <?php foreach($emails as $email){ ?>
                        <div class="card">
                            <table>
                                <tr>
                                    <th>
                                        Mittente:
                                    </th>
                                    <td>
                                        <?php echo $email->getSender() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Destinatario:
                                    </th>
                                    <td>
                                        <?php echo $email->getReceiver() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Titolo:
                                    </th>
                                    <td>
                                        <?php echo $email->getTitle() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Contenuto:
                                    </th>
                                    <td>
                                        <?php echo $email->getContent() ?>
                                    </td>
                                </tr>
                                <?php if(isset($email->attached)){ ?>
                                <tr>
                                    <th>
                                        Nome allegato:
                                    </th>
                                    <td>
                                        <?php echo $email->attached->name ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Contenuto allegato:
                                    </th>
                                    <td>
                                        <?php echo $email->attached->content ?>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <th>
                                        Stato email:
                                    </th>
                                    <td>
                                        <?php echo $email->sendResponse() ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php } ?>
                </div>
                <!-- INIZIO STAMPA MESSAGES -->
                <div class="headline">
                    <h2>
                        Messaggi
                    </h2>
                    <div class="led <?php echo Messages::$notificationsLed ?>">

                    </div>
                </div>
                <div class="email">
                    <?php foreach($messages as $message){ ?>
                        <div class="card">
                            <table>
                                <tr>
                                    <th>
                                        Mittente:
                                    </th>
                                    <td>
                                        <?php echo $message->getSender() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Destinatario:
                                    </th>
                                    <td>
                                        <?php echo $message->getReceiver() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Titolo:
                                    </th>
                                    <td>
                                        <?php echo $message->getTitle() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Contenuto:
                                    </th>
                                    <td>
                                        <?php echo $message->getContent() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Stato messaggio:
                                    </th>
                                    <td>
                                        <?php echo $message->sendResponse() ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php } ?>
                </div>
                <!-- INIZIO STAMPA PUSH NOTIFICATIONS -->
                <div class="headline">
                    <h2>
                        Notifiche
                    </h2>
                    <div class="led <?php echo PushNotifications::$notificationsLed ?>">

                    </div>
                </div>
                <div class="email">
                    <?php foreach($notifications as $notification){ ?>
                        <div class="card">
                            <table>
                                <tr>
                                    <td>
                                        <?php echo $notification->icon ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mittente:
                                    </th>
                                    <td>
                                        <?php echo $notification->getSender() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Destinatario:
                                    </th>
                                    <td>
                                        <?php echo $notification->getReceiver() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Titolo:
                                    </th>
                                    <td>
                                        <?php echo $notification->getTitle() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Contenuto:
                                    </th>
                                    <td>
                                        <?php echo $notification->getContent() ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Stato notifica:
                                    </th>
                                    <td>
                                        <?php echo $notification->sendResponse() ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>