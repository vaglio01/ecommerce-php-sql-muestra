<?php

$smarty->display("header.tpl");
if (empty ($_SESSION)) {
    $smarty->assign('userName',"");
}else{
    $smarty->assign('userName',$_SESSION["usuario"]);  
}  
$smarty->display("menu.tpl");

$allOk=false;
$id = "";
$usuario = "";
$nombre="";
$apellido="";
$dni="";
$condicion="";
$errorlogueo= "";
$err=0;

$messages["usuario"]="";
$messages["nombre"]="";
$messages["apellido"]="";
$messages["dni"]="";
$messages["condicion"]="";
$messages["password"]="";
$messages["rPassword"]="";
$messages["passwordDist"]="";


     if (empty ($_SESSION)) {
        $smarty->assign('errorlogueo',"Debe Estar logueado para modificar el usuaarios");
        $smarty->assign('err',1);
        $smarty->display("errores.tpl"); 
        
     }else{

        $resultSQL=$db->users->getById($_SESSION["id"]);
        if ($db->db->numRows()>0){
            // echo "encontro el dato";
            $id=$resultSQL["id"];
            $usuario=$resultSQL["usuario"]; 
            $nombre=$resultSQL["nombre"]; 
            $apellido=$resultSQL["apellido"]; 
            $dni=$resultSQL["dni"];
            $condicion=$resultSQL["condicion"];
            $smarty->assign('id',$id);
            $smarty->assign('usuario',$usuario);
            $smarty->assign('nombre', $nombre);
            $smarty->assign('apellido',$apellido);
            $smarty->assign('dni',$dni);
            $smarty->assign('condicion',$condicion);  
          
            

            
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
                
            
                $resultSQL=$db->users->updateById($id,$usuario,$nombre,$apellido,$dni,$condicion,$password); 
                $smarty->assign("headerMessage","Se Actualizaron los datos Correctamente");
                $showMain=true;
                $allOk=false;
               exit;

            }else{        
                    // echo "incorrecto de Actualizacion";
                    $smarty->assign('mensageErrorAct',$messages); 
                    $smarty->assign('usuario',$usuario);       
                    $smarty->assign('nombre',$nombre);       
                    $smarty->assign('apellido',$apellido);       
                    $smarty->assign('dni',$dni);       
                    $smarty->assign('condicion',$condicion);       
                    $smarty->display("modificar.tpl");
            }
                
        }else{
            $smarty->assign('messageErrorBusqueda',"no se encontro el Ususario" . $_SESSION["usuario"]);
        }
     }

/* $smarty->display("footer.tpl"); */
?>