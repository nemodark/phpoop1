<?php
        require_once "classes/CarDistance.php";
        //Instance
        $calculate = new CarDistance("John Doe");
        echo $calculate->consumption;

        if(isset($_POST['submit'])){
            $gas = $_POST['gas'];
            $distance = $_POST['distance'];

            $calculate->calculate($gas, $distance);
        }
      ?>