<?php
const hostname = 'localhost';
const username = 'root';
const database = 'mydatabease';

function base_url()
{
    $base_url = "http://".$_SERVER['HTTP_HOST'];
    $base_url .= $_SERVER['SCRIPT_NAME'];
    return $base_url;
}