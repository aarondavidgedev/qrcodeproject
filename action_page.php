<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Your file name is: <?php echo $_POST["fname"]; ?><br>
The website your QrCode opens is:  <?php echo $_POST["url"]; ?><br>
<?php $fileName = $_POST["fname"]; echo $fileName?>
<?php $url = $_POST["url"]; echo $url?>
<?php $myfile = fopen("info.csv","w") or die("Cannot Open File");
fwrite($myfile,$fileName);
fwrite($myfile,$url);
fclose($myfile); ?>
</html>