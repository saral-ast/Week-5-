<?php
  $file = fopen("hi.txt", "a+") or die("Could not open file");
  echo $file . "\n";
  echo fread($file,filesize("hi.txt")) ;
  fclose($file);
  echo $file;
  print_r($_FILES);