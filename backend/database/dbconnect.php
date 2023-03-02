<?php
$link_DB = mysqli_connect('localhost', 'root', '90677453','redeindustrial') or die(mysqli_error($link_DB));


$GLOBALS['link_DB'] = $link_DB;