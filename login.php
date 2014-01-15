<?php

include './include/config.php';

if (isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name='" . $username . "' AND password='" . $password . "'";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) > 0)
    {
       $user_info = mysql_fetch_assoc($result);
       $_SESSION['username'] = $user_info['name'];
       $_SESSION['email'] = $user_info['email'];
       Header('Location: ' . BASE_URL);
    }
    else
    {
        die('Invalid user name or password, go back and try again');
    }
}
else
{
    die('You must enter user name');
}