<script type="text/javascript">
    function show_more(obj, id_){
        obj1 = obj + "_";
        document.getElementById(obj).style.display = "none";
        document.getElementById(obj1).style.display = "block";
    }
    function show_less(obj, id_){
        obj1 = obj + "_";
        document.getElementById(obj).style.display = "block";
        document.getElementById(obj1).style.display = "none";
    }
</script>
<div class="content-wrapper">
    <div class="inner-content">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <article class="blog-post-wrapper single-article">
                    <header class="entry-header">       
                        <?php //$this->load->view('templates/ticker-news');?>
                    </header><!-- /.entry-header -->                                                

                    <div class="entry-content">
                        <!-- Activity Panels -->
                                <div class="panel-group inner-sec-wthree py-lg-5 py-3" id="accordion">
                                    <h3 class="tittle"><span class="sub-tittle-w3">ACTIVITIES IN</span>Gurukul Academy</h3>
                                    <?php $loop1 = 1; ?>
                                    <?php foreach ($activity_ as $item) { ?>
                                        <div class="col-md-4  about-right px-lg-5 px-2 mt-lg-2 mt-2" style="margin: 1px; float: left; padding: 3px 3px; border: #ff00ff solid 0px">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $item->ID; ?>"> 
                                                                <?php $stringCut = substr($item->TITLE_, 0, 28);?>
                                                                <?php echo $stringCut; ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse<?php echo $item->ID; ?>" class="panel-collapse collapse in">
                                                        <div class="panel-body" style="font-family: Arial; text-align: justify">
                                                            <div style="overflow: hidden; width: 100%; min-height: 150px; max-height: 150px">
                                                                <a href="<?php echo ADMIN___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH;?>" target="_blank">
                                                                    <img src="<?php echo ADMIN___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH ;?>" border="0" align="left" width="100%" />
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-12"></div>
                                                            <div style="overflow: hidden; min-height: 150px; width: 100%; display: block" id="show_<?php echo $loop1; ?>">
                                                                <?php $stringCut = substr($item->BRIEF_, 0, 130);?>
                                                                <?php echo $stringCut . "...<button style='font-size: 11px; color:#ff0000' class='btn btn-link' onclick=show_more('show_".$loop1."','".$item->ID."');>show more</button>";?>
                                                                <br />
                                                                <span style="font-size: 11px; color: #009000">Date of Activity: <?php echo $item->DATE_OF_ACTIVITY;?></span>
                                                                <br />
                                                                <?php if($item->DET_PATH != 'x'){ ?>
                                                                <a style="font-size: 10px; color: #0000ff" href="<?php echo ADMIN___ . '/_assets_/activities/'.$item->DET_PATH;?>" target="_blank">[ click for detail ]</a>
                                                                <?php } ?>
                                                            </div>
                                                            <div style="min-height: 200px; width: 100%; display: none" id="show_<?php echo $loop1."_"; ?>">
                                                            <?php $stringCut = substr($item->BRIEF_, 0, 200);?>
                                                                <?php echo $item->BRIEF_ . "<button style='font-size: 11px; color:#900000' class='btn btn-link' onclick=show_less('show_".$loop1."','".$item->ID."');>show less</button>"; ?>
                                                                <br />
                                                                <span style="font-size: 11px; color: #009000">Date of Activity: <?php echo $item->DATE_OF_ACTIVITY;?></span>
                                                                <br />
                                                                <?php if($item->DET_PATH != 'x'){ ?>
                                                                <a style="font-size: 10px; color: #0000ff" href="<?php echo ADMIN___ . '/_assets_/activities/'.$item->DET_PATH;?>" target="_blank">[ click for detail ]</a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $loop1 += 1; ?>
                                    <?php } ?>
                                </div>
                                <div class="clearfix"> &nbsp;</div>
                        <!-- End of Activity Panels -->

                    </div><!-- /.entry-content -->
                </article>                                            
            </div><!-- /.col-md-9 -->

            <!--div class="col-xs-12 col-md-3 col-sm-4" align="center">
                <?php //$this->load->view('templates/quick-links');?>                                            
                <?php //$this->load->view('templates/alumni-img-scroll');?>
            </div--><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.inner-content -->
</div><!-- /.content-wrapper -->