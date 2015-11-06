

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'black'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'white';  //colour of title
$backgroundcolor = '#FB5C4B'; //white
$n = '5';//do not touch, should correspond to content/article number
?>


<?php 
echo '<style>.formatbkgrnd'.$n.' {background-color:'.$backgroundcolor.';}</style>';
echo '<style>.formatfont'.$n.' p {color:'.$fontcolor.';}</style>'; 
echo '<style>.formatfont'.$n.' h3 {color:'.$titlefontcolor.';}</style>'; 

echo '<style>.formatfont'.$n.' h3 {color:'.$titlefontcolor.';}</style>'; 


if ($backgroundimage=="true"){
echo '<style>.formatbkgrnd'.$n.' { background-image: URL("'.$nsw_issue.'/images/'.$modalbackgroundimg.'");background-repeat: no-repeat; background-size: cover; }</style> ';  //USE TO ADD BACKGROUND IMAGE
}
?>
<style>
.questionwhite	{color:white; display: block;}
</style>

<div class="col-md-10 col-md-offset-1">
			<div class="col-md-6 col-lg-4">

			                    <div class="thumbnail-img">
			                        <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/InterviewImage5.jpg" alt="">'; ?>                            
			                    </div>



			<p><span class="questionwhite">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy ?</span>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				


					</div>

			<div class="col-md-6 col-lg-8">
			<div style="background-color: black;padding: 0.1em;margin-bottom: 1em;"><h3><strong>&nbsp;<span style="color:#BB1200;">Five Minutes with..</span></strong> Joe Bloggs</h3></div>
			<p><span class="questionwhite">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since?</span> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
			<p><span class="questionwhite">Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown ?</span>
			printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectusp.Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
			<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectusp.Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
			<p><span class="questionwhite">Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry’s standard?</span>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectusp.Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>

			</div>




 </div> <!-- col-md main -->