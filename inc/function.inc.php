<?php
function showResult($result){
    echo "<table border=1 >";
    foreach($result as $row){
        echo "<tr>";            
            foreach ($row as $data){
                echo "<td>".$data."</td>";
            }
        echo "</tr>";
    }

    echo "</table>";
}

function verifyParams($parameters) {
    $result = array("valid"=>false,"value"=>"");
    if(isset($_POST[$parameters]) && $_POST[$parameters]!=""){
        $result["valid"]=true;
        $result["value"]=$_POST[$parameters];        
    }else{
        $result["valid"]=false;
        $result["value"]="Complete el campo <b>".$parameters."</b>";        
    }
    return $result;

}



function cartelError($message){
    $cartelError='<div class="alert-danger p-2 m-2 rounded" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg>
    '.$message.'</div>'; 
    
    return $cartelError;
}

function cartel($message){   
    $cartel='<div class="alert-success p-2 m-2 shadow rounded" role="alert">'.$message.'</div>'; 
    return $cartel;
}

function cartelHide($message){
  $cartel='
  <div class="alert-success p-2 m-2 text-center rounded" id="dialog">
    <div><h4>'.$message.'</h4></div>
  </div>
  <script>
  jQuery("#dialog").click(function(){
    console.log("pase");
    jQuery(this).hide();

  });
  </script>';

  return $cartel;

}