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
        <section class="about py-lg-5 py-md-5 py-3" style="padding-top: 0!important;">
            <div class="container">                 
                <div class="inner-sec-wthree py-lg-5 py-3">
                    <h3 class="tittle" style="margin-bottom: 1em;"><span class="sub-tittle-w3">Our</span>Photo Gallery</h3>
                    <div class="row">                        
                        <div class="col-lg-12 about-right px-lg-5 px-2 mt-lg-2 mt-2">                            
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                                    <?php foreach ($gallery_category as $item) { ?> 
                                    <a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>">
                                        <div class="portfolio"> 
                                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                                            <h3 align="center"><?php echo $item->CATEGORY; ?></h3>
                                            <?php if ($item->DESC != '') { ?>
                                                <p style="text-align: center"><?php echo $item->DESC; ?></p>
                                            <?php } ?>
                                        </div>                                                      
                                    </a>
                                    <?php } ?>                            
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>            
        </section>      