

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'inherit'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'white'; //white
$n = '9';//do not touch, should correspond to content/article number
?>


<?php 
echo '<style>.formatbkgrnd'.$n.' {background-color:'.$backgroundcolor.';}</style>';
echo '<style>.formatfont'.$n.' p {color:'.$fontcolor.';}</style>'; 
echo '<style>.formatfont'.$n.' h3 {color:'.$titlefontcolor.';}</style>'; 

if ($backgroundimage=="true"){
echo '<style>.formatbkgrnd'.$n.' { background-image: URL("'.$nsw_issue.'/images/'.$modalbackgroundimg.'");background-repeat: no-repeat; background-size: cover; }</style> ';  //USE TO ADD BACKGROUND IMAGE
}
?>



					 

		
		<div class="col-md-10 col-md-offset-1">

 <?php echo '<img class="col-md-12 col-lg-12 img-responsive" style="margin-bottom: 1em;" src="./'.$nsw_issue.'/images/content/together.jpg" alt="">'; ?> 


	
		<div class="col-md-6 col-lg-6">
			<h3>Santa Charity Run</h3>
		<p>
		That’s right guys….. it’s that time of year where you get to dress up as Santa for an evening and run a 5K in Central London to raise some money for a great cause!<br>
		</p>
		<p>
		Last year the Santa Run was a Jolly success and I am sure all who took part won’t want to miss out on the opportunity to do it all over again along with welcoming some new Santa’s to join in the fun! We will be raising money for <STRONG>BRAINWAVE</STRONG>, a charity which helps disabled and disadvantaged children through educational and physical therapy.
		</p>
		</div>

		<div class="hidden-sm hidden-xs col-md-6 col-lg-6">  <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/santarun.jpg" alt="">'; ?></div>



		<div class="col-md-12 col-lg-12">
		<br><h3>Event Details:</h3>

		<p>
		<strong>Date :</strong> Tuesday 8th December 2015 at 5:30pm <br><br>
		<strong>What to wear:</strong> Santa costume (this is included in the price) – Plus any other extra’s you would like to add, fairy lights, a reindeer on the side etc<br><br>
		<strong>Route:</strong> 5K through central London, start and finish at Spitalfields Market</br><br> 
		<strong>Cost:</strong> £25 per participant (all-inclusive), to be paid before 16th November 2015</br><br>
		<br><h3>How to get involved</h3>
		Send an email to <a href="mailto:Annah.Rae@kantarworldpanel.co.uk?subject=SantaRun">Annah Rae</a> and indicate your target (or expected) time. Please note that the registration deadline is 9th November and payment has to be made before 16th November 2015 (Payment to be made in cash)
		Like last year we will be emailing out to everyone who enters to ask you to link up into groups of 5 Santa’s!
		We aim to raise additional funds to donate to Brainwave, so watch this space even if running is not for you! 
		This year there will be added games and surprises along the way! We look forward to everyone participating in the Santa Madness again.<br><br>
		</p>

		Thanks,<br><br>
		The Helping Hands team
		</div>
			
			
		</div> <!-- col-md -->


            
