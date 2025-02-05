<?php echo "Hello ArsenalTech!"; ?>
        

        <?php
    echo "a"; echo "b"; echo "c";
    #The output will be "abc" with no errors
    ?>

        <?php
    $a_bool = true;   // a bool
    $a_str  = "foo";  // a string
    $a_str2 = 'foo';  // a string
    $an_int = 12;     // an int

    echo get_debug_type($a_bool), "\n";
    echo get_debug_type($a_str), "\n";

    // If this is an integer, increment it by four
    if (is_int($an_int)) {
        $an_int += 4;
    }
    var_dump($an_int);

    // If $a_bool is a string, print it out
    if (is_string($a_bool)) {
        echo "String: $a_bool";
    }
    ?>


        <?php 
        $var = 5;
        echo $var+4;
    ?>
        <?php
    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );
    var_dump($array);
    ?>


        <?php
    echo "Linefeed:\nCarriage Return:\rTab:\tVertical Tab:\vEscape:\eForm Feed:\fBackslash:\\Dollar:\$Double Quote:\"\n";
    echo "Octal A: \101\n";        // Octal representation of 'A'
    echo "Hex A: \x41\n";          // Hexadecimal representation of 'A'
    echo "Unicode A: \u{41}\n"; 
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
    echo var_dump($last_names);   // Unicode representation of 'A'
    ?>
   