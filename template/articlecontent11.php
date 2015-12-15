

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
<p>Diwali Celebrations for 2015 are planned for Monday, the 16th Nov. Each year we gather together to celebrate the Festival of Lights. This year it’s the same, presenting delicacies from four corners of India and sharing them together in WG1-5 from 12-2pm. 
</p>
<p>
Diwali (or Deepavali, the "festival of lights") is an ancient festival celebrated in autumn every year. The festival spiritually signifies the victory of light over darkness, good over evil. Diwali is celebrated over period of five days. Each individual day has its own importance. The fourth day of Diwali is the Hindu New Year.  Before Diwali night, people clean, renovate and decorate their homes and offices. On Diwali night, people dress up in new clothes or their best outfit, light up diyas (oil lamps and candles) inside and outside their home, participate in family puja (prayers) typically to Lakshmi – the goddess of wealth and prosperity, do fireworks, hold a family feast including mithai (sweets) and exchange gifts between family members and close friends. 
</p>
<p>
So come and join in with the festivities.
</p>
<p>
This year’s menu is shaping up to be an exciting change from previous years, so don’t miss out!
</p>

</div>

		</div> <!-- col-md -->


 