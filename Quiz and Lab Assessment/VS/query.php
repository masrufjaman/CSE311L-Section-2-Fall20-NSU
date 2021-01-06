<?php

$link = mysqli_connect("localhost", "root", "", "cse311l_section_2_fall_20");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT last_name, SUM(salary), AVG(salary), MAX(salary), MIN(salary)
FROM employees
GROUP BY job_id";
if (mysqli_query($link, $sql)) {
    echo "Show";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
};

mysqli_close($link);
