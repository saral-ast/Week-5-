  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="./src/output.css">
  </head>

  <body class="bg-gray-500 text-white text-2xl font-bold">
      <h2 class="text-2xl">Hii</h2>
      <?php

  // $makefoo = true;

  // /* We can't call foo() from here 
  //   since it doesn't exist yet,
  //   but we can call bar() */

  // bar();

  // if ($makefoo) {
  //   function foo()
  //   {
  //     echo "I don't exist until program execution reaches me <br>";
  //   }
  // }

  // /* Now we can safely call foo()
  //   since $makefoo evaluated to true */

  // if ($makefoo) foo();

  // function bar() 
  // {
  //   echo "I exist immediately upon program start. <br>";
  // }

  // ?>
                <?php  
  //               $fruits = array("Apple", "Banana", "Cherry");
  //             array_push($fruits, "Orange", "Kiwi", "Lemon");
  //             echo var_dump($fruits)."<br>";
  //             print_r($fruits);
  //             // array_pusg
  //             array_push($fruits,"hello",124,"minecraft");
  //             echo "<br>";
  //             // echo var_dump($fruits)."<br>";
  //            echo   print_r($fruits) . "<br>";
  //             //Output the array:
  //             // $var_dump($fruits);
  //             // array_splice($fruits,4,3);
  //             // echo "<br>";
  //            # echo print_r($fruits);
  //             unset($fruits[3]);
  //             echo print_r($fruits) . "<br>";


  //              asort($fruits);
  //              foreach($fruits as $fruit){
  //                  echo $fruit . "<br>";
  //              }
  //              $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  //              print_r(array_change_key_case($age,CASE_LOWER));
              //  echo "<script>console.log('hello world')</script>"

              // $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel","Defender");
              //   print_r(array_chunk($cars,2));
              //   foreach($cars as $car){
                     
              //   }

              $a = array(
                array(
                  'id' => 5698,
                  'first_name' => 'Peter',
                  'last_name' => 'Griffin',
                ),
                array(
                  'id' => 4767,
                  'first_name' => 'Ben',
                  'last_name' => 'Smith',
                ),
                array(
                  'id' => 3809,
                  'first_name' => 'Joe',
                  'last_name' => 'Doe',
                )
              );
              
              $last_names = array_column($a, 'last_name');
              echo var_dump($last_names);
              ?>
             
              
              
              <div class="text-blue-500">
                    <a href="index.php" class="text-red-200 underline">Back</a>
              </div>
                <!-- <script>
                    console.log("Hello World");
                </script> -->
  </body>

  </html>