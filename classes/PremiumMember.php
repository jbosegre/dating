<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/16/2019
 * Time: 1:09 PM
 */

class PremiumMember extends Member
{
    private $_inDoorInterest;
    private $_outDoorInterest;

    function __construct($fname = "unknown", $lname = "unknown", $age = "18", $gender = "male",
                         $phone = "1234567890", $email = "unknown", $state = "Washington",
                         $seeking = "female", $bio = "N/A")
    {
        parent::__construct($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio);

        $this->_inDoorInterest = $this;
        $this->_outDoorInterest = $this;
    }

    function getInDoorInterest()
    {
        return $this->_inDoorInterest;
    }

    function setInDoorInterest($_inDoorInterest)
    {
        $this->_inDoorInterest = $_inDoorInterest;
    }

    function getOutDoorInterest()
    {
        return $this->_outDoorInterest;
    }

    function setOutDoorInterest($outDoorInterest)
    {
        $this->_outDoorInterest = $outDoorInterest;
    }
}