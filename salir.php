<?php
     $showMain = false;
     $err=0;
    if ($_GET['action']=="salir") {

        if (isset($_COOKIE[session_name()])) 
            setcookie(session_name(),"",time()-3600,"/");
        $_SESSION = array();

        echo session_destroy();
        $showMain = true;
    }

?>