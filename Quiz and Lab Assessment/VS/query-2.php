<?php

$link = mysqli_connect("localhost", "root", "");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "";
if (mysqli_query($link, $sql)) {
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
};

mysqli_close($link);
