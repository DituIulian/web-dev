<?php

// Functie de transformare a $minute in xOre xMinute
function runtimePrettier($minute)
{
    $ore = floor($minute / 60);

    $minuteRamase = $minute - ($ore * 60);

    if ($ore > 0) {
        return "$ore hours $minuteRamase minutes";
    } else {
        return "$minuteRamase minutes";
    }
}
