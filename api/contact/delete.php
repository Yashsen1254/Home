<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM contact WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/contact/index.php');

?>