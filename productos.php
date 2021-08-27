<?php


$smarty->display("header.tpl");
if (empty ($_SESSION)) {
    $smarty->assign('userName',"");
}else{
    $smarty->assign('userName',$_SESSION["usuario"]);  
}  
$smarty->display("menu.tpl");

$resultSQL=$db->categorias->getAll();
if ($db->db->numRows()>0){
  $resul=$db->db->getAllRows();  
  $smarty->assign("categorias",$resul);
  }else{
     $smarty->assign("mensjEr","No hay Categorias");
   }
$smarty->display("leftPanel.tpl");
//ver i
if(!isset($_GET['id'])){  
  echo "aca";
}else{
  $resultSQL=$db->articulos->getByIdCategoria($_GET['id']);
  if ($db->db->numRows()>0){
      $resul=$db->db->getAllRows();  
      $smarty->assign("articulos",$resul);
      $smarty->display("body.tpl");
    }else{
       $smarty->assign("mensjEr","No hay productos");
     }
}
?> 

