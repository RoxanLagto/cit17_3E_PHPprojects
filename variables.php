<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables</title>
    </head>
    <body>
        <?php
        //Integers
           echo "<h2>Integers</h2>";
           $int_var = 12345;
           $another_int = -12345 + 12345;
           echo "$int_var";
           echo "<br>";
           echo "$another_int";
        //Doubles
           echo "<h2>Doubles</h2>";
           $many = 2.2888800;
           $many_2 = 2.2111200;
           $few = $many + $many_2;
           print "($many + $many_2 = $few)";
        //Boolean
           echo "<h2>Boolean</h2>";
           if (TRUE)
                print("This will always print<br>");
           else
                print("This will never print<br>");
        //Null
            echo "<h2>Null</h2>";
            $my_var = NULL;
            $my_var = null;
        //Strings
            echo "<h2>Strings</h2>";
            $variable = "name";
            $literally = 'My $variable will not print!\\n';
            print($literally);
            $literally = "<br> My $variable will print";
            print($literally);
        //Local Variables
            echo "<h4>PHP Local Variables</h4>";
            $x = 4;
            function assignx (){
                $x = 0;
                print "\$x inside function is $x.<br>";
            }
            assignx();
            print "\$x outside of function is $x.";
        //Function Parameters
            echo "<h4>PHP Function Parameters</h4>";
            //multiply a value by 10 and return it to the caller
            function multiply ($value) {
                $value = $value *10;
                return $value;
            }
            $retval = multiply (10);
            print "Return value is $retval\n";
        //Global Variables
            echo "<h4>PHP Global Variables</h4>";
            $somevar = 15;
            function addit(){
                GLOBAL $somevar;
                $somevar++;
                print "Somevar is $somevar";
            }
            addit();
        //Static Variables
            echo "<h4>PHP Static Variables</h4>";
            function keep_track(){
                STATIC $count = 0;
                $count++;
                print $count;
                print"";
            }
            keep_track();
            keep_track();
            keep_track();
        ?>
    </body>
</html>