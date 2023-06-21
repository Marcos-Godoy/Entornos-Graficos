<?php
session_start();
extract($_REQUEST);
mysql_connect("localhost","root");
mysql_select_db("Compras"); // la bd se llama compras
if(!isset($cantidad)){$cantidad=1;}
$vResultado=mysql_query("select * from catalogo where id='".$id."'");
$fila=mysql_fetch_array($vResultado);

if(isset($_SESSION['carro'])) $carro=$_SESSION['carro'];
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$fila['producto'],'precio'=>$fila['precio'],'id'=>$id);

$_SESSION['carro']=$carro;

header("Location:catalogo.php?".SID);
?> 