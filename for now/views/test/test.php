<?php

$regex = '~\{{([^}]*)\}}~'; 
$string = "www.example.com/?foo={{foo}}&test={test}";
preg_match_all($regex, $string, $matches);
echo $matches[1][0];