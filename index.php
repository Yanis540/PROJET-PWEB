<?php 
   
  include ('./db_connect.php');
   // get events 
   // make query and get results 
   if($connection)
   {
     $sql='select * from event order by date_event desc';
     $events=handleGet($connection,$sql);
    // GET FACULTY STATS

    $sql ='select  faculty, count(faculty) as number_faculty from recruit group by faculty;';
    $faculty_stats=handleGet($connection,$sql);
    //get members number 

    $current_year=intval(date('Y'));
    $sql ="select   count(matricule) as number_joined from recruit where date_reg like '$current_year%' ;";
    $recruit_stats=handleGet($connection,$sql);
    


    // pass it as a global variable to reach the events page
    session_start();
    $_SESSION['events'] =$events;
    $_SESSION['faculty_stats'] =$faculty_stats;
    $_SESSION['recruit_stats'] =$recruit_stats;
    mysqli_close($connection);
   }
   else{
       include('./Components/404.php');
   }
?>
<?php
   function handleGet($connection,$sql)
   {
     $result= mysqli_query($connection,$sql);
     $array=mysqli_fetch_all($result,MYSQLI_ASSOC); // fetch the resulting rows as an associative array 
     mysqli_free_result($result);
     return $array;
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
     <?php if($connection){?>
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
     <?php }?>

       
    </div>
</body>
</html>