<p style='color:white;font-size:30px;padding:2px;margin:0px;' align="left">Messages</p>

<div   style='padding:0px;margin:0px;margin-top:20px;width:1000px;height:auto;background:;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;' align="center"><br/>
<hr width=600px color=#006>
<?php 


require_once('Config/MysqlConnect.php');
$sql0 = mysql_connect($host,$user,$pwd) or die(mysql_error());
$dbc = mysql_select_db($db , $sql0) or die(mysql_error());

$query = 'select * from contact';
$result = mysql_query($query) or die (mysql_error());

if (mysql_num_rows($result) == 0) {
   echo "Aucune ligne trouvée, rien à afficher.";
   exit;
}



while ($row = mysql_fetch_assoc($result)) {
	$id=mysql_real_escape_string($row['id']);
	$nom =mysql_real_escape_string($row['nom']);
	$prenom=mysql_real_escape_string($row['prenom']);
	$telephone=mysql_real_escape_string($row['telephone']);
	$mail=mysql_real_escape_string($row['mail']);
	$message=mysql_real_escape_string($row['message']);
	
echo '

<table width="700" border="0" cellspacing="4" cellpadding="0" style="background:white;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;">


  
  <tr>
    <td style="font-size:20px;color:white;background:#006;text-align:center">De</td>
    <td style="font-size:20px;color:">'.$nom.'&nbsp;'.$prenom.'</td>
  </tr>
  <tr>
    <td style="font-size:20px;color:white;background:#006;text-align:center">Mobile<hr width=100px color=white></td>
    <td style="font-size:20px;color:">'.$telephone.'<hr width=200px color=white></td>
  </tr>
    <tr>
    <td style="font-size:20px;color:white;background:#006;text-align:center">Email<hr width=100px color=white></td>
    <td style="font-size:20px;color:">'.$mail.'<hr width=200px color=white></td>
  </tr>
  <tr>
    <td style="font-size:20px;color:white;background:#006;text-align:center">Message</td>
    <td style="font-size:20px;color:">'.$message.'</td>
  </tr>
</table>



<hr width=600px color=#006>
';

 
  
}

mysql_free_result($result);
?>


</div>