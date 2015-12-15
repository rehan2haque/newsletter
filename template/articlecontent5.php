

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'inherit'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'white'; //white
$n = '5';//do not touch, should correspond to content/article number
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
		<div>
		<?php echo '<img style="max-width:30%;" class="img-responsive pull-right" src="./'.$nsw_issue.'/images/content/lean-manufacturing.png" alt="">'; ?>   
		</div>

		<h3>LEAN SNAPSHOT</h3>
		<p>

		<strong>What is Lean?</strong><br>

		Lean is a way of working that relentlessly seeks to create value for customers and eliminate any activities that do not. 

		It is a mind-set of rethinking everything we do and supporting each other to achieve this, enabling us to deliver outstanding service, long-term business success and motivated colleagues.
		
		<br><br>
		<strong>What does that mean for KWP?</strong><br>

		Lean fits perfectly with our identity and vision to Drive Client Growth. We will be actively identifying and understanding customer needs while ensuring that we utilise our resources in the most effective way to deliver value to our clients in order to drive their business’s forwards, and in turn ours. 
		
		<br><br>
		<strong>Want to know more?</strong><br>

		Please contact a member of the Business and Process Improvement Team or speak with a member of the Senior Management Team.
		<br><br>David Price
		</p>
			
			
		</div> <!-- col-md -->

            
