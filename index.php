<?php
// Drop header in
require('views/header.php');

// Get main view name
if($_GET['page'] != ''){
  $thisPage = $_GET['page'];
} else {
  $thisPage = 'home';
}

// Drop main view in
require('pages/' . $thisPage . '.php');

// Drop footer in
require('views/footer.php');
?>
