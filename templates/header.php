<?php 
    session_start();

    // //overwrite name using:
    // //$_SESSION['name'] = 'yoshi';

    // //delete name using
    // if($_SERVER['QUERY_STRING'] == 'noname'){
    //     //unset($_SESSION['name']);//unsets/deletes a single variable
    //     session_unset();//deletes all session variables;
    // }
    // //note you'd have to manual input the query string in the conditional in order to trigger if statement
    //  //$name = $_SESSION['name'];//gives an error because we are trying to access something we've unset/deleted

    // //We can fix this error using the null coalesc syntax:
    $name = $_SESSION['name'] ?? 'Guest';//which says set to guest if this sessions name does not exist


?>

<head>
    <title>Pizza project</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Great's Pizzashop</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name);?></li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
