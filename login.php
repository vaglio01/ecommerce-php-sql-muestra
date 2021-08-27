<?php
/* $smarty->display("header.tpl");
if (empty ($_SESSION)) {
    $smarty->assign('userName',"");
}else{
    $smarty->assign('userName',$_SESSION["usuario"]);  
    $smarty->display("menu.tpl");
}   */

$allOk=false;


$messageError="";

if(isset($_POST["usuario"] )){
 
    $allOk=true;
    $result=verifyParams("usuario");
    $result["valid"] ? $usuario= $result["value"] : $messages["usuario"]=$result["value"];
    $result["valid"] ? :$allOk=false;

    $result=verifyParams("password");
    $result["valid"] ? $password= $result["value"] : $messages["password"]=$result["value"];
    $result["valid"] ? :$allOk=false;
  
  
}

if ($allOk){
    $resultSQL=$db->users->login($usuario,$password);
    

    if ($db->db->numRows()>0){
        // echo "correcto logeado";
        $messageError="";
        $_SESSION["id"]=$resultSQL["id"];
        $_SESSION["usuario"]=$resultSQL["usuario"];        
        $smarty->assign("usuarioLoged",$_SESSION["usuario"]);
        $smarty->assign('headerMessage',"Bienvenido ".$resultSQL['nombre']." ".$resultSQL['apellido']);
        $showMain=true;
        $allOk=false;
        

    }else{        
        // echo "incorrecto logeado";
        $smarty->assign('messageError',"El usuario o contraseña no coinciden");                
        $smarty->display("login.tpl");
    }
    
    
}else{
    $smarty->assign('messageError',""); 
    $smarty->display("login.tpl");
}
