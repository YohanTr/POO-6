<?php

class Speedometer {
    const VALUESMILESTOKM = 1.60934;


    public static function convertKmToMiles(int $distance)
    {
        return round($distance / self::VALUESMILESTOKM, 2);

    }
    public static function convertMilesToKm(int $distance)
    {
        return round(self::VALUESMILESTOKM * $distance, 2);
    }
}
