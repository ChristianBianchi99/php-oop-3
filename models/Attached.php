<?php
    class Attached {
        public $name;
        public $content;

        public function __construct($name, $content){
            $this->name = $name;
            $this->content = $content;
        }
    }
?>