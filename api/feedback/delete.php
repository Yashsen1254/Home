<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM feedback WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/feedback/index.php');

?>