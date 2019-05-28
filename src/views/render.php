<?php
namespace smd\render;

function showDialog($text)
{
    echo '<script>' .
        'alert("' . $text . '");' .
        '</script>';
}

function redirect($url)
{
    echo '<script>
    window.location = "' . $url . '"</script>';
}