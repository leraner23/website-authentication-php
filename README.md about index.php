Note: this code is written using Xammp and Virtual studio.
Codes & Descriptions:

index.php:
    // codes here will help to show the entry or main  interface
    // $_SERVER , $_POST , $_SESSION are the superglobal array
    // Sessions are a way of storing information about the user across multiple page requests.
    
        <?php
      
         $CORRECT_USERNAME = "SUJAN";  
          $CORRECT_PASSWORD ="Open";

           if($_SERVER['REQUEST_METHOD'] == 'POST'){     // REQUEST_METHOD : HTTP request method used to access the current page 
            $username = $_POST['username'];   // extracts the value of the 'username' form field from the $_POST superglobal array and stores it in the $username variable.
            $password = $_POST['password'];  // extracts the value of the 'password' form field from the $_POST superglobal array and stores it in the $password variable.

           if($username == $CORRECT_USERNAME && $password == $CORRECT_PASSWORD ){
            session_start();  // session_start() function in PHP is used to initialize a session or resume an existing one. 

            $_SESSION['username'] = 'Sujan';      // ( to set the username element in array)  you could  use the $_SESSION['username'] variable to display the user's username.
              $_SESSION['isLoggedIn'] = true;      // (to set the isLoggedIn element in array)  you could check the $_SESSION['isLoggedIn'] variable to determine if the user is logged in
              header('location: welcome.php');    //  the code redirects the user to the "welcome.php"
           }
           }
           ?>

           
   //  The HTML section of the code displays a simple login form with fields for the username and password.
       
          <!DOCTYPE html>
              <html lang="en">
      <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      </head> 
      <body> 
          <form action="" method="POST">  // action: This specifies the URL where the form data will be sent when the user submits the form.  && 
                                         // method: This specifies the HTTP method (e.g., GET or POST)  to use when submitting the form.
        <label for=""> Username <label>
            <input type="text" name = "username">


            <label for=""> Password <label>
            <input type="password" name = "password">

            <input type="submit">
            </form>

              </body>
          </html>
