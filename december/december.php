



<?php

$NSW_MONTH = "december";
$NSW_YEAR = "2015";

$numberofarticles = 16;

//NO SPACES IN TOPIC NAME
$topic1 = "PEOPLE";
$topic2 = "Initiatives";
$topic3 = "SERVICE";
$topic4 = "Social";

$topic5 = "other";
$topic6 = "default";


$art1title = "Jeremy's Editorial";
$art1desc = "A few words from Jeremy";
$art1topics = 'topic1';

$art2title = "#Operations Newsletter Team Forward";
$art2desc = "issue 1 of the digital newsletter goes live<br>But we need your help";
$art2topics = 'topic2 topic1';

$art3title = "Morpheus Update";
$art3desc = "";
$art3topics = 'topic3';

$art4title = "5 Minutes with Eren Kemal";
$art4desc = "We catch up with Eren Kemal";
$art4topics = 'topic1 topic1';

$art5title = "Topline KES Scores";
$art5desc = "";
$art5topics = 'topic2';

$art6title = "ONE EVENT GALLERY";
$art6desc = "Photos from the 1 Event";
$art6topics = 'topic4 ';

$art7title = "Dates";
$art7desc = "Dates for your Diary";
$art7topics = 'topic4';

$art8title = "Lifestyle Focus ";
$art8desc = "";
$art8topics = 'topic2';

$art9title = "QOS feedback";
$art9desc = "";
$art9topics = 'topic4';

$art10title = "The Great Kantar Bake Off";
$art10desc = "";
$art10topics = 'topic4';



$art11title = "Diwali 2015";
$art11desc = "";
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
                                            // If artcile 6 or 12 add a link instead of article
                                            if ($i==6 | $i== 12){ 

                                                if ($i==6){


                                                                
                                                 // echo '<button id="image-gallery-button" class="btn btn-primary btn-lg"><i class="rounded-x fa fa-picture-o"></i></button>';
                                                echo '<li><a href="" data-toggle="modal" data-target="#article'.$i.'"><i class="rounded-x fa fa-search"></i></a></li>';     
                                                echo '<li><a id="image-gallery-button" href="" target="_blank"><i class="rounded-x fa fa-picture-o"></i></a></li>';

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



<!-- BOOTSTRAP GALLERy CONTENT PLUGIN -->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END GALLERY PLUGIN -->

<!-- Gallery Items -->
<div id="links">

<?Php

for ($i=1; $i<29; $i++) {
   echo '<a href="december/images/one/'.$i.'.jpg" title="'.$i.'" data-gallery></a>';
}

?>
<!--     <a href="december/images/article8.jpg" title="article8" data-gallery></a>
     <a href="december/images/article9.jpg" title="article7" data-gallery></a>
      <a href="december/images/articl7.jpg" title="article9" data-gallery></a> -->

</div>
<!-- END Gallery Items -->


<!--             <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-picture"></i>
                Launch Image Gallery
             </button> -->


<?php
include 'modalcontent.php';  // modal forms.
?>