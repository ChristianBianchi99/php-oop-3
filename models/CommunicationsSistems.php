<?php
    class CommunicationsSistems {
        private $sender;
        private $receiver;
        private $title;
        private $content;
        public $delivered = false;
        public static $notificationsSound = 'DRIIIN';

        public function send(){
            $this->delivered = true;
        }
        
        //Funzione per l'ottenimento e la stampa del valore di $sender
        public function setSender($sender){
            $this->sender = $sender;
        }
        public function getSender(){
            return $this->sender;
        }

        //Funzione per l'ottenimento e la stampa del valore di $receiver
        public function setReceiver($receiver){
            $this->receiver = $receiver;
        }
        public function getReceiver(){
            return $this->receiver;
        }

        //Funzione per l'ottenimento e la stampa del valore di $title
        public function setTitle($title){
            $this->title = $title;
        }
        public function getTitle(){
            return $this->title;
        }

        //Funzione per l'ottenimento e la stampa del valore di $content
        public function setContent($content){
            $this->content = $content;
        }
        public function getContent(){
            return $this->content;
        }

        //Funzione per la stampa del risultato dell'invio
        public function sendResponse(){
            return 'Invio effettuato';
        }
    }
?>