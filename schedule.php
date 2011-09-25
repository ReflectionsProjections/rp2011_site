<?php
	include('header.php');
   include('datamodels/SpeakerFactory.php');
 	getTopInfo('Schedule');

   function getEntry($id) {
      $speaker = SpeakerFactory::retrieveSpeakerByID($id);
      $url = "<a href=\"speaker_info.php?sid=".$id."\">";
      $name = $speaker->getName();
      $affiliation = $speaker->getAffiliation();

      echo
      $url.$name.", ".$affiliation."</a><br />";
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
                                <h2 class="schedule">Friday</h2>
                        </td>
                     </tr>
                     <tr>
                        <td class="time">10:00 AM</td>
                        <td colspan=2 class="both">
                          <a href="job-fair-info.php">Reflections | Projections Job Fair</a><br />
                          Siebel Center Atrium
                        </td>
                     </tr>
    
                     <tr>
                        <?php $id = 33; $speaker = SpeakerFactory::retrieveSpeakerByID($id);?>
                        <td class="time">5:00 PM</td>
                        <td colspan=2 class="both">
                           <?php getEntry(33); ?>
                           1404 Siebel Center
                        </td>
                     </tr>
    
                     <tr>
                        <td class="time">6:30 PM</td>
                        <td colspan=2 class="both">
                           <a href="">Dinner sponsored by Bazaarvoice</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>

    
                     <tr>
                        <td class="time">7:45 PM</td>
                        <td colspan=2 class="both">
                           <?php getEntry(63); ?>
                           1404 Siebel Center
                        </td>
                     </tr>
                     <tr>
                        <td class="time">9:00 PM</td>
                        <td colspan=2 class="both">
                           <a href="mechmania.php">MechMania Opening Ceremony</a><br />
                           1404 Siebel Center
                        </td>
                     </tr>
    </table>
   <br /><br />
       
                  <table>
                     <tr>
                        <td class="time"></td>
                        <td colspan=2>
                                <h2 class="schedule">Saturday</h2>
                        </td>
                     </tr>
 
                     <tr>
                        <td class="time">9:00 AM</td>
                        <td colspan=2 class="both">
                          <a href="mechmania.php">Mechmania Begins</a><br />
                          Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">10:00 AM</td>
                        <td class="left"> 
                           <a href="">Dropbox</a><br /> 
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(53); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">11:15 AM</td>
                        <td class="left"> 
                           <?php getEntry(43); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(3); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">12:30 PM</td>
                        <td colspan=2 class="both">
                           <a href="">Lunch</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">1:30 PM</td>
                        <td class="left"> 
                           <?php getEntry(73); ?>
                           <?php getEntry(83); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(143); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">2:45 PM</td>
                        <td class="left"> 
                           <?php getEntry(93); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(113); ?>
                           <a href="speaker_info.php?sid=113">Rachael Brady</a><br />
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">4:00 PM</td>
                        <td class="left"> 
                           <?php getEntry(13); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(133); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">5:30 PM</td>
                        <td colspan=2 class="both">
                           <a href="">Dinner</a><br />
                           Siebel Center Atrium
                        </td>
                     </tr>
                     <tr>
                        <td class="time">6:30 PM</td>
                        <td class="left"> 
                           <?php getEntry(23); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(103); ?>
                           1320 DCL 
                        </td>
                     </tr>
                     <tr>
                        <td class="time">7:45 PM</td>
                        <td class="left"> 
                           <?php getEntry(123); ?>
                           1404 Siebel Center
                        </td>
                        <td class="right">
                           <?php getEntry(3); ?>
                           1320 DCL 
                        </td>
                     </tr>
                  </table>

   <br /><br />
                  <table>
                     <tr>
                        <td class="time"></td>
                        <td colspan=2>
                                <h2 class="schedule">Sunday</h2>
                        </td>
                     </tr>
 
                     <tr>
                        <td class="time">9:00 AM</td>
                        <td colspan=2 class="both">
                          <a href="mechmania.php">MechMania Ends</a><br /><br />
                        </td>
                     </tr>
    
    
                     <tr>
                        <td class="time">1:00 PM</td>
                        <td colspan=2 class="both">
                           <a href="mechmania.php">MechMania Closing Ceremony</a><br />
                           1404 Siebel Center
                        </td>
                     </tr>
                  </table>    

      </div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->

<?php include('footer.php') ?>
<?php include('close-page.php') ?>
