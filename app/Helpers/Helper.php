<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{

    const MY_GOOGLE_SCHOLAR = 'https://scholar.google.com/citations?user=25HCyoIAAAAJ&hl=en';
    const MY_LINKED_IN = 'https://www.linkedin.com/in/fahadrahmanamik/';
    const MY_GITHUB = 'https://github.com/Amik-TJ';
    const MY_EMAIL = 'fahad.amik@mail.mcgill.ca';
    const MY_SKYPE = 'fahad.rahman.amik';


    public static function shout(string $string)
    {
        return strtoupper($string);
    }
}
