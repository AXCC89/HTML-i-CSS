<?php
function isDato_1()
{
$dato = $_GET['dato1'];
    if(is_numeric($_GET['dato1'])){
        if($_GET['dato1']% 2 == 0)
             echo "<p> ". $dato ." el valor és parell </p>";
        else
             echo "<p> ". $dato ." el valor és imparell </p>";
     }
    else
       echo "Només es permeten valors númerics."."<br />";
    }
    isDato_1();

       echo "<br />";

function isDato_2()
       {
$numero= $_GET['dato2'] ;
       for ( $i = $numero; $i <= 10; $i += 1 ) {
           if ($i > 10 ) {
               break;
           }
           echo $i;
           $i++;
        }
    }
    isDato_2();

       echo "<br />";

function isDato_3()
       {
       $numero = $_GET['dato3'] ;
       for ($i= 0; $i <= $numero  ; $i += 2) {
           if ($numero == 10 ) {
            echo "No et pots imaginar 10. Prova un altre número.";
               break;
           }
           echo $i;
           $i++;

        }
    }
    isDato_3();

       echo "<br />";

function isDato_4()
       {
       $numero = $_GET['dato4'] ;
       
       for ($i= 10; $i <= $numero  ; $i += 2) {
           if ($i > $numero) {
               break;
           }
           echo $i;
           $i++;
       }
    }
    isDato_4();
    echo "<br />";

function isSumDato_5_6_7()
{
       $nombre = $_GET['nombre'] ;
       $nota1 =  $_GET['nota1'] ;
       $nota2 =  $_GET['nota2'] ;
       $nota3 =  $_GET['nota3'] ;  

       $promedio = ($nota1 + $nota2 + $nota3); 

       if (( $promedio >= 60)) {	
        echo $nombre."  s'han sumat les notes, el resultat és primera divisió";
		
	    } elseif(( $promedio > 0 &&  $promedio < 33) ) {
        echo $nombre."  s'han sumat les notes, el resultat és reprovat";		
			
        } elseif(( $promedio > 32 &&  $promedio < 44) ) {
        echo $nombre."  s'han sumat les notes, el resultat és tercera divisió";
		
         } elseif(( $promedio > 45 && $promedio < 59) ) {
         echo $nombre."  s'han sumat les notes, el resultat és segona divisió";

        }
        echo "<br />";
    }
    isSumDato_5_6_7();

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
