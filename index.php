<?php require('logic.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Bill Splitter</h1>

    <form method='get' action='index.php'>

      <label for='tab'>How much is the tab?</label>
      <input type='number' name='tab' id='tab'>
    </br>
      <label for='tip'>What percent will you all tip?</label>
      <input type='number' name='tip' id='tip' value=<?=$tip?>>
    </br>
      <label for='people'>Split amongst how many?</label>
      <input type='number' name='people' id='people'>
    </br>
      <label for='quality'>How was the service?</label>
      <select name='quality' id='quality'>
          <option value='bad'>Bad</option>
          <option value='good'>Good</option>
          <option value='Excellent'>Excellent</option>
      </select>
    </br>
      <label for='roundup'>Round up?</label>
      <input type='checkbox' name='roundup' id='roundup'>
    </br>
      <input type='submit' class='btn btn-primary' value='submit'>

    </form>
</body>
</html>
