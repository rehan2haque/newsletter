

<?php
$backgroundimage = 'true';
$modalbackgroundimg = 'content/goingdigital.jpg';
$fontcolor = 'white'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'black'; //white
$n = '2';//do not touch, should correspond to content/article number
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

<div class="col-md-12 col-lg-12"><h3>#WeAreGoingDigital</h3></div>
<div class="col-xs-2 col-sm-3 col-md-6 col-lg-6">

                    <div class="thumbnail-img">
                        <?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/issue1.jpg" alt="">'; ?>                            
                    </div>

	
</div>
<div style="background-color: rgba(51, 51, 51, 0.31);" class="col-md-6 col-lg-6">
<p>After 15 quality paper issues of the Operations Newsletter and many last minute dashes to the print room, we are delighted to present our first ever digital edition of the Operations Newsletter; your number one source for Kantar Worldpanel UK, US and Ireland Operations news.</p> 
<p>Joining the Newsletter team this month are two new recruits who are already proving to be huge assets, our new Web designer Rehan Haque and keen investigative reporter Maryam Najumi.</p> 
<p>Another driving force that has helped us transition to our new medium are the newly founded SMT and so we would like to take this opportunity to thank them for all of their contributions to this issue. We look forward to hassling them for all the scoops from their departments in the months to come.</p>
<p>A very special thanks also to Vince Stanton, who has helped co-ordinate this issue whilst the Media Panel Comms team have been contending with some challenging deadlines in the Screenwise panel build.</p>
<p>As always, we are still on the lookout for additional contributors and designers to allow us to continue to deliver this quality product each month. So if you have an interest in writing, web design or simply office gossip, please get in touch with Luke Chandley or Chris Franklin.</p> 
<p>Kind Regards,</p><br>
<h3>The Operations Newsletter Team</h3>


</p>
<?php echo '<img class="img-responsive" src="./'.$nsw_issue.'/images/content/newsletterTeam.png" alt="">'; ?>    
</div>

		</div> <!-- col-md -->           
