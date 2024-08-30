<?php

    function fullName() {

        $firstName = "Fábio";
        $middlename = "Nunes";
        $lastName = "Nunes";

        $fullName = $firstName . " " . $middlename . " " . $lastName . "<br>";

        echo $fullName;
    }

    fullName();
