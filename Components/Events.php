<?php 
   $events=$_SESSION['events'] ;
?>
<div id="events"class="event-page impaire ">
    <h1 class="events-title">Our Events</h1>
    <p class="events-desc">Discover the events we hold all year round</p>
    <div class="events">
     <?php if(sizeof($events)==0){?>
        <h1>There's no event 😔😔 </h1>
     <?php }?>

     <?php foreach($events as $event){ ?>
        <div class="event-element" style="position: relative;">
            <?php 
                $event_name=htmlspecialchars($event['event_name']); 
                $event_link_img="./SVG/". $event_name .".svg";
                $event_description=htmlspecialchars($event['description']);
                $event_date=htmlspecialchars($event['date_event']);
            ?>
            <div class="event-img">
              
              <img src="<?php echo $event_link_img?>" alt="">
            </div>
            <div class="event-text">
             <h1 class="event-title"><?php echo $event_name ?></h1>
             <p class="event-desc"><?php echo $event_description ?></p>
             <span class="event-desc" style="position:absolute;bottom:10px; right:20px;font-size:10px;"><?php echo $event_date ?></span>
           </div>
        </div>
     <?php } ?>
        
    </div>
</div>