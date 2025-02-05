<?php 
    echo "Hello ArsenalTech! \n" . "<br>";
    //single line comments
    # this is also single line comment
    /* this
       is multiline;
       commnets
     */ 
    // $name = "saral";
    // $Name = "Sharal";
    // echo "my name is  $name not  $Name\n" . "<br>";
    // $op1 = 5;
    // $op2 = 7;
    // $sum = $op1 + $op2;
    // $sub = $op1 - $op2;
    // $mul = $op1 * $op2;
    // $div = $op1/$op2;
    // $bool = true;
    // $no_value = NULL;

    // echo "two oprands are  $op1 and $op2 \n" . "<br>";
    // echo "sum of two operands are: $sum\n" . "<br>";
    // echo "sub of two operands are: $sub\n" . "<br>";
    // echo "mul of two operands are : $mul \n"."<br>";
    // echo "div of two operands are: $div\n" . "<br>";

    // var_dump($name);
    // var_dump($op1);
    // var_dump($op2);
    // var_dump($sum);
    // var_dump($sub);
    // var_dump($mul);
    // var_dump($div);
    // var_dump($bool);
    // var_dump($no_value);

    // $val1 = $val2 = $val3 = "There is same value to all variables";

    // echo "val1: $val1\n" . "<br>";
    // var_dump($val1);
    // echo "val2: $val2\n" . "<br>";
    // var_dump($val2);
    // echo "val3: $val3\n" . "<br>";
    // var_dump($val3);

    // $val1 = 5;
    // $x = 5;
    // $y = 10;

    // function change_value(){
    //     // global $val1;
    //     // ;
    //     $GLOBALS['val1'] = 10;
    //     static $val2  = 6;
    //     $val2+=5;
    //     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    //     echo "value is inside finction  and $val2" . "<br>";
    //     // echo "usnig global araay {$GLOBAL['val1']}" . "<br>";
    // }
    
    // change_value();
    // change_value();
    // change_value();

    // echo  "$val1 and $y";
    // $name = "My name is Saral";

    // echo "<h2>This is h2 value in html $name</h2>";
    // echo "<span>This is paragraph in html $name</span>";
    // print "<h1>This is in print h1 $name</h1>";
    // echo "length of the name is ".strlen($name) . "<br>";
    // echo "word count of the name is ".str_word_count($name) ."<br>";
    // echo strpos($name,"Saral") . "<br>";
    // echo strtoupper($name) . "<br>";
    // echo strtolower($name) . "<br>";
    // echo str_replace("Saral", "Sallu",$name) . "<br>";
    // echo strrev($name) . "<br>";
    // $new_name = "   My name is Saral      ";
    // echo strlen($new_name) . "<br>";

    // echo strlen(trim($new_name)). "<br>";
    // $new_array =  explode(" ",$name);
    // print_r($new_array);

    // echo substr($name,3,3) . "<br>";
    // echo substr($name,3) . "<br>";
    // echo substr($name,-5,4)."<br>";
    // echo substr($name,5,-2)."<br>";


    // $val1 = 34;
    // echo PHP_INT_MAX . "<br>".PHP_INT_MIN ."<br>" . PHP_INT_SIZE;

    // $val2 = 5.5;
    // var_dump(is_int($val2);
    // if( $flag ){
    //     echo "". $name ."". $val2 ."";
    // }else{
    //     echo "". $name ."";
    // }
    // echo $flag
  
    // $max_value = log(0); 
    // var_dump(is_finite($max_value));
    // $value = (int)3.445555;
    // var_dump($value);
    // var_dump(is_nan($value));
    // var_dump(is_nan(acos(23)));

    // $val = intval(NULL);
    // echo $val;
    // var_dump($val);
    // var_dump(is_nan((float)NULL));

    // $boolean_value = "23 213 ssdf";
    // $boolean_value2 = 'abc';
    // $new_value = (array)$boolean_value;
    // $new_value = (array)$boolean_value2;
    // var_dump($new_value);

    // $arry = [1,23312,'Hellllo',"12","0",3];
    // echo min($arry) . "<br>";
    // $max_value = max($arry);
    // echo $max_value;


   
    // $random_genrated_value = rand(1000,9999);
    // echo $random_genrated_value;

    const MYCAR = "Volvo";

    // echo MYCAR;

    //  print_r(VALUES_ARRAY) . "<br>";
    //  function area($radius){

          
          
      
    //   // const MYCAR = "Volvo";
      
    //   echo MYCAR;
    //       // $area = VALUES_ARRAY[0] * $radius * $radius;
    //       // return floor($area);
    //  }
    //  area(3);

    // echo area(3);
    // print_r(VALUES_ARRAY);
    // echo $RADIUS;


    // $val1 = "41e1";
    // $val2 = 41  ;
    // var_dump($val1 <> $val2);

  //   $products = [
  //     ['name' => 'Laptop', 'price' => 800],
  //     ['name' => 'Phone', 'price' => 500],
  //     ['name' => 'Tablet', 'price' => 300]
  // ];
  
  // // Sort by price (ascending)
  // usort($products, function($a, $b) {
  //     return $a['price'] <=> $b['price'];
  // });
  
  // print_r($products);
  


  // function sumMyNumbers(...$x) {
  //   var_dump($x); 
  //   $n = 0;
  //   $len = count($x);
  //   for($i = 0; $i < $len; $i++) {
  //     $n += $x[$i];
  //   }
  //   return $n;
  // }
  
  // $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  // echo $a;


  // function addNumbers(float $a, float $b) : int {
  //   return $a + $b;
  // }
  // echo addNumbers(1.2, 5.2);

  $colors = array(2,4,11,34);
  // rsort($colors);
  function addOneValue ($value) {
      return $value + 1;
  }
  function addSum ($value,$ans) {
     return $value + $ans;
  }
  // print_r(array_search(12, $colors)). "\n";
  // print_r(array_reduce($colors,"addSum"));
  // print_r(array_map("addOneValue",$colors));
  // print_r($colors);
//   array_splice($colors,1,2,"hello");
//   print_r($colors);

// foreach ($colors as &$x) {
//   if ($x == "blue") $x = "pink";
// }

// unset($x); // break the reference with the last element
// $x = 'hiii';
// var_dump($colors);
//     unset($colors);
//     $colors[] = 'hello world!';
//     var_dump($colors);


  $home = array(
    'seeling' => 'fan',
    'road'=> 'trip',
    'car' => 2000,
     'hii'=> 0,
  );

  
  // asort($home);
  // foreach ($home as $key => $value) {
  //     echo ''. $key .''. $value ."\n" ;
  //   # code...
  // }
  // print_r($home);

  // print_r(sort($home));
  // print_r(arsort($home));
  // print_r(arsort($home));

//   // print_r(array_diff($home, ['car' => 2000, 'hii' => 0]));
//   array_push($home, 'hello',2000);
//   print_r($home);
//   array_pop($home);
//   print_r($home);
//   $home += ['hello' => 2000];
//   print_r($home);


// $a=array("red","green","blue","yellow","brown");
// $a[8] = "black";
// print_r($a);
// print_r(array_pad($a,15,"pink"));
// // print_r($a);
// print_r($a);
// $random_index = array_rand($a,2);
// // foreach ($random_index as $index) {
// //         echo $a[$index] . "\n";# code...
// // }
//   function printValue($value) {
//      global $a;
//       echo $a[$value]. "\n";
//   }
// array_map("printValue", $random_index);

// print_r($a);

  

$val = 5;
$val = 'fdfd';
$array = array(1,2,3,4,5,6,7,8,9,10);

function globalValue() {
   print_r($GLOBALS);
}
// globalValue();
 
// echo $_SERVER['HTTP']!==0 . $_SERVER['SERVER_NAME'] . "<br>" .$_SERVER['HTTP_HOST'].  $_SERVER['REQUEST_URI']. "<br>";