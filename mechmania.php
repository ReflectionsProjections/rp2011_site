<?php
	include('header.php');
	getTopInfo('MechMania');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="mechmania-heading"></h1>
		<div id="content">
			<h2>What is it?</h2>
			<p>MechMania brings together teams from schools across the midwest to compete in a 24-hour AI programming contest. On Friday evening, we will reveal the game and provide documentation on the API. If you can't make it Friday night, don't worry - you can still compete, but you'll be missing <b>Dropbox</b>'s tutorial on Python and REST, two of the underlying technologies in this year's competition. After the programming portion of the competition ends, we will be presenting the final games live. A representative of your team must be present at the closing ceremony for your team to win.</p>
			<center><img src="dropbox.png"/><br/>Sponsored by Dropbox</center>
			<h2>Who's eligible?</h2>
			<p>We accept teams of up to three people in two brackets:</p>
			<h3>Student Competition</h3>
			<p>Our student competition accepts up to twenty teams and pits them against each other in one final battle. Each member of the first place team will receive an <b>iPad 2</b> provided by <b>Dropbox</b>. Second and third place prizes will be announced at a later time.</p>
			<h3>Corporate Competition</h3>
			<p>The corporate competition is open to teams representing companies. This year, we have already received enough of a response to ensure a corporate game.</p>
			<h2>What you need to know</h2>
			<p>We expect competitors to be familiar with a Linux command line (you will have an option between <i>bash</i>, <i>zsh</i>, and <i>csh</i>). Our provided workstations will also give you <i>vim</i>, <i>emacs</i>, and various graphical editors such as <i>Eclipse</i> and <i>gedit</i>. We will also provide compilation tools for <b>Java</b>, a complete <b>Python 2.7</b> environment, as well as <b>gcc for C, C++</b> and all the other languages it compiles. Sample game clients will be provided in <b>Python and Java</b>, but you are free to use any language capable of communicating with our API<sup>1</sup>. The intermediate data description language will be JSON, so be sure to learn a JSON library for your chosen language.</p>
			<h2>What you don't need to know</h2>
			<p>No knowledge of graphics programming is required. For the languages we provide sample clients for, no network programming experience is required. Additionally, Dropbox is running a tutorial on REST in Python during the opening ceremony. This is a change from previous years and was requested by numerous contest alumni.</p>
			<h2>What you'll do</h2>
			<p>By either starting from scratch or using our provided sample clients, you will build an artificial intelligence to play a game which will be announced Friday evening. Our API will provide you with information about the current state of the game, as well as allowing you to send commands to play it.</p>
			<p>You may find previous competition sites useful to get an idea of how MechMania operates.</p>
			<h2>When it'll happen</h2>
			<p>The competition starts with an opening ceremony on Friday, October 7th., after which we will give you the night to rest. The labs open and you can start coding on Saturday morning at 9AM. We will stop accepting updates to your submission at 9AM Sunday, for a total of 24 hours of coding time. The final presentation will happen at 1PM on Sunday.</p>
			<h2>What we'll give you</h2>
			<p>Teams will be provided with 2 PCs running Scientific Linux 6. You should write platform-independent code if you select a language other than Java or Python to ensure compatibility with the competition environment, which usually runs on a Mac Pro. We will provide a standard Unix environment, as described above. You will have access to the Internet throughout the competition and are free to find reference materials, documentation and third party libraries<sup>2</sup>.</p>
			<h2>What you can bring</h2>
			<p>You can bring any reference manuals you wish, whether it be the Art of Computer Programming or the Art of War. But <b>absolutely no outside code</b>. You may, however, bring non-code items like rc files, build scripts, notes, etc.; we still have the large, fuzzy bat from last year and we will make contact with your skull if necessary.</p>
			<!--
			<h2>AI Programming Competition</h2>
			<p>Each year at Reflections|Projections, we host an artificial intelligence programming competition. The winner takes home a cash prize and bragging rights for the next year.</p>
			<p>Teams of students are tasked with the challenge of building an AI around a client library to play a game against the other teams. Up until the competition, the content of the game remains a tightly-held secret. The game's goal is announced Friday night and competitors are given a few hours to understand the content and develop a strategy.</p>
			<p>Starting Saturday morning and ending Sunday morning, competitors must build their AI and test it. All entries are then run in a final tournament to determine the winner.</p>
			<p>The competition also accepts corporate sponsors, who compete in a separate bracket. Just for fun, corporate entries will also be run against student entries throughout the weekend to see who's better.</p>
			<h2>Language Notice</h2>
			<p>Due to overwhelming requests to simplify the MechMania API, we will be providing a REST interface and data will be communicated with JSON. As such, any language which is capable of interpreting and serializing JSON, and which can communicate with a REST webserver will be accepted during this year's competition. A language-specific object model and a function-based command layer will <i>not</i> be provided. We suggest Python or another language which has integrated support for deserializing JSON.</p>
			-->
			<h2>Registration</h2>
			<p>Registration for MechMania is now closed.</p>
			<h2>Footnotes</h2>
			<p><sup>1</sup> ... that compiles and runs on our test machine. Note that this means you should avoid Linux-specific C/C++. Pure Unix-targeted code should suffice.</p>
			<p><sup>2</sup> Please note that when we say "third-party libraries" we mean third-party: not ones written by you, your team, or your friends. We will try to make sure that PIP is set up for Python users.</p>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<?php include('close-page.php') ?>
