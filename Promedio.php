 <!DOCTYPE html>
 <html>
 <Head>
 <center>
 <h1> Promedio de 20 Numeros </h1>
 </center>
 <title> Practica 3 </title>
 <meta name="Prom" content="Practica_3"/>
 </head>
 
 <body>
 <?php

 $promedio=0;
 $suma=0;
 
  $ventas=array( 
                 20.3, 34.6, 45.6, 23.7, 65.8,
				 50.6, 34.7, 90.7, 64.8, 534.8,
				 23.45, 45.20, 23.1, 12.3, 2.4,
				 23.4, 34.5, 12.3, 1.3, 234.5
                );
				//contar elementos
                $elementos = count($ventas);
               //ahora iniciamos el bucle
              for ($i=0;$i<$elementos;$i++){
               echo "<center>".$ventas[$i]. "</center>";
                 $suma=$suma+$ventas[$i];				 
                } 
				$promedio=$suma/$elementos;
				echo "<center>";
				echo "</br>Son ". $elementos . " Elementos";
				echo "</br>La suma es de = ". $suma;
				echo "</br>Y el promedio es = ". $promedio;
				echo "</center>";
  
 ?>
 </body>
 
 
 </html>