<?php 
    class Movie {
        public $title;
        public $duration;
        public $type;
        function __construct($_title, $_duration) {
            $this-> title = $_title;
            $this-> duration = $_duration;
        }
        function setType() {
            if ($this-> duration > 30) $this-> type = "Long";
            else $this-> type = "Short";
        }
        function getType() {
            $this-> setType();
            return $this-> type;
        }

    }

    $movie1 = new Movie("la vita è bella", 116);
    $movie2 = new Movie("paperman", 7);
    $movie1->getType();
    $movie2->getType();
    var_dump($movie1);
    var_dump($movie2);