<?php

function showDialog($text)
{
    echo '<script>' .
        'alert("' . $text . '");' .
        '</script>';
}