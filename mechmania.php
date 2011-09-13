<?php
	include('header.php');
	getTopInfo('MechMania');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="mechmania-heading"></h1>
		<div id="content">
			<h2>AI Programming Competition</h2>
			<p>Each year at Reflections|Projections, we host an artificial intelligence programming competition. The winner takes home a cash prize and bragging rights for the next year.</p>
			<p>Teams of students are tasked with the challenge of building an AI around a client library to play a game against the other teams. Up until the competition, the content of the game remains a tightly-held secret. The game's goal is announced Friday night and competitors are given a few hours to understand the content and develop a strategy.</p>
			<p>Starting Saturday morning and ending Sunday morning, competitors must build their AI and test it. All entries are then run in a final tournament to determine the winner.</p>
			<p>The competition also accepts corporate sponsors, who compete in a separate bracket. Just for fun, corporate entries will also be run against student entries throughout the weekend to see who's better.</p>
			<h2>Language Notice</h2>
			<p>Due to overwhelming requests to simplify the MechMania API, we will be providing a REST interface and data will be communicated with JSON. As such, any language which is capable of interpreting and serializing JSON, and which can communicate with a REST webserver will be accepted during this year's competition. A language-specific object model and a function-based command layer will <i>not</i> be provided. We suggest Python or another language which has integrated support for deserializing JSON.</p>
			<h2>Registration</h2>
			<p>All teams <b>MUST</b> register together. Registration includes a MechMania t-shirt, meals through the weekend, and entrance to the MechMania competition.</p>
			<div style="width:100%; text-align:center;" >
				<iframe  src="http://www.eventbrite.com/tickets-external?eid=1520737567&ref=etckt" frameborder="0" height="224" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" allowtransparency="true" scrolling="no"></iframe>
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<?php include('close-page.php') ?>
