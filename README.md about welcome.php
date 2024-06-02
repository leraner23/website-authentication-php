About the codes written in  Welcome.php
      //   The code is a PHP script that checks the user's login status and displays a welcome message if the user is logged in.

<?php 
 session_start(); // It is necessary to call session_start() at the beginning of the script to access the session variables.

    if(!isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == false){   //This checks if the 'isLoggedIn' session variable is not set or is set to false.
        header('location: index.php');  //  the script redirects the user to the index.php page using the header() function.

    }

    echo "<h1> Welcome " .$_SESSION['username']. "</h1>";  //This line outputs a welcome message, displaying the value of the 'username' session variable inside an <h1> tag. 
?>


//  Html sections 
       <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Welcome </title>
        </head>
          <body>
          For more information follow me in github. 
          <a href="logout.php">Logout</a> // Provides a link for the user to log out, which likely points to a logout.php script.
      </body>
        </html>


Output:
           ![image](https://github.com/leraner23/website-authentication-php/assets/160107123/5163da5d-158c-47a6-8761-9eed5701e1e2)


        
