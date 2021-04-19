<?php
include "../../examples/local.php";
$status = $_POST['statuss'];
$sql = "update contact set contact_status = '$status'";
$total = $local->prepare($sql);
$total->execute();