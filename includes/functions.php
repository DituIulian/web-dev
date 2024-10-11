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
        return "<strong>Runtime:</strong> $ore hours $minuteRamase minutes";
    } else {
        return "<strong>Runtime:</strong> $minuteRamase minutes";
    }
}

function check_old_movie($release_date)
{
    $today = date("Y");
    if ($today - $release_date >= 40) {
        return   "<p class='badge bg-danger text-wrap'>" . $release_date . " Old movie: *" . $today - $release_date . " years ago*</p>"
            // . $release_date
        ;
    } else {
        return  "<p class='badge bg-success text-wrap'>Release date:</p> " . $release_date;
    }
}


function dbConnect($host = 'localhost', $username = 'php-user', $password = 'php-password', $dbname = 'php-proiect')
{
    return mysqli_connect($host, $username, $password, $dbname);
}
