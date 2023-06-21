<?php
ob_start("ob_gzhandler");
session_start();
mysql_connect("localhost","root");
mysql_select_db("Compras");

if(isset($_SESSION['carro'])) $carro=$_SESSION['carro'];
else $carro=false;

$vResultado=mysql_query("select * from catalogo order by producto asc");
?>
<html>
<head>
<title>CATALOGO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.catalogo {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 9px;
color: #333333;
}
</style>
</head>
<body>
<table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px
solid #000000;">
<tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
<td width="170"><strong>Producto</strong></td>
<td width="77"><strong>Precio</strong></td>
<td width="25" align="right"><a href="vercarrito.php?<?php echo SID ?>" title="Ver el contenido del carrito"><img src="vercarrito.gif" width="25" height="21" border="0"></a></td>
</tr>

<?php
while($fila=mysql_fetch_assoc($vResultado)){
?>
<tr align="middle" class="catalogo">
<td><?php echo $fila['producto'] ?></td>
<td><?php echo $fila['precio'] ?></td>
<td align="center"><?php
if(!$carro || !isset($carro[md5($fila['id'])]['identificador']) ||$carro[md5($fila['id'])]['identificador']!=md5($fila['id'])){?>
<a href="agregacar.php?<?php echo SID ?>&id=<?php echo $fila['id'];?>">
<img src="productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php }
else {?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $fila['id']; ?>"><img src="productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php} ?></td>
 </tr><?php } ?>
</table>
</body>
</html>
<?php
ob_end_flush();
?> 