<?php 
   
   $connection=mysqli_connect('localhost','root','Yanis123','db_pweb');
   if(!$connection)
   {
       echo 'connection error' . mysqli_connect_error();
   }
   // get events 
   $sql='select * from event order by date_event desc';
   // make query and get results 
   $result= mysqli_query($connection,$sql);

   // fetch the resulting rows as an associative array 
   $events=mysqli_fetch_all($result,MYSQLI_ASSOC);

   mysqli_free_result($result);
   mysqli_close($connection);
   // pass it as a global variable to reach the events page
   session_start();
   $_SESSION['events'] =$events;

   if(isset($_POST['submit-register']))
   {
        // echo $_POST['matricule'];
        // echo $_POST['first-name'];
        // echo $_POST['last-name'];
        // echo $_POST['register-email'];
        // echo $_POST['register-phone'];
        // echo $_POST['register-year'];
        // echo $_POST['register-faculty'];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC</title>
    <link rel="stylesheet" href="./Toast/Toast.css">
    <link rel="stylesheet" href="./CSS/mainMediaQueries.css">
    <link rel="stylesheet" href="./CSS/dark-light.css">
    <link rel="stylesheet" href="./CSS/About.css">
    <link rel="stylesheet" href="./CSS/Stats.css">
    <link rel="stylesheet" href="./CSS/Events.css">
    <link rel="stylesheet" href="./CSS/Structures.css">
    <link rel="stylesheet" href="./CSS/Landing.css">
    <link rel="stylesheet" href="./CSS/Contact.css">
    <link rel="stylesheet" href="./CSS/Navbar.css">
    <link rel="stylesheet" href="./CSS/Modal.css">
    <link rel="stylesheet" href="./CSS/main.css">
    <script src="./script.js"defer type="module" ></script>
    <script src="./dark-light.js"defer ></script>
    <script src="./intersection-observer.js"defer ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "icon" href = "./SVG/MC-LOGO.svg"
        type = "image/x-icon">
</head>
<body class="light-theme">
    <div class="background"></div>
    <div class="container">
        <!--Navbar-->
        <?php include('./Components/Navbar.php') ?>
        <!--Landing page-->
        <?php include('./Components/Landing.php') ?>
        <!--About page-->
        <?php include('./Components/About.php') ?>
        <!--Structures page -->
        <?php include('./Components/Structures.php') ?>
        <!--Events page-->
        <?php include('./Components/Events.php') ?>
        
        <!--Stats page -->
        <?php include('./Components/Stats.php') ?>
        <!--Contact page -->
        <?php include('./Components/Contact.php') ?>
        <!--Register page -->
        <?php include('./Components/Register.php') ?>

        <div id="modal-overlay"></div>        
    </div>
</body>
</html>