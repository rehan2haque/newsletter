

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'black'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'white';  //colour of title
$backgroundcolor = '#C71C22'; //white
$n = '7';//do not touch, should correspond to content/article number
?>


<?php 
echo '<style>.formatbkgrnd'.$n.' {background-color:'.$backgroundcolor.';}</style>';
echo '<style>.formatfont'.$n.' p {color:'.$fontcolor.';}</style>'; 
echo '<style>.formatfont'.$n.' h3 {color:'.$titlefontcolor.';}</style>'; 

if ($backgroundimage=="true"){
echo '<style>.formatbkgrnd'.$n.' { background-image: URL("'.$nsw_issue.'/images/'.$modalbackgroundimg.'");background-repeat: no-repeat; background-size: cover; }</style> ';  //USE TO ADD BACKGROUND IMAGE
}
?>
<style>

.diarydatelist li {
	color:black;
	 list-style-type: none;
}

</style>

		<div class="col-md-10 col-md-offset-1">
		<div>
		<?php echo '<img style="max-width:30%;" class="img-responsive pull-right" src="./'.$nsw_issue.'/images/content/diary.png" alt="">'; ?>   
		</div>

		<h1 style="color:white;">Dates for your Diary</h1>
		<p><br>


		<h3>Operations Christmas Party</h3>
			<uL class="diarydatelist">
				<li>11th of December</li>
				<li>Look out for the email next week to register your place!</li>
			</uL>

		<h3>The One Event</h3>
			<uL class="diarydatelist">
				<li>27th November</li>
				<li>	The One event is around the corner , same time same place at the ILEC, 47 Lillie Road, Earls Court, SW6 1UD. Be sure to register your place before the link expires on the 16th of November.</li>
			</uL>


		</p>
			
		</div> <!-- col-md -->

            
