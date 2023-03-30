<?php
   // CSV file path --------------------
   $filename = "messages.csv";
   // stocking type variables ----------
   $name = array();
   $surname = array();
   $email = array();
   $message = array();
   // constants for each type of data --
   $NAM = 0;
   $SURNAM = 1;
   $EMAI = 2;
   $MESSAG = 3;

   // open the CSV file and puts it in the buffer
   $fp = fopen($filename, "r");

   // if the file path is usable, we read the CSV file and order it 
   // with fgetcsv function otherwise we show an error
   if ($fp !== FALSE) {

      // separate every person and message sent to the contact form
      // SURNAME;NAME;EMAIL;MESSAGE
      while(!feof($fp) && ($line = fgetcsv($fp, 1000, ";")) !== false) {
         $lines[] = $line;
      }

      $cntr = count($lines);

      for($i = 0; $i < $cntr - 1; $i++ ){
         $userData = array();
         $userData = $lines[$i];
         
         // separating each value according to its type
         $name[$i] = $userData[$NAM];
         $surname[$i] = $userData[$SURNAM];
         $email[$i] = $userData[$EMAI];
         $message[$i] = $userData[$MESSAG];
      }
      fclose($fp);
   }
   else {
      echo "No message database found!";
   }
?>