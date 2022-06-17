<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{

    const MY_GOOGLE_SCHOLAR = 'https://scholar.google.com/citations?hl=en&authuser=1&user=DVES3_QAAAAJ';
    const MY_LINKED_IN = 'https://www.linkedin.com/in/fahadrahmanamik/';
    const MY_GITHUB = 'https://github.com/Amik-TJ';
    const MY_EMAIL = 'fahad.rahman1@northsouth.edu';
    const MY_SKYPE = 'fahad.rahman.amik';


    public static function shout(string $string)
    {
        return strtoupper($string);
    }
}
