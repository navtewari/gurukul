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
                    <div class="row">
                        <div class="col-lg-5 about-right px-lg-5 px-2 mt-lg-2 mt-2">
                            <h3 class="tittle"><span class="sub-tittle-w3">Our</span>Address</h3>                             
                            <address class="address" style="">
                                <br>
                                <p>Gurukul Academy, Rudrapur-Gularbhoj road, Uttarakhand, India</p>
                                <p>School Office : 9837007096 </p>                            
                                <p>Principal : 9837011070</p>
                                <p>Academic In-charge : 7351487555</p>
                                <p>Email: <span><a href="mailto:gurukulprincipal1@gmail.com">gurukulprincipal1@gmail.com</a></span></p>
                            </address>
                        </div> 

                        <div class="col-lg-7 about-right px-lg-5 px-2 mt-lg-2 mt-2">
                            <h3 class="tittle" style="margin-bottom: 1em;"><span class="sub-tittle-w3">Contact Us</span></h3>                             
                            <form action="<?php echo site_url(). '/web/contactus';?>" method="post" class="form-horizontal">
                                <?php if ($this->session->flashdata('_msg_')) { ?>
                                    <div class="row">
                                        <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                            <?php echo $this->session->flashdata('_msg_'); ?>
                                        </div>
                                        <div class="col-sm-12">
                                            &nbsp;
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group col-sm-12">                                    
                                    <div class="col-sm-12">
                                        <input type="text" name="txtname" placeholder="YOUR NAME" required="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">                                    
                                    <div class="col-sm-12">
                                        <input type="email" name="txtemail" placeholder="YOUR EMAIL" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">                                    
                                    <div class="col-sm-12">
                                        <input type="number" pattern="[0-9]*" oninvalid="setCustomValidity('Plz enter 10 digit Contact Number');"  name="txtPhone" required="required" placeholder="PHONE NUMBER" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">                                    
                                    <div class="col-sm-12">
                                        <textarea name="txtmessage" placeholder="YOUR MESSAGE" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">                                    
                                    <div class="col-sm-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>            
        </section>   