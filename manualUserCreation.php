<?php
    $fname = "Sami";
    $lname = "Santeri";
    $email = "samisanteri@gmail.com";
    $password = password_hash("salainen1234",PASSWORD_DEFAULT);

    $sql = "insert into user(fname,lname,email,password)
    values ('$fname','$lname','$email','$password')";
    echo $sql;