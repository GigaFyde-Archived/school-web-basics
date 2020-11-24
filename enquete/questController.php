<?php

$name = $_POST['name'];
$surname = $_POST['surname'];

file_put_contents('values.txt', $name . ', ' . $surname . FILE_APPEND);