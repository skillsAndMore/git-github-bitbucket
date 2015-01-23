<?php

//Manca proprio tutta la definizione della funzione
function conto_alla_rovescia( $int ){
  $int = intval($int); //Mi assicuro che sia un intero
  $m = $int; //Mi creo una variabile per contare i passi
  for( $i = 0; $i < $m; $i++ ){
    echo $int-- . "<br />";
  }
}

conto_alla_rovescia( 13 );

?>
