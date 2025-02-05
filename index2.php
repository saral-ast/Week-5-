<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="   bg-gray-500 text-white text-2xl font-bold">
    <?php echo "Hello ArsenalTech!"; ?>
    <h1>Hello World</h1>
    <p>My name is <?php echo "ArsenalTech"; ?></p><br>
    <p>Today is <?php echo date('l jS \of F Y h:i:s A'); 

    $large_number = 50000000000000000000; 
    var_dump($large_number);         // float(5.0E+19)

    var_dump(PHP_INT_MAX + 1);     // float(9223372036854775808)
    
    ?></p>

<?php
$fruits = array ( "fruits"  => array ( "a" => "orange",
                                       "b" => "banana",
                                       "c" => "apple"
                                     ),
                  "numbers" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "holes"   => array (      "first",
                                       5 => "second",
                                            "third"
                                     )
                );

// Some examples to address values in the array above 
echo $fruits["holes"][5];    // prints "second"
echo $fruits["fruits"]["a"]; // prints "orange"
unset($fruits["holes"][0]);  // remove "first"

// Create a new multi-dimensional array
$juices["apple"]["green"] = "good"; 
?>

<?php
function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
?>


<?php
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);
?>

<?php
function test()
{
    static $count = 0;

    $count++;
    echo $count . "<br>";
    if ($count < 10) {
        test();
    }
    $count--;
}
test();
?>

    
</body>
</html>