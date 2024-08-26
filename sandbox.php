<?php

    // ternary operators
    //$score = 50;

    //echo $score > 40 ? 'high score!' : 'low score:(' ;
    //cannot echo in ternary operator they return a value, use that value instead
    
    // superglobals -- prepopulated with values by the time your code runs

    // echo $_SERVER['SERVER_NAME'] . '<br />';
    // echo $_SERVER['REQUEST_METHOD'] . '<br />';
    // echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
    // echo $_SERVER['PHP_SELF'] . '<br />';

    //sessions
    // a session does not store data on the users computer like a cookie would but instead
    //it stores data on the server between requests (loading different pages)
    //By default after we start a session the session will last until we close the browser

    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: index.php');
    }




?>

<!DOCTYPE html>
<html>
    <head>
        <title>php tuts</title>
    </head>
<body>
    <p>Hello, please enter your name to visit Great's PizzaShop!</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>