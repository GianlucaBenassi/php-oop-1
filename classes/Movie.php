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
    }

?>