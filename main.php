<?php
     if (empty ($_SESSION)) {
        $smarty->assign('userName'," ");
      }else{
         $smarty->assign('userName',$_SESSION["usuario"]);
      }  
    $smarty->display("header.tpl");
    $smarty->display("menu.tpl");
    $resultSQL=$db->categorias->getAll();
    if ($db->db->numRows()>0){
      $resul=$db->db->getAllRows();  
      $smarty->assign("categorias",$resul);
      }else{
         $smarty->assign("mensjEr","No hay Categorias");
       }
    $smarty->display("leftPanel.tpl");
    $resultSQL=$db->articulos->getAll();
    if ($db->db->numRows()>0){
      $resul=$db->db->getAllRows();  
      $smarty->assign("articulos",$resul);
      }else{
         $smarty->assign("mensjEr","No hay productos");
       } 
    $smarty->display("body.tpl");
    $smarty->display("footer.tpl");
?>