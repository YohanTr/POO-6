<?php

class Speedometer {
    const valuesMilesToKm = 1.60934;


    public static function convertKmToMiles(int $distance)
    {
        return $distance / self::valuesMilesToKm;

    }
    public static function convertMilesToKm(int $distance)
    {
        return self::valuesMilesToKm * $distance;
    }
}

