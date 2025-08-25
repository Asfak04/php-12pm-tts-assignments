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
            i)Explain the concept of variables in PHP and their scope.
                 --> In PHP, a variable is a named container that stores data such as numbers, strings, or objects. 
                     All variables in PHP begin with a dollar sign $ followed by the variable name.

                 --> Variables allow us to store and reuse values in a program.
                 --> Example: $name = "john";
                              $age = 25;
                              echo "My name is $name and I am $age years old.";
                    
                 --> Rules for Variables:
                       (1) Must start with $.
                       (2) Name must start with a letter or underscore (_).
                       (3) Can contain letters, numbers, and underscores.
                       (4) Are case-sensitive ($name and $Name are different).

                 --> Scope of Variables in PHP:
                        The scope of a variable refers to the part of the program where that variable can be accessed. 
                        PHP supports four types of scopes:
                          (1) Local Scope:
                               --> Declared inside a function.
                               --> Accessible only within that function.
                            Ex.
                               function test() {
                                    $x = 10; // local variable
                                    echo $x; // ✅ accessible
                                }
                                // echo $x; ❌ not accessible here

                           (2) Global Scope:
                                 --> Declared outside of functions.
                                 --> Not directly accessible inside functions unless declared global.
                              Ex.  
                                $y = 20; // global variable
                                function show() {
                                    global $y;
                                    echo $y; // ✅ accessible because of 'global'
                                }

                           (3) Static Scope:
                                 --> A variable declared as static inside a function remembers its value between function calls.

                                        function counter() {
                                            static $count = 0;
                                            $count++;
                                            echo $count;
                                        }
                                        counter(); // 1
                                        counter(); // 2

                            (4) Super Global Scope:
                                  -->  Special predefined variables available everywhere in PHP.
                                  -->  Examples: $_GET, $_POST, $_SESSION, $_SERVER.
                                    Ex.
                                    echo $_SERVER['PHP_SELF']; // prints current script name    

   
    LAB EXERCISE:
           (1) Create a PHP script to declare and initialize different types of variables (integer, float, string, boolean). Display them using echo.
               
                <?php
                    // Integer variable
                    $age = 25;

                    // Float (decimal) variable
                    $price = 199.99;

                    // String variable
                    $name = "Asfak";

                    // Boolean variable
                    $isStudent = true;

                    // Display variables
                    echo "Name: " . $name . "<br>";
                    echo "Age: " . $age . "<br>";
                    echo "Price: $" . $price . "<br>";
                    echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br>";
                ?>

3) Super Global Variables:-
    THEORY EXERCISE:
           (1)What are super global variables in PHP? List at least five super global arrays andtheiruse.

              -->  In PHP, superglobals are built-in variables that are always accessible, regardless of scope.
                   This means you can use them inside or outside functions without needing global.
              -->  They are mainly used to handle form data, server information, sessions, cookies, and environment variables.
              
              Five Common Super Global Arrays and Their Uses:-
                 
                  1. $_GET
                    --> Collects data sent via URL parameters (query string).
                    Example:

                    // URL: example.com/index.php?name=Aryan
                    echo $_GET['name']; // Output: Aryan


                  2. $_POST
                    --> Collects data sent from an HTML form using the POST method.
                    Example:

                    <form method="post">
                        <input type="text" name="username">
                        <input type="submit">
                    </form>
                    <?php
                    echo $_POST['username'];
                    ?>


                  3. $_SERVER
                    Contains information about the server and execution environment.
                    Example:

                    echo $_SERVER['PHP_SELF'];     // Current script name
                    echo $_SERVER['SERVER_NAME'];  // Server name
                    echo $_SERVER['HTTP_HOST'];    // Host (domain)


                  4. $_SESSION
                    Stores data that persists across multiple pages for a single user session.
                    Example:

                    session_start();
                    $_SESSION['user'] = "Aryan";
                    echo $_SESSION['user']; // Output: Aryan


                  5. $_COOKIE
                    Stores data on the client (browser) and retrieves it later.
                    Example:

                    setcookie("username", "Aryan", time() + 3600);
                    echo $_COOKIE['username']; // Output: Aryan (after refresh)





    LAB EXERCISE:
           (1)Create a form that takes a user's name and email. Use the $_POST super global todisplay the entered data.
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Form Submit Example</title>
                    </head>
                    <body>

                    <!-- HTML Form -->
                    <form method="post" action="">
                        <label for="name">Name:</label>
                        <input type="text" name="name" required><br><br>

                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br><br>

                        <input type="submit" name="submit" value="Submit">
                    </form>

                    <?php
                    // Check if submit button was clicked
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];

                        echo "<h2>Form Data Received:</h2>";
                        echo "Name: " . $name . "<br>";
                        echo "Email: " . $email;
                    }
                    ?>
                    </body>
                    </html>



*/

?>