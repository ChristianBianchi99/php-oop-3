<?php
    class PushNotifications extends CommunicationsSistems {
        public $icon;
        public $visible = true;
        public static $notificationsLed = 'Green';

        public function __construct($icon){
            $this->icon = $icon;
        }

        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            return 'Notifica inviata';
        }

        public function click(){
            return 'Indirizzamento all\'app. . .';
        }

        public function hideNotification(){
            $this->$visible = false;
        }
    }
?>