

<?php
$backgroundimage = 'false';
$modalbackgroundimg = 'modalbackground1.jpg';
$fontcolor = 'inherit'; //black //white //#888 //rgb(146,212,0)
$titlefontcolor = 'rgb(146,212,0)';  //colour of title
$backgroundcolor = 'black'; //white
$n = '8';//do not touch, should correspond to content/article number
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

		<h3>Title 2</h3>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum posuere eros, a imperdiet turpis dictum sed. Duis tempus urna facilisis purus hendrerit blandit. Aenean volutpat ornare libero, pulvinar pharetra dui bibendum a. Maecenas sodales tellus eros, a euismod velit gravida eu. Pellentesque gravida vehicula risus, vel dapibus odio auctor nec. Nunc dolor eros, porttitor nec suscipit non, tincidunt et odio. Nullam mauris enim, tempus id elit eget, accumsan bibendum nisl.

		Mauris et diam et tellus luctus rhoncus. Sed odio turpis, mollis nec purus vel, tempor interdum nisi. Integer dapibus augue sit amet malesuada elementum. Maecenas congue, enim a condimentum elementum, sem felis molestie felis, vel finibus lacus arcu eu arcu. Sed pulvinar, nulla nec molestie ultrices, arcu nibh vulputate turpis, ut viverra eros urna nec metus. Quisque sed feugiat magna, mollis semper metus. Aliquam nec mi libero. Phasellus et justo posuere est faucibus mollis eget vitae ex. Vestibulum arcu ante, maximus ac congue vel, faucibus quis nibh. Aenean in diam sapien. Nulla porta eu est non gravida. Nam ante dui, pellentesque eu lacinia in, sollicitudin vel purus. Quisque interdum nunc quis porta interdum. Phasellus et varius felis, vitae viverra ante. Nunc lorem lectus, tempus quis elit ac, posuere auctor odio.

		Quisque bibendum at tortor vitae tempus. Mauris ultrices ultricies tellus. Suspendisse malesuada quam nec odio commodo, sit amet bibendum ex sagittis. Nam ac lacinia sem, vel lacinia ante. Mauris sed nunc ante. Proin iaculis dictum dapibus. Nam pretium cursus felis. Donec tempus nunc nulla, ut pretium erat pulvinar quis. Nam sed ex nibh. Aliquam suscipit non mi sit amet pretium. Quisque varius purus nec dui malesuada, accumsan blandit eros volutpat. Nulla ultricies et purus in vehicula. Quisque malesuada felis eu justo cursus, pharetra ornare lectus pellentesque.
		</p>
			
			
		</div> <!-- col-md -->


            
