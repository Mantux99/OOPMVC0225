<?php

use Frame\Controller;

class RegLogas extends Controller{


    public function registerNewUser($array) {
        $name = $array['userName'];  //userName, userEmail, userPassword ateina is register.php
        $email = $array['userEmail'];
        $password = $array['userPassword'];

        $this->db->insert("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");
    }
    public function loginNewUser()
    {
        return $this->db->select ("SELECT * FROM `users`");


    }
}