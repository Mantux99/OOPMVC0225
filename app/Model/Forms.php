<?php

class Forms
{
    public function insertUserForm(){
        print '
        <form method="POST">
            <input name="name" type="text" placeholder="Name:">
            <input name="email" type="email" placeholder="Email:">
            <input name="psw" type="password" placeholder="Password:">
            <button type="submit" name="push">Push</button>
            <button type="submit" name="update">Update</button>
            <button type="submit" name="delete">Delete</button>
        </form>
        ';
    }
}


?>