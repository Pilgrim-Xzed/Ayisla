<?php
$error='failed to connect';
    $db =mysqli_connect('us-cdbr-iron-east-02.cleardb.net','b60b766e48bd0d','18ce518b','heroku_a1c19a1fd58284d') or die($error);
    @define('BASEURL', $_SERVER['DOCUMENT_ROOT']);

    function substrwords($text, $maxchar, $end='...') {
        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);      
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output)+strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } 
                else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } 
        else {
            $output = $text;
        }
        return $output;
    }
?>
