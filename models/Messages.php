<?php
    class Messages extends CommunicationsSistems {
        public $enabledResponse = false;
        public static $notificationsLed = 'Purple';

        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            return 'Messaggio inviato';
        }
        public function response(){
            return 'Ok';
        }
        public function enabledResponse(){
            $this->enabledResponse = true;
        }
    }
?>