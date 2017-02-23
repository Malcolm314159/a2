<?php
require('Form.php');
require('tools.php');
use DWA\Form;

# sanitize any GET Data
$_GET = sanitize($_GET);

# instantiate a new form
$form = new Form($_GET);

# bring form values into useful variables
$tab = $form->get('tab', '');
$partySize = $form->get('partySize', '');
$quality = $form->get('quality', '');
$roundUp = $form->isChosen('roundUp');
$errors = false;

if ($form->isSubmitted()) {

  $errors = $form->validate([
    'tab' => 'required|min:0',
    'partySize' => 'required|min:1',
  ]);

  $tab = floatval($tab);
  $partySize = intval($partySize);
  $tipFactor = 1.18;

  if ($quality == 'bad') {
    $tipFactor = 1.14;
  } elseif ($quality == 'excellent') {
    $tipFactor = 1.22;
  }

  $amount = $tab*$tipFactor/$partySize;
  if ($roundUp == true) {
    $amount = ceil($amount);
  } else {
    $amount = round($amount, 2);
  }
}
