<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php $old_data=isset($_POST["Input"])?$_POST["Input"]:""?>
<body>
  <h1>HTML Forms</h1>
  <form method="POST">
    <p><label for="input">User Input</label>
      <input type="text" name="input" size="40" value="<?= htmlentities($old_input)?>"/>
      <p>
      <input type="submit"/></p>
  </form>
</body>

</html>