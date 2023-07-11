<?php
    class Emails extends CommunicationsSistems {
        public $attached;
        public $delivered = false;
        public static $notificationsLed = 'Yellow';

        public function send(){
            $this->delivered = true;
        }
        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            return 'Email inviata';
        }
        public function print(){
            return 'Email stampata';
        }
        public function forward(){
            return 'Email inoltrata';
        }
    }
?>