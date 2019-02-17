<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/16/2018
 * Time: 12:35 PM
 */

class Member
{
    private $_fname, $_lname, $_age, $_gender, $_phone, $_email, $_state, $_seeking, $_bio;

    function __construct($fname = "unknown", $lname = "unknown", $age = "18", $gender = "male",
                         $phone = "1234567890", $email = "unknown", $state = "Washington",
                         $seeking = "female", $bio = "N/A")
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;
    }

    public function getfName()
    {
        return $this->_fname;
    }

    public function setfName($fname)
    {
        $this->_fname = $fname;
    }

    public function getlName()
    {
        return $this->_lname;
    }

    /**
     * @param string $lname
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * @return integer
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * @param string $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return string
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * @param string $seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }
}