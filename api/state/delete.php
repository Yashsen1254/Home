<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM state WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/state/index.php');

?>