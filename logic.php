<?php

require('tools.php');

// Get the tab value
if (isset($_GET['tab'])) {
  $tab = $_GET['tab'];
}
else {
  $tab = '';
}
// Get the tip percentage
if (isset($_GET['tip'])) {
  $tip = $_GET['tip'];
}
else {
  $tip = null;
}
// Get the split
if (isset($_GET['split'])) {
  $split = $_GET['split'];
}
else {
  $split = null;
}
// Get the qaulity
if (isset($_GET['quality'])) {
  $quality = $_GET['quality'];
}
else {
  $quality = null;
}
dump($_GET);
