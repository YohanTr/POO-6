<?php

class Speedometer {
    const valuesMilesToKm = 1.60934;


    public static function convertKmToMiles(int $distance)
    {
        return round($distance / self::valuesMilesToKm, 2);

    }
    public static function convertMilesToKm(int $distance)
    {
        return round(self::valuesMilesToKm * $distance, 2);
    }
}
