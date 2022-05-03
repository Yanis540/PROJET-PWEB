<?php
  include ('./db_connect.php');
  $faculty_stats=$_SESSION['faculty_stats'] ;
  $recruit_stats=$_SESSION['recruit_stats'] ;
  ;
?>
<div id="stats"class="stats-page  paire">
    <h1 class="stats-title">Some Of Our Stats</h1>
    <p class="stats-desc">Get Our Latest Stats </p>
    <div class="stats">
        <div class="stat-element">
            <p>+500 members in the club</p>
        </div>
        <div class="stat-element">
            <?php foreach($faculty_stats as $fac ) {?>
                <?php 
                    $name=htmlspecialchars($fac['faculty']); 
                    $number_members=htmlspecialchars($fac['number_faculty']); 
                ?>

                <p>+<?php echo $number_members?> members <?php echo $name ?> from  faculty</p>
            <?php }?>
        </div>
        <div class="stat-element">
            <p>+<?php echo $recruit_stats[0]['number_joined'] ?> members joined us this year </p>
        </div>
    </div>
</div>