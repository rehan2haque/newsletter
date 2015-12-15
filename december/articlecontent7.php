

<?php
$backgroundimage = 'true';
$modalbackgroundimg = 'content/xmas.jpg';
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
			</uL>

		<h3>HELPING HAND: Slippers for Shelter</h3>
			<uL class="diarydatelist">
				<li>4th December</li>
				<!-- <li></li> -->
			</uL>

				<h3>HELPING HAND: Food Bank Collection for Acton Homeless Concern</h3>
			<uL class="diarydatelist">
				<li>7th  – 14th December </li>
				<!-- <li></li> -->
			</uL>

			<h3>SOCIAL: Kantar Worldpanel Christmas Party</h3>
			<uL class="diarydatelist">
				<li>17th December</li>
				<!-- <li></li> -->
			</uL>
			
			<h3>CHRISTMAS WORKING HOURS</h3>
			<uL class="diarydatelist">
				<li>24th December - Lunch time finish</li>
				<li>25th December - Christmas Day</li>
				<li>28th December - Bank Holiday</li>
				<li>29th December - Discretionary day off</li>
				<li>31st December - New years eve 4pm finish</li>
				<li>1st January - New Years Day</li>
				<!-- <li></li> -->
			</uL>


		
		</p>
			
		</div> <!-- col-md -->

            
