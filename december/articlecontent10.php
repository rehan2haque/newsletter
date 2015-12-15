

<?php
$backgroundimage = 'true';
$modalbackgroundimg = 'content/backoffbackground.jpg';
$fontcolor = '#F5F5F5'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'black'; //white
$n = '10';//do not touch, should correspond to content/article number
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
				
		<h3>The Great Kantar Bake Off 2015</h3>
		<div><?php echo '<img style="max-width:65%;" class="img-responsive pull-right" src="./'.$nsw_issue.'/images/content/Cakes.jpg" alt="">'; ?></div> 
		<p>
		Thank you to everyone who took part in this years Kantar Bake Off, which took place on Friday 23rd October. we asked you to don your pink attire (or a splash of) and make a donation to raise money for the Breast Cancer Campaign.</p>
			
		<p>BIG THANK YOU to the 17 Bakers who have already helped raise £45.30 so far! we had some very creative entries and the winners were well deserving.</p>
		<div>
		<p>1st place: <strong style="color:rgb(146,212,0);">Shetal Vajesang</strong><br>
		2nd place: <strong style="color:rgb(146,212,0);">Holly Crowther</strong><br>
		3rd place: <strong style="color:rgb(146,212,0);">James Brown</strong><br>
		</p>
		</div>	
		</div> <!-- col-md -->


            
