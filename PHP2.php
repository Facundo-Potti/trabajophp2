<html>
<head>
	  <link rel="stylesheet" href="FACUNDO POTTI ESTILOS.css">
</head>
<body style="background-color: #F9E79F">
<?php

   $años= $_POST["Año"];

   if ($años%4 == 0) 
   		{
          echo "SÍ! Es un año bisiesto";
   		}

   	else if ($años%100==0 ){
   		 echo "NO! No es un año bisiesto";
   	}

   	else if ($años%400==0){
   		 echo "SÍ! Es un año bisiesto";
   	}

   else
   {
   echo "NO! No es un año bisiesto";
   }

?>
</body>
</html>