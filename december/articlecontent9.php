

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = '#777'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'black'; //white
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
<!-- <h3>Quality Of Service - Survey</h3> -->
<div class="col-md-6 col-lg-6">

                    <div class="thumbnail-img">
                        <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/qos2.png" alt="">'; ?>                            
                    </div>


	<h1>QOS<small> Survey Feedback</small></h1>
	<p> First of all thanks to everyone who took the time to complete the survey. There was an increase of over 7% in the volume of responses which is great to see. Looking at the top line results for Operations it is clear that whilst we need to acknowledge that not everything we did in the last year or so worked for everyone, we also have a significant increase in the number of people who think Operations has improved over the last year and is certainly heading in the right direction. We can see an even more visible difference in the views of our commercial colleagues, where now 76% of them see us as a continuously improving division.</p>

	
</div>
<div class="col-md-6 col-lg-6">
<p>A few positive comments to quote:
<br>
<i>“More agile, quicker in responding, providing good advice when needed.”</i>
<br>
<i>“Been more pro-active, attended more meetings and felt more part of the team”</i>
<br>
<i>“More client focussed, a more visible effort being make to collaborate with client service.”</i>
<br>
</p>



<div class="hapticQuote" style="margin-bottom:2em;margin-top:2em;">
<?php echo '<img style="width:10%;" class="img-responsive pull-right" src="./'.$nsw_issue.'/images/stock/haptic_topright.png" alt="">'; ?>
 <div class="text-center" style="color:#777;font-size:1.4em;padding-top: 1em;padding-bottom: 0.5em;">“They are much more collaborative, visible and flexible - and focussed on the clients needs and finding solutions rather than their own capability”</div>
 <?php echo '<img style="width:10%;" class="img-responsive" src="./'.$nsw_issue.'/images/stock/haptic_bottomleft.png" alt="">'; ?>
 </div>

<p>There is of course always room for improvement and in the coming year we will need to focus a lot around the pillars/behaviours as there seems to be a gap in how we rate ourselves and how we are perceived commercially. Areas for development are  - “Having a Point Of View”, becoming real “Trusted Advisors” and being absolutely “Client Orientated”.</p>

<br><br>
</div>

<div class="col-md-12 col-lg-12">
<p>We already project these behaviours to a degree, which came through via the verbatim comments given in the survey. In the coming year we will continue to build on our success and  look to further enhance our capabilities</p>
<br>
<p>Gabriella Morales</p>
</div>
		</div> <!-- col-md -->

            
