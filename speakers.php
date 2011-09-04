<?php
  $title = 'Speakers';
	include('header.php');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="speaker-list-heading vertical-text">speakers</h1>
		<div id="content">
			<div id="names">
				<ul>

					<li>
						<a href="speakers/cliff_click.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/cliff_click_c.png" alt="Cliff Click" width="150" height="150" />
							</div>
							<p class="speaker-name">Cliff Click</p>
							<p class="speaker-affiliation">Distinguished Engineer, Azul Systems</p>
						</a>
					</li>
					<li>
						<a href="speakers/josh_bloch.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/placeholder.png" alt="Josh Bloch" width="150" height="150" />
							</div>
							<p class="speaker-name">Josh Bloch</p>
							<p class="speaker-affiliation">Chief Java Architect, Google</p>
						</a>
					</li>
					<li>
						<a href="speakers/jon_hall.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/jon_hall_c.png" alt="John 'maddog' Hall" width="150" height="150" />
							</div>
							<p class="speaker-name">Jon 'maddog' Hall</p>
							<p class="speaker-affiliation">Executive Director, Linux International</p>
						</a>
					</li>
					<li>
						<a href="speakers/mark_russinovich.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/mark_r_c.png" alt="Mark Russinovich" width="150" height="150" />
							</div>
							<p class="speaker-name">Mark Russinovich</p>
							<p class="speaker-affiliation">Technical Fellow, Microsoft</p>
						</a>
					</li>
					<li>
						<a href="speakers/rachel_brady.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/placeholder.png" alt="Rachel Brady" width="150" height="150" />
							</div>
							<p class="speaker-name">Rachael Brady</p>
							<p class="speaker-affiliation">HCI/Visualizations Researcher, Duke University</p>
						</a>
					</li>
					<li>
						<a href="speakers/scott_klemmer.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/scott_klemmer_c.png" alt="Scott Klemmer" style="margin-left:15px" height="150" />
							</div>
							<p class="speaker-name">Scott Klemmer</p>
							<p class="speaker-affiliation">HCI Researcher, Stanford University</p>
						</a>
					</li>
					<li>
						<a href="speakers/mark_makdad.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/mark_makdad_c.png" alt="Mark Makdad" width="150" height="150" />
							</div>
							<p class="speaker-name">Mark Makdad</p>
							<p class="speaker-affiliation">Director/Founder, Long Weekend LLC</p>
						</a>
					</li>
					<li>
						<a href="speakers/ben_kamens.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/ben_kamens_c.png" alt="Ben Kamens" width="150" height="150" />
							</div>
							<p class="speaker-name">Ben Kamens</p>
							<p class="speaker-affiliation">Lead Developer, Khan Academy</p>
						</a>
					</li>
					<li>
						<a href="speakers/douglas_hofstadter.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/doug_h_c.png" alt="Douglas Hofstadter" width="150" height="150" />
							</div>
							<p class="speaker-name">Douglas Hofstadter</p>
							<p class="speaker-affiliation">Professor of Cognitive Science, Indiana University</p>
						</a>
					</li>
					<li>
						<a href="speakers/richard_powers.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/richard_powers_c.png" alt="Richard Powers" style="margin-left:17.5px" height="150" />
							</div>
							<p class="speaker-name">Richard Powers</p>
							<p class="speaker-affiliation">Author</p>
						</a>
					</li>
					<li>
						<a href="speakers/ari_gesher.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/ari_gesher_c.png" alt="Ari Gesher" width="150" height="150" />
							</div>
							<p class="speaker-name">Ari Gesher</p>
							<p class="speaker-affiliation">Lead Technologist, Palantir Technologies</p>
						</a>
					</li>
					<li>
						<a href="speakers/jason_fennell.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/speakers/cropped/jason_fennell_c.png" alt="Jason Fennell" width="150" height="150" />
							</div>
							<p class="speaker-name">Jason Fennell</p>
							<p class="speaker-affiliation">Search/Data Mining Lead, Yelp</p>
						</a>
					</li>
					<li>
						<a href="speakers/fred_gallagher.php" class="speaker">
							<div class="speaker-pic">
								<img src="images/placeholder.png" alt="Fred Gallagher" width="150" height="150" />
							</div>
							<p class="speaker-name">Fred Gallagher</p>
							<p class="speaker-affiliation">Co-Creator/Cartoonist, Megatokyo</p>
						</a>
					</li>
				</ul>
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>

<?php include('close-page.php') ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.speaker').hover(function() {
				$(this).find('a:last').trigger('hover');
				$(this).css('background-color', '#ff0000');
			}, function() {
				$(this).css('background-color', '#ffffff');
			});
		});

	</script>
