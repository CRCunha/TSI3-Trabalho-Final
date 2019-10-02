<?php

function make_hash($str)
{
    return sha1(md5($str));
}

function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
    return true;
}
?>