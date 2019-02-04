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
                <?php $this->load->view('activities/act'); ?>             
            </div>            
        </section>          