<?php
require "config_global.php";
koneksi(hostname, username, database);


function koneksi($host, $user, $db)
{
    $koneksi = new mysqli($host, $user, $db);
    return $koneksi;
}