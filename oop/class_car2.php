<?php

class Car
{
    function MoveWheels()
    {
        echo "Wheels move";
    }
}

if (method_exists("Car", "MoveWheels")) {
    echo "the method exist";
} else {
    echo "no";
}