<html>
<?php
		include_once('init.php');
		PrintHeader('St. Louis Theatre', 'Home');
	?>
		<div class="Announcements">
			<h3>
				Announcements
			</h3>
			<?php
				$Announcements = GetAnnouncements();
				//var_dump($Announcements);
				foreach($Announcements as $Row){
					echo"<p class='Headline'>".$Row['Headline'].
					"</p>";
					echo"<p>".$Row['Blurb']."</p>";
				};
			?>
		</div>
		<div class="DivideLine">
		</div>
		<div class="About">
			<h3>
				About
			</h3>
			<p>
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
				<br />
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
				<br />
				This is the about copy. Where I write what this website
				is about. <br /> Maybe I'll add some jokes and sappy stories
				to make it more interesting. <br /> And I'll write more and
				more and more and more and more to make sure that I can
				really test everything out! <br /> Here goes! I'm writing a
				whole bunch! This is exciting! Here's more about this website.
			</p>
		</div>
	<?php
		PrintFooter();
