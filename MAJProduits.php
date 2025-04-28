<p style='color:white;font-size:30px;padding:2px;margin:0px;' align="left">Mise à jours des produits</p>
<div   style='padding:0px;margin-left:10px;margin-top:20px;width:500px;height:auto;background:;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;float:left;' align="left">
<form action="Traitement/Produits/MAJAjout.php" method="POST" id="produits">

<table width="350"  cellspacing="4" cellpadding="0" align="center" style="text-align:center;background:white">
  <tr>
    <td width="150px"  style="font-size:20px;color:white;background:#006;" >ID</td>
    <td  width="200px" style="font-size:20px;color:white;background:#006">Designation</td>
  </tr>
   <tr>
    <td width="150px"  style="font-size:20px;color:white;background:#006;" ><input type='text' name='id'/> </td>
    <td  width="200px" style="font-size:20px;color:white;background:#006"><input type='text' name='designation'/> </td>
  </tr>
     <tr>
    <td width="150px"  style="font-size:20px;color:white;background:#006;" >Produit</td>
    <td  width="200px" style="font-size:20px;color:white;background:">
    <SELECT id='prodSD'name="prodD" size="1" width="100px">

<OPTION value="fongicides" SELECTED>Fongicides
<OPTION value="herbicides">Herbicides
<OPTION value="engrais">Engrais
<OPTION value="semence">Semence
<OPTION value="sacherie">Sacherie
</SELECT></td>
  </tr>
   <tr>
    <td width="150px"  style="font-size:20px;color:white;background:;" ></td>
    <td  width="200px" style="font-size:20px;color:white;background:"><input type="submit" id="Ajouter" value="Ajouter" /></td>
  </tr>
</table>
</form>
<span class='result'></span>
<span class='result2'></span><br/><br/>
<form action="Traitement/Produits/MAJSuppression.php" method="POST" id="produit">

<table width="350"  cellspacing="4" cellpadding="0" align="center" style="text-align:center;background:white">
  <tr>
    <td width="150px"  style="font-size:20px;color:white;background:#006;" >ID</td>
    <td  width="200px" style="font-size:20px;color:;background:"><input type='text' name='id'/></td>
  </tr>

     <tr>
    <td width="150px"  style="font-size:20px;color:white;background:#006;" >Produit</td>
    <td  width="200px" style="font-size:20px;color:white;background:">
    <SELECT id='prod 'name="prod" size="1" width="100px">

<OPTION value="fongicides" SELECTED>Fongicides
<OPTION value="herbicides">Herbicides
<OPTION value="engrais">Engrais
<OPTION value="semence">Semence
<OPTION value="sacherie">Sacherie
</SELECT></td>
  </tr>
   <tr>
    <td width="150px"  style="font-size:20px;color:white;background:;" ></td>
    <td  width="200px" style="font-size:20px;color:white;background:"><input type="submit" id="Supprimer" value="Supprimer" /></td>
  </tr>
</table>
</form>
<span class='result3'></span>
<span class='result4'></span>
<?php include('Traitement/Produits/Fongicides.php');?><br/>
<?php include('Traitement/Produits/Herbicides.php');?><br/>
<?php include('Traitement/Produits/Engrais.php');?><br/>
<?php include('Traitement/Produits/Sacherie.php');?>

</div>
<div   style='padding:0px;margin:0px;margin-top:20px;width:500px;height:auto;background:;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;float:left;' >
<?php include('Traitement/Produits/Semence.php');?>



</div>

<script>
function ValidateID(){
		if( $('#id').val() == '')
		{return false; }
		else
			{
					return true;}
		}
		function ValidateDesignation(){
		if( $('#designation').val() == '')
		{return false; }
		else
			{
					return true;}
		}
	
$(document).ready(function(){
	$('#Ajouter').click(function(){
	
	
	if(ValidateID() && ValidateDesignation() ){
	$.post($('#produits').attr('action'), 
	$('#produits :input,select').serializeArray() , 
	function(contact){
		$('.result').html(contact);$('.result2').html('');
		});
	return false;

}


});
$('#Supprimer').click(function(){
	
	
	if(ValidateID()  ){
	$.post($('#produit').attr('action'), 
	$('#produit :input,select').serializeArray() , 
	function(contac){
		$('.result3').html(contac);$('.result4').html('');
		});
	return false;

}


});
});




</script>