<?php    
date_default_timezone_set('Asia/Kolkata');
  $passworString = "Password";
  $encode =  md5($passworString);
  echo $encode . "\n";
  $deco =  sha1($passworString);
  echo $deco . "\n";

    $array = array("Hello", "World", "I", "am", "here");
    $str1 = "Hello qo,rld i am ,here";
    $array2 = explode(",", $str1);
    // var_dump($array2);
    echo ucwords($str1) . "\n" . ucfirst($str1); 

  $a_str = implode(",", $array);
  echo $a_str . "\n" ;
  var_dump($a_str);


$d=mktime(11, 14, 54, 8, 12, 2014);
    $created = date("Y-m-d H:i:s");
    $using_timestamp = date("Y-m-d H:i:s", $created);
   $date = date("Y-m-d H:i:s", $d);
    echo $date . "\n";
    $extract_date = explode("-", $date);
    var_dump($extract_date);
    $today_date = $extract_date[2];
    echo $today_date . "\n";

    
    
    $date = new DateTime('2024-01-31T10:00:00');
    $date->add(new DateInterval('P1M')); // Adds 1 month
    echo $date->format('Y-m-d'); // Outputs the new date in 'YYYY-MM-DD' format
   print_r( $_FILES );
    echo readfile('Burhanuddin Kachwala.pdf');
    echo readfile('hi.txt');

    
    


?>