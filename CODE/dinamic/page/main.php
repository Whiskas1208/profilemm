<!DOCTYPE html>
<html lang="en">
<head>
    <title>Look for your best house!!!</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Main">
    <link rel="stylesheet" href="style3.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="title">Let's Find Your House!!!</h1>
        <h3 class="desc">Kami selalu siap membantu anda!</h3>
        <nav id="navigation">
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
        ?>
 
    </div>
</body>
</html>