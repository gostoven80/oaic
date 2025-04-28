<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="Scripts/jquery.js"></script>
<script type="text/javascript" src="Scripts/FormContact.js"></script>
<link rel="stylesheet" type="text/css" href="Scripts/FormContact.css" />
</head>

<body>


<p style='color:black;font-size:30px;padding:2px;margin:0px;' align="left">Contact</p>
<div style='border:;width:525px;height:500px;float:left;margin:10px;background:white ;padding:0px;text-align:left;margin-top:50px;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;'>

    <?php include('Traitement/Contact/FormContact.php')?>

</div>
<div style='width:525px;height:280px;float:left;margin:10px;background:white ;padding:0px;text-align:left;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;'>
<?php include('Traitement/Contact/InfoContact.php')?>

</div>

<div style='width:525px;height:280px;float:left;margin:10px;background: ;padding:0px;text-align:left;'>
<?php include('Traitement/Contact/Map.php')?>
</div>