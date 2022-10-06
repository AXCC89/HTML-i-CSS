<?php
$edad = $_GET['dato1'];
    if(is_numeric($_GET['dato1'])){
        if($_GET['dato1']% 2 == 0)
             echo "<H1> ". $edad ." el valor és parell </H1>";
        else
             echo "<H1> ". $edad ." el valor és imparell </H1>";
     }
    else
       echo "Només es permeten valors númerics."."<br />";
       echo "<br />";
$numero =  $numero = $_GET['dato2'] ;
       for ( $i = $numero; $i <= 10; $i++ ) {
           if ($i > 10 ) {
               break;
           }
           echo $i;
           $i++;
        }
        echo "<br />";

       $numero =  $numero = $_GET['dato3'] ;
       for ($i= 0; $i <= $numero  ; $i++ ) {
           if ($numero == 10 ) {
            echo "No et pots imaginar 10. Prova un altre número.";
               break;
           }
           echo $i;
           $i++;

        }

        echo "<br />";

       $numero =  $numero = $_GET['dato4'] ;
       $i = 10;
       for (; ; ) {
           if ($i > $numero) {
               break;
           }
           echo $i;
           $i++;
       }
  
       echo "<br />";

       $nombre = $_GET['nombre'] ;
       $nota1 =  $_GET['nota1'] ;
       $nota2 =  $_GET['nota2'] ;
       $nota3 =  $_GET['nota3'] ;  

       $promedio = ($nota1 + $nota2 + $nota3); 

       if (( $promedio >= 60)) {	
        echo "S'han sumat les notes, el resultat és primera divisió";
		
	    } elseif(( $promedio > 0 &&  $promedio < 33) ) {
        echo "S'han sumat les notes, el resultat és reprovat";		
			
        } elseif(( $promedio > 32 &&  $promedio < 44) ) {
        echo "S'han sumat les notes, el resultat és tercera divisió";
		
         } elseif(( $promedio > 45 && $promedio < 59) ) {
         echo "S'han sumat les notes, el resultat és segona divisió";

        }
        echo "<br />";

function isBitten()
{
    $x = rand(0, 100);

    if ($x <= 50) { 
        echo "Charlie em va mossegar el dit!!"; 
    }

    else {
        echo "Charlie no em va mossegar el dit!";
    }
}
isBitten();

 ?>
