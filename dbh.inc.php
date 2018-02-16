<?php

$connection = mysqli_connect('localhost', 'root', '', 'comments');

if (!$connection) {
  die("Connection failed: ".mysqli_connect_error());
}