<?php

$smarty->display("header.tpl");
if (empty ($_SESSION)) {
    $smarty->assign('userName',"");
}else{
    $smarty->assign('userName',$_SESSION["usuario"]);  
}  
$smarty->display("menu.tpl");

$allOk=false;
$smarty->assign('messageError',"");


$messages["usuario"]="";
$messages["nombre"]="";
$messages["apellido"]="";
$messages["dni"]="";
$messages["condicion"]="";
$messages["password"]="";
$messages["rPassword"]="";
$messages["passwordDist"]="";


$usuario="";
$nombre="";
$apellido="";
$dni="";
$condicion="";



if(isset($_POST["usuario"] )){
 
    $allOk=true;
    $result=verifyParams("usuario");
    $result["valid"] ? $usuario= $result["value"] : $messages["usuario"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;

    $result=verifyParams("nombre");
    $result["valid"] ? $nombre= $result["value"] : $messages["nombre"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;


    $result=verifyParams("apellido");
    $result["valid"] ? $apellido= $result["value"] : $messages["apellido"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;
  
    $result=verifyParams("dni");
    $result["valid"] ? $dni= $result["value"] : $messages["dni"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;
  
    $result=verifyParams("condicion");
    $result["valid"] ? $condicion= $result["value"] : $messages["condicion"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;
  
    $result=verifyParams("password");
    $result["valid"] ? $password= $result["value"] : $messages["password"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;
  
    $result=verifyParams("rPassword");
    $result["valid"] ? $rPassword= $result["value"] : $messages["rPassword"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;
}


if ($allOk){
    
   

    $resultSQL=$db->users->insert($usuario,$nombre,$apellido,$dni,$condicion,$password);    
    $smarty->assign("headerMessage","Se registro nuevo usuario");
    $showMain=true;
    $allOk=false;

}else{        
        // echo "incorrecto logeado";
        $smarty->assign('messageError',$messages); 

        $smarty->assign('usuario',$usuario);       
        $smarty->assign('nombre',$nombre);       
        $smarty->assign('apellido',$apellido);       
        $smarty->assign('dni',$dni);       
        $smarty->assign('condicion',$condicion);       


        $smarty->display("register.tpl");
}
    
    
