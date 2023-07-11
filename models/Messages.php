<?php
    class Messages extends CommunicationsSistems {
        public $enabledResponse = false;
        public static $notificationsLed = 'purple';

        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            if($this->delivered){
                return 'Messaggio inviato';
            } else {
                return 'Messaggio non inviato';
            }
        }

        public function response(){
            return 'Ok';
        }

        public function enabledResponse(){
            $this->enabledResponse = true;
        }
    }
?>