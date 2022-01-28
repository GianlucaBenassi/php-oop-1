<?php

    class Movie {
        private $title;
        private $director;
        private $year;
        private $duration;
        private $price;

        function __construct($_title, $_director, $_year, $_duration, $_price)
        {
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
            $this->duration = $_duration;
            $this->price = $_price;
        }

        function getTitle() {
            return $this->title;
        }

        function getDirector() {
            return $this->director;
        }

        function getYear() {
            return $this->year;
        }

        function getDuration() {
            return $this->duration;
        }

        function getPrice() {
            return $this->price;
        }
        
        function getDiscount() {
            return $this->price * 90 / 100;
        }
    }

?>