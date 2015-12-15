

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'inherit'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'white'; //white
$n = '1';//do not touch, should correspond to content/article number
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

		<h3>MEET THE SENIOR MANAGEMENT TEAM (SMT)</h3>
		<p>Hello and welcome to this, our first Digital Edition of the Kantar Worldpanel Operations Newsletter. With Jeremy off on holiday this week, he has left his editorial duties to us, the newly founded Senior Management Team.</p>
<p>You know most of us all as individuals and will have heard from a couple of us at this month’s Operations Comm’s session, but we’d like to use this platform to introduce ourselves as a team, tasked to work collaboratively in order to drive Operations, both in process initiative and people development.</p>
<p>Very soon we will be sending out an invite to join us at our own Chatter Matters, providing us with a valuable opportunity to have a conversation with both Operations and the wider business to help us to shape our plans and visions.</p>
<p>Whilst we might not have all the answers just yet, we look forward to sharing with you our initial ideas for the future of Operations and of course listening and discussing some of yours.</p>
<p>Our main aim is to drive and accommodate change, and most importantly to Drive Client Growth. So we look forward to telling you more about what we’re up to and also having the chance to hold valuable conversations with you and providing support and resource wherever we can.</p>
<p>So there we are, the Senior Management team, we’re here to help and make things happen!</p><br>


			
		<?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/smt.png" alt="">'; ?> 
		<?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/smt2.png" alt="">'; ?>   

		</div> <!-- col-md -->


            
