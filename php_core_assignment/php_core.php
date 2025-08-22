<?php 
/*
----------------------------------------------------------MODULE 1 - Core PHP-----------------------------------------------------------

1) PHP syntax:-

         --> The scripts starts with "<?php" and ends with "?>".
         --> This tags are also called canonical PHP tags.
         --> Every PHP command ends with a semi-colon(;).
         --> Let's Lool at the hello world program in PHP.

                Syntax:-
                            <?php echo "Hello World" ?>
   THEORY EXERCISE:

        i) Discuss the structure of a PHP script and how to embed PHP in HTML.
            
                --> A PHP script is a blook of code that runs on the server before the page is sent to the browser.
                        Basic Structure:-
                            <?php 
                            
                            $name = "apple";

                            if($name == "apple"){
                                echo "welcome,. $name!";
                            }else{
                                echo "welcome, Guest!";
                            }                        
                            ?>

                            -> PHP code starts with <?php and ends with ?>.
                            -> Each statement ends with ;.
                            -> PHP can contain variables, operators, functions, loops, and conditions.
                            -> A script executes from top to bottom.
                        
                        Embedding PHP in HTML:-
                        --> One of PHP’s strengths is that it can be mixed directly with HTML to make dynamic web pages.
                                <!DOCTYPE html>
                                        <html>
                                        <head>
                                            <title>PHP in HTML</title>
                                        </head>
                                        <body>
                                            <h1>Welcome to My Website</h1>

                                            <?php
                                                $username = "john";
                                                echo "<p>Hello, $username! Nice to see you.</p>";
                                            ?>

                                            <p>The current year is: 
                                                <?php echo date("Y"); ?>
                                            </p>
                                        </body>
                                    </html>
            
                                    
            ii) What are the rules for naming variables in PHP?
                    -> A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).
                            --> A variable starts with the $ sign, followed by the name of the variable.
                            --> A variable name must start with a letter or the underscore character.
                            --> A variable name cannot start with a number.
                            --> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
                            --> Variable names are case-sensitive ($age and $AGE are two different variables)


    LAB EXERCISE:

          i)  Write a PHP script to print "Hello, World!" on a web page.
                
                    <?php 
                            ehco "Hello, World!";

                    ?>
                                

2) PHP Variables:-
    
    THEORY EXERCISE:
            i)Explain the concept of variables in PHP and their scope









*/


?>