

<?php

$NSW_MONTH = "november";
$NSW_YEAR = "2015";

$numberofarticles = 12;

//NO SPACES IN TOPIC NAME
$topic1 = "PEOPLE";
$topic2 = "Initiatives";
$topic3 = "SERVICE";
$topic4 = "Social";

$topic5 = "other";
$topic6 = "default";


$art1title = "SMT";
$art1desc = "Meet the Senior Management Team";
$art1topics = 'topic1';

$art2title = "#WeAreGoingDigital";
$art2desc = "issue 1 of the digital newsletter goes live<br>But we need your help";
$art2topics = 'topic2 topic1';

$art3title = "QOS";
$art3desc = "Quality of service survey feedback";
$art3topics = 'topic3';

$art4title = "5 Minutes with Sam Sullivan";
$art4desc = "We catch up with the Business and <br>Process Improvement new boy";
$art4topics = 'topic1 topic1';

$art5title = "Lean Snapshot";
$art5desc = "What is lean?";
$art5topics = 'topic2';

$art6title = "REGISTER";
$art6desc = "Register for the One Event, 27th Nov";
$art6topics = 'topic4 ';

$art7title = "Dates";
$art7desc = "Dates for your Diary";
$art7topics = 'topic4';

$art8title = "IBM";
$art8desc = "The IT Transformation Process";
$art8topics = 'topic2';

$art9title = "Santa Run";
$art9desc = "5k run in central London<br>all for a good cause";
$art9topics = 'topic4';

$art10title = "The Great Kantar Bake Off";
$art10desc = "";
$art10topics = 'topic4';



$art11title = "Diwali 2015";
$art11desc = "Monday 16th November<br>all you need to know";
$art11topics = 'topic4';


$art12title = "ISO";
$art12desc = "Follow link to view the Quality policy micro site ";
$art12topics = 'topic3';

$art13title = "default13";
$art13desc = "default description of article here";
$art13topics = '';

$art14title = "default14";
$art14desc = "default description of article here";
$art14topics = '';

$art15title = "default15";
$art15desc = "default description of article here";
$art15topics = '';

$art16title = "default16";
$art16desc = "default description of article here";
$art16topics = '';
?>


    <!--=== Breadcrumbs v3 ===-->
   <?php echo '<div class="breadcrumbs-v3" style="background: url(./'.$NSW_MONTH.'/images/BackgroundBannerImage.jpg) no-repeat; background-size: cover;background-position:center center;">'; //CONTROLLS BANNER IMAGE ?> 
        <div class="container text-center">
            <p>Operations Newsletter</p>
            <h1 style="color:#72c02c;"><?php echo $NSW_MONTH.' '; ?><?php echo $NSW_YEAR ?></h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->

    <!--=== Cube-Portfdlio ===-->
    <div class="cube-portfolio container margin-bottom-60">
        <div class="content-xs">
            <div id="filters-container" class="cbp-l-filters-text content-xs">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
                <div data-filter=".topic1" class="cbp-filter-item"> <?php echo $topic1;?> </div> |
                <div data-filter=".topic2" class="cbp-filter-item"> <?php echo $topic2;?> </div> |
                <div data-filter=".topic3" class="cbp-filter-item"> <?php echo $topic3;?> </div> |
                <div data-filter=".topic4" class="cbp-filter-item"> <?php echo $topic4;?> </div>
        <!--    <div data-filter=".topic5" class="cbp-filter-item"> <?php echo $topic5;?> </div> -->
        <!--    <div data-filter=".topic6" class="cbp-filter-item"> <?php echo $topic6;?> </div> -->

            </div><!--/end Filters Container-->
        </div>

        <div id="grid-container" class="cbp-l-grid-agency">
                

                <?php
                for ($i = 1; $i <= $numberofarticles; $i++) {
                    $artt = 'art'.$i.'title';
                    $artd = 'art'.$i.'desc';
                    $arttopic = 'art'.$i.'topics';
                
                    
                    echo '<div class="cbp-item '.$$arttopic.'">';// <!--ADD TOPIC TO CLASS FOR FILTER BUTTON TO WORK (e.g topic1,2,3 etc <div class="cbp-item topic2 topic4">)-->
                 ?>   
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <?php echo '<img src="./'.$NSW_MONTH.'/images/article'.$i.'.jpg" alt="">'; //image location changes according to NSW_MONTH variable, to reflect current folder ?> 
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <ul class="link-captions">


                                            <?php 

                                            if ($i==6 | $i== 12){ 

                                                if ($i==6){
                                                echo '<li><a href="http://intranet-dev/apps/One/registration.php" target="_blank"><i class="rounded-x fa fa-link"></i></a></li>'; 
                                                } else {
                                                 echo '<li><a href="http://www.intranet.kantarworldpanel.com/operations/quality/" target="_blank"><i class="rounded-x fa fa-link"></i></a></li>'; 
                                                }
                                            }    

                                            if ($i !==6 and $i!==12){echo '<li><a href="" data-toggle="modal" data-target="#article'.$i.'"><i class="rounded-x fa fa-search"></i></a></li>';}
                                            ?>                                                                                     
                                            
                                            
                                            

                                        </ul>
                                        <div class="cbp-l-grid-agency-title"><?php echo $$artt; ?></div>
                                        <div class="cbp-l-grid-agency-desc"><?php echo $$artd; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>


        </div><!--/end Grid Container-->
</div>    
<!--=== End Cube-Portfdlio ===-->

<?php
include 'modalcontent.php';  // modal forms.
?>