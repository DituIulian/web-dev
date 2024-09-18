<?php

// Functie de transformare a $minute in xOre xMinute
function runtimePrettier($minute)
{
    if ($minute <= 0) {
        return "Unknown";
    }

    $ore = floor($minute / 60);
    $minuteRamase = $minute - ($ore * 60);

    if ($ore > 0) {
        return "$ore hours $minuteRamase minutes";
    } else {
        return "$minuteRamase minutes";
    }
}

function check_old_movie($release_date)
{
    $today = date("Y");
    if ($today - $release_date >= 40) {
        return  "<div class='badge bg-danger text-wrap'>Old movie: *" . $today - $release_date . " years ago*</div>"
            // . $release_date
        ;
    } else {
        return "<div class='badge bg-success text-wrap'>Good choice</div> " . $release_date;
    }
}
