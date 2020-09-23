<?php

function askName($nama)
{
    $format_name=ucwords(strtolower($nama));
    echo "Namamu adalah $format_name";
}

askName("AhmAd dHani PRASETYO");