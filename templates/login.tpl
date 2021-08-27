<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">   
    <script src="js/functions.js"></script>

    
    <title>Login</title>
</head>

<body>

    <div class="content">
        <div class="bg-light p-4 rounded">
            <div class="row justify-content-center align-items-center">
                    

                    <form id="formulario" method="POST">
                            <div class="mb-3">
                            <label for="formGroupExampleInput2">Usuario</label>
                            <input type="text" 
                                   class="form-control" 
                                   name="usuario" 
                                   id="usuario" 
                                   placeholder="Usuario"
                                    {literal} 
                                    pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                    {/literal} 
                                   >
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" 
                                   class="form-control" 
                                   name="password" 
                                   id="password"
                                    placeholder="Password"
                                    {literal} 
                                    pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                    {/literal} 
                                    >
                        </div>
                        {$messageError}
                        <div class="col-auto">
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>
                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.php">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>

</body>

</html>