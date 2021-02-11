<?php

$db = new mysqli('database', 'lamp', 'lamp', 'lamp');

$sql = "UPDATE mayson SET fname='" . $_POST['fname'] . "',lname='" . $_POST['lname'] . "' WHERE id=" . $_POST['id'];

mysqli_query($db, $sql);

header("Location: index.php");
