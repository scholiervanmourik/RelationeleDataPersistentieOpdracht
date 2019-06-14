<?php
# to create a alert for things like logging | register
function showDialog($text)
{
    echo '<script>' .
        'alert("' . $text . '");' .
        '</script>';
}
# to create a link after an action
function redirect($url)
{
    echo '<script>
    window.location = "' . $url . '"</script>';
}