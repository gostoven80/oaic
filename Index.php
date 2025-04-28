
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OAIC Office Algérien Interprofessionnel des Céréales</title>
<script src="Scripts/jquery.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="Scripts/Layer.js" type="text/javascript"></script>
<link href="Scripts/Layer.css" rel="stylesheet" type="text/css" />
<script src= "Scripts/Flex/jquery.flexslider.js"></script>
<script src= "Scripts/Flex/jquery.flexslider.min.js"></script>

<link href="Scripts/Flex/flexslider.css" rel="stylesheet" type="text/css"/>



  

</head>

<body>

<div id='Content' align='center'></div>
<?php 
session_start();
if(isset($_SESSION['identifier'])){?>
<script>
$(document).ready(function(){window.location = "http://127.0.0.1:8080/OAIC/#Messages";	});
</script>
<?php
	echo" 
<div id='Menu'>
	<ul>
    	<BR/><BR/>
        <li><a href='' id='Messages'>Messages</a></li>
		<li><a href='' id='MAJProduits'>MAJProduits</a></li>
        <li><a href='' id='Deconnecter'>Deconnecter</a></li>
        
    </ul>

<div>
";
}
else
{
	echo"
<div id='Menu'>
	<ul>
    	<li><a href='' id='OAIC'>OAIC</a></li>
        <li><a href='' id='Services'>Services</a></li>
        <li><a href='' id='Produits'>Produits</a></li>
        <li><a href='' id='Compte'>Compte</a></li>
        <li><a href='' id='Contact'>Contact</a></li>
        
    </ul>

<div>	";
}
?>

</body>
</html>