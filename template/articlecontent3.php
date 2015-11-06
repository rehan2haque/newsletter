

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'inherit'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'black'; //white
$n = '3';//do not touch, should correspond to content/article number
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
<h3>2 Col - Haptic Quote</h3>
<div class="col-md-6 col-lg-6">

                    <div class="thumbnail-img">
                        <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/articlecontentimg2.jpg" alt="">'; ?>                            
                    </div>


	<h1>Quotes in Haptics<small>Subtext for header</small></h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	
</div>
<div class="col-md-6 col-lg-6">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,

<div class="hapticQuote" style="margin-bottom:1em;">
<?php echo '<img style="width:10%;" class="img-responsive pull-right" src="./'.$nsw_issue.'/images/stock/haptic_topright.png" alt="">'; ?>
 <div class="text-center" style="font-size:1.4em;padding-top: 1em;padding-bottom: 0.5em;">this quote should be picked out in haptics.</div>
 <?php echo '<img style="width:10%;" class="img-responsive" src="./'.$nsw_issue.'/images/stock/haptic_bottomleft.png" alt="">'; ?>
 </div>

  to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectusp.Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>

</div>

		</div> <!-- col-md -->

            
