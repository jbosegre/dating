<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/3/2019
 * Time: 11:46 AM
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

function validName($alphabet)
{
    if (preg_match("/[^a-zA-Z'-]/", $alphabet)) {
        return false;
    }
    return true;
}

function validAge($adult)
{
    if (preg_match("/^[0-9]$/", $adult) && $adult > 18) {
        return false;
    }
    return true;
}

function validPhone($usPhones)
{
    if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $usPhones)) {
        return false;
    }
    return true;
}

function validIndoor($inside, $inHobby)
{
    if(in_array($inside, $inHobby))
    {
        return false;
    }
    return true;
}

function validOutdoor($outside, $outHobby)
{
    if(in_array($outside, $outHobby))
    {
        return false;
    }
    return true;
}
