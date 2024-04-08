<!DOCTYPE html>
<html lang="es">
    
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    

<form method="post" autocomplete="off">
 
     <img src="imagenes/logo.svg" alt="">


    <div class="input-goup">

        <div class="input-cotainer">
            <input type="text" name="name"placeholder="nombre">
            <i class="fa-solid fa-user"></i>
        </div>     


        <div class="input-cotainer">
            <input type="password" name="password"placeholder="contraseña">
            <i class="fa-solid fa-lock"></i>
        </div> 

     
        <div class="input-cotainer">
            <input type="email" name="email"placeholder="correo">
            <i class="fa-solid fa-envelope"></i>
        </div>


        <div class="input-cotainer">
            <input type="tel" name="phone"placeholder="telefono">
            <i class="fa-solid fa-phone"></i>
        </div>        
    
    
       <a href="#">terminos y condiciones</a>
       <input name="send" type="submit" class="btn" value="enviar" >


    </div> 


</form>



<?php


 include("send.php")


?>

</body>
</html>