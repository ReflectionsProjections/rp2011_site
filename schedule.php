<?php
	include('header.php');
   include('datamodels/SpeakerFactory.php');
 	getTopInfo('Schedule');

   function getEntry($id, $talk_id) {
      $speaker = SpeakerFactory::retrieveSpeakerByID($id);
      $url = "<a href=\"speaker_info.php?sid=".$id."\">";
      $talk = $speaker->getTalks();
      $talk = $talk[$talk_id]->getTitle();
      $name = $speaker->getName();
      $affiliation = $speaker->getAffiliation();
      $talk_title_div = "<div class=\"eventTitle\">".$talk."</div>";

      if ($id != 83) {
         echo $url.$talk_title_div.$name.", ".$affiliation."</a><br />";
      } else {
         echo $url.$name.", ".$affiliation."</a><br />";
      }
   }
?>
<div id="wrapper">
   <?php getHeader(); ?>
      <div id="content-wrapper">
         <h1 class="schedule-heading" /></h1>
            <div id="content">
       
                  <table>
 
                     <tr>
                        <td class="time"></td>
                        <td colspan=2>
                                <h2 class="schedule">Friday, October 7th</h2>
                        </td>
                     </tr>
                     <tr>
                        <td class="time">10:00 AM</td>
                        <td colspan=2 class="both">
                          <a class="eventTitle" href="job-fair-info.php">Reflections | Projections Job Fair</a><br />
                          Siebel Center Atrium
                        </td>
                     </tr>
    
                     <tr>
                        <?php $id = 33; $speaker = SpeakerFactory::retrieveSpeakerByID($id);?>
                        <td class="time">5:00 PM</td>
                        <td colspan=2 class="both">
                           <?php getEntry(33, 0); ?>
                           1404 Siebel Center
                        </td>
                     </tr>
    
                     <tr>
                        <td class="time">6:30 PM</td>
                        <td colspan=2 class="both">
                           <a class="eventTitle" href="">Dinner sponsored by Bazaarvoice</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>

    
                     <tr>
                        <td class="time">7:45 PM</td>
                        <td colspan=2 class="both">
                           <?php getEntry(63, 0); ?>
                           1404 Siebel Center
                        </td>
                     </tr>
                     <tr>
                        <td class="time">9:00 PM</td>
                        <td colspan=2 class="both">
                           <a class="eventTitle" href="mechmania.php">MechMania Opening Ceremony</a><br />
                           1404 Siebel Center
                        </td>
                     </tr>
    </table>
   <br /><br />
       
                  <table>
                     <tr>
                        <td class="time"></td>
                        <td colspan=2>
                                <h2 class="schedule">Saturday, October 8th</h2>
                        </td>
                     </tr>
 
                     <tr>
                        <td class="time">9:00 AM</td>
                        <td class="left"> 
                           <a class="eventTitle" href="">Breakfast</a><br /> 
                          Siebel Center Atrium
                        </td>
                        <td class="right">
                          <a class="eventTitle" href="mechmania.php">Mechmania Begins</a><br />
                          Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">10:00 AM</td>
                        <td class="left"> 
                           <a class="eventTitle" href="">Dropbox</a><br /> 
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(53,0); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">11:15 AM</td>
                        <td class="left"> 
                           <?php getEntry(43,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(3,0); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">12:30 PM</td>
                        <td colspan=2 class="both">
                           <a class="eventTitle" href="">Lunch</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">1:30 PM</td>
                        <td class="left"> 
                           <?php getEntry(73,0); ?>
                           <?php getEntry(83,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(143,0); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">2:45 PM</td>
                        <td class="left"> 
                           <?php getEntry(93,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(113,0); ?>
                           <a href="speaker_info.php?sid=113">Rachael Brady</a><br />
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">4:00 PM</td>
                        <td class="left"> 
                           <?php getEntry(13,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(133,0); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">5:30 PM</td>
                        <td colspan=2 class="both">
                           <a class="eventTitle" href="">Dinner</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">6:30 PM</td>
                        <td class="left"> 
                           <?php getEntry(23,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(103,0); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">7:45 PM</td>
                        <td class="left"> 
                           <?php getEntry(123,0); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(3,1); ?>
                           1320 DCL 
                        </td>
                     </tr>
                  </table>

   <br /><br />
                  <table>
                     <tr>
                        <td class="time"></td>
                        <td colspan=2>
                                <h2 class="schedule">Sunday, October 9th</h2>
                        </td>
                     </tr>
 
                     <tr>
                        <td class="time">9:00 AM</td>
                        <td colspan=2 class="both">
                          <a class="eventTitle" href="mechmania.php">MechMania Ends</a><br /><br />
                        </td>
                     </tr>
    
    
                     <tr>
                        <td class="time">1:00 PM</td>
                        <td colspan=2 class="both">
                           <a class="eventTitle" href="mechmania.php">MechMania Closing Ceremony</a><br />
                           1404 Siebel Center
                        </td>
                     </tr>
                  </table>    

      </div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->

<?php include('footer.php') ?>
<?php include('close-page.php') ?>
