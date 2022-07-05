<?php

$db = mysqli_connect('localhost', 'root', '', 'test1');

if(!$db) {
    die("database not connected");
}