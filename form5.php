<?php $old_data=""; 
    if(isset($_POST["Input"])){
        $old_data= $_POST["Input"]; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form5</title>
</head>
<body>
    <form method="Post">
    <p>User Input: <Input type="text" name="Input" placeholder="Enter Something" value="<?php echo $old_data?>"></Input>
    </p>
    <input type="submit">
    </form>
    <pre>
    $_GET
    <?php 
    print_r($_GET)
    ?>
    $_POST
    <?php 
    print_r($_POST);
    print_r($old_data);
    ?>
    </pre>
</body>
</html>