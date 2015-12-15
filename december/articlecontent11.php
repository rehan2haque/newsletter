

<?php
$backgroundimage = 'true';
$modalbackgroundimg = '/content/diwalibackground.jpg';
$fontcolor = '#FFB300'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = '#FFB300';  //colour of title
$backgroundcolor =  'white'; //'black';
$n = '11';//do not touch, should correspond to content/article number
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
<h3>Kantar Diwali Celebrations 2015</h3>
<div class="col-md-6 col-lg-6">

                    <div class="thumbnail-img">
                        <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/Diwali_Poster.jpg" alt="">'; ?>                            
                    </div>

	
</div>
<div class="col-md-6 col-lg-6">
<p>Diwali Celebrations for 2015 were a great success, made only possible by all the volunteers. We hope you enjoyed the food and look forward to more multi cultural events in the future. If you missed out, there is a link to a short video of the day.
</p>

<?php echo '<img class="img-responsive" style="padding-bottom:50px;" src="./'.$nsw_issue.'/images/content/Diwali1.jpg" alt="">'; ?>  

<a href="https://vimeo.com/kantarworldpanel/review/148481035/28adc990e1" target="_blank">
<input type="button" class="btn btn-warning" value="Video Highlights" />
</a>


</div>


	


