<?php require('logic.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Bill Splitter</h1>

    <form method='get' action='index.php'>

      <label for='tab'>How much is the tab?* $</label>
      <input type='number' name='tab' id='tab' step="0.01" value='<?=$tab?>'>
      <div class='text-warning'>Required</div>
    </br>
      <label for='partySize'>Split amongst how many?*</label>
      <input type='number' name='partySize' id='partySize' value='<?=$partySize?>'>
      <div class='text-warning'>Required</div>
    </br>
      <label for='quality'>How was the service?</label>
      <select name='quality' id='quality'>
          <option value='bad' <?if ($quality=='bad') {echo 'selected';}?>>Bad</option>
          <option value='good' <?if ($quality!='excellent' and $quality!='bad') {echo 'selected';}?>>Good</option>
          <option value='excellent' <?if ($quality=='excellent') {echo 'selected';}?>>Excellent</option>
      </select>
    </br>
      <label for='roundUp'>Round up?</label>
      <input type='checkbox' name='roundUp' id='roundUp' <?if ($roundUp == true) {echo 'CHECKED';}?>>
    </br>
      <input type='submit' class='btn btn-primary' value='submit'>
    </form>

    <?php if($errors): ?>
    <div class='alert alert-danger'>
      <ul>
      <?php foreach($errors as $error): ?>
        <li><?=$error?></li>
      <?php endforeach; ?>
      </ul>
    </div>

  <?php elseif($form->isSubmitted()): ?>
    <div class='alert alert-success'>
      Everyone owes <strong><?=$amount?> dollars.</strong>
    </div>
  <?php endif; ?>
</body>
</html>
