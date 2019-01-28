    <body>
        <!-- mian-content -->
        <header class="index-banner" id="home">
            <!-- nav -->
            <?php $this->load->view('templates/menu');?>
            <!-- //nav -->

            <!--/banner-->
            <?php $this->load->view('templates/bannerInner');?>
            <!--// banner-inner -->
        </header>
        <link rel="stylesheet" href="<?PHP echo base_url() . 'assets/css/lightbox.css'; ?>"> 
        <section class="about py-lg-5 py-md-5 py-3" style="padding-top: 0!important;">
            <div class="container">                 
                <div class="inner-sec-wthree py-lg-5 py-3">
                     <?php foreach ($gallery as $item) { ?>
                        <h3 class="hist"><?php echo $item->CATEGORY; ?>-Gallery</h3>
                        <div style="float: right; margin-bottom: 2em;"><a href="<?php echo site_url('web/gallery') ?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Gallery</a></div>
                        <div style="clear:both;"></div>
                        <?php
                        break;
                    }
                    ?>    
                    <div class="row">                        
                        <div class="col-lg-12 about-right px-lg-5 px-2 mt-lg-2 mt-2">                            
                            
                                    <?php foreach ($gallery as $item) { ?> 
                                         <div class="col-lg-4" style="float:left; position: relative;margin-bottom: 2em;">
                                         <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>"  data-lightbox="example-set">
                                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt="" style="max-width:100%; max-height: 170px; margin:auto;display:block;" class="img-thumbnail">
                                        </a>   
                                           
                                        </div>
                                    <?php } ?>                              
                               
                        </div>                        
                    </div>
                    <script src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
                </div>
            </div>            
        </section>          