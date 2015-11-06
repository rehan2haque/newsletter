

<?php

$NSW_MONTH = "november";
$NSW_YEAR = "2015";

$numberofarticles = 9;

//NO SPACES IN TOPIC NAME
$topic1 = "Interview";
$topic2 = "HR";
$topic3 = "Production";
$topic4 = "Social";
$topic5 = "other";
$topic6 = "default";


$art1title = "Basic text 1 Col";
$art1desc = "example of some basic text layout";
$art1topics = 'topic4 topic3';

$art2title = "2 Col - Single Image";
$art2desc = "2 Column with a Single Image";
$art2topics = 'topic2 topic3';

$art3title = "Haptic Quotes 2 Col";
$art3desc = "article with quotes in haptics";
$art3topics = 'topic2 topic3';

$art4title = "5 Minutes with - 2 Col";
$art4desc = "Interview article, 2 col single image";
$art4topics = '';

$art5title = "5 Minutes with - 2 Col alternative";
$art5desc = "Interview article, alternative layout 2 col";
$art5topics = '';

$art6title = "5 Minutes with 1 col blue";
$art6desc = "1 col alternative with images mid article";
$art6topics = '';

$art7title = "default7";
$art7desc = "default description of article here";
$art7topics = '';

$art8title = "default8";
$art8desc = "default description of article here";
$art8topics = '';

$art9title = "default9";
$art9desc = "default description of article here";
$art9topics = '';

$art10title = "default10";
$art10desc = "default description of article here";
$art10topics = '';

$art11title = "default11";
$art11desc = "default description of article here";
$art11topics = '';

$art12title = "default12";
$art12desc = "default description of article here";
$art12topics = '';

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
                                            <?php echo '<li><a href="" data-toggle="modal" data-target="#article'.$i.'"><i class="rounded-x fa fa-search"></i></a></li>'; ?>
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