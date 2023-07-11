<?php
    class Emails extends CommunicationsSistems {
        public $attached;
        public static $notificationsLed = 'yellow';

        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            if($this->delivered){
                return 'Email inviata';
            } else {
                return 'Email non inviata';
            }
        }
        
        public function print(){
            return 'Email stampata';
        }

        public function forward(){
            return 'Email inoltrata';
        }
    }
?>