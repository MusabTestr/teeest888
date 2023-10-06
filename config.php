<?php
define("DB_SERVER", "sql108.infinityfree.com");
define("DB_USERNAME", "if0_34448045");
define("DB_PASSWORD", "qo8rsL9VJA8oYOM");
define("DB_NAME", "if0_34448045_signup");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
  }
  