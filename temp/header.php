<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php 
    $page = basename($_SERVER['SCRIPT_NAME'],'.php');
    switch($page) 
    {
        case 'index':
            $page = "Home";
            break;

        case 'about':
            $page = "About us";
            break;

        case 'portfolio':
            $page = "Portfolio";
            break;

        case 'contactUs':
            $page = "Contact us";
            break;
        
        default:
            $page = "error";
            break;
    }
     ?>
    <title>speedy software | <?php echo $page; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900,900i" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,900,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>