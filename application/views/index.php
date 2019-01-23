<style>
	.vticker li{
		border-bottom: 1px #000 dotted; 
		padding-bottom: 1em;
	}
</style>
    <body>
        <!-- mian-content -->
        <header class="index-banner" id="home">
            <!-- nav -->
            <?php $this->load->view('templates/menu');?>
            <!-- //nav -->

            <!--/banner-->
            <?php $this->load->view('templates/bannerMain');?>
            <!--// banner-inner -->
        </header>
        <!-- //header -->

        <!--// banner-slider -->
        <!--/ab -->
        <section class="about py-lg-5 py-md-5 py-3" style="padding-top: 0!important;">
            <div class="container">
                <div class="inner-sec-wthree py-lg-5 py-3">
                    <div class="row">
                        <div class="col-lg-7 about-right px-lg-5 px-2 mt-lg-5 mt-2">
                            <h3 class="tittle"><span class="sub-tittle-w3">WELCOME TO</span>Gurukul Academy</h3>
                            <p class="my-4 text-justify">The school is located in the quiet & serene area of over 2 acres in village Gular Bhoj, U.S Nagar (Uttarakhand). Far from the din & dust of ever growing noisy environment of the nearby towns, the school campus is surrounded by lush green fields & nature. The campus is over a 7 kilo meter to the west of the High Way connecting to Gadarpur.
                            </p>
                            <p class="my-4 text-justify">The noble mission of the school is to educate the children of the surrounding area into becoming mature & balanced persons. Ethical values, respect for the views of OTHERs & patriotism are some of the core issues which we try to inculcate in our students. </p>
                            <a href="<?php echo site_url(). '/web/about';?>" class="read my-3 btn"><span class="fa fa-long-arrow-alt-right"></span> Read More</a>                            
                        </div>
                        <div class="col-lg-5 about-right px-lg-5 px-2 mt-lg-5 mt-2">
                            <h3 class="tittle"><span class="sub-tittle-w3">Recent</span>News</h3>
                            <div class="card-body">                                    	                           
	                             <div style="margin-top:1em;">
		                            <div class="vticker">
		                                <ul>		                                
		                                    <li>		                                      
		                                         <p class="card-text">Gurukul Academy came into existence in the year 2015</p>
	                             					<h7 class="card-title"><span class="fa fa-calendar" aria-hidden="true"></span> Posted: 21/01/2019 By: Admin</h7>		                                        		                                        
		                                    </li>	
		                                    <li>		                                      
		                                         <p class="card-text">Its genesis lies in the joint vision of Sri Jai Kishan Arora & Sri Keval Arora & Mr Grish Prasad Hota & Mr. Satendra Singh.</p>
	                             					<h7 class="card-title"><span class="fa fa-calendar" aria-hidden="true"></span> Posted: 21/01/2019 By: Admin</h7>		                                        		                                        
		                                    </li>		                                
		                                </ul>    
		                            </div>
		                            <div style="float:right;">
		                                <button class="btn btn-danger up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
		                                <button class="btn btn-danger down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
		                                <button class="btn btn-primary toggle"></button>
		                            </div>  
		                        </div>
	                        </div>                           
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <!-- //ab -->
        
        
        <!-- services -->
        <!--/ab -->
        <section class="services-top  bg-dark py-lg-5 py-md-5">
            <div class="container">
                <div class="inner-sec-wthree">                    
                    <div class="card-deck mt-5">
                        <div class="card">
                            <div class="card-body p-lg-5">                                
                                <h3 class="tittle"><span class="sub-tittle-w3">Our</span>Vision</h3>
                                <p class="card-text">The promoters of the Gurukul Academy had a vision of providing the best education in the area. A vision is very short listed if not converted to purposeful reality. So was born Gurukul Academy which looks beyond our stereo type education system in order to bring out the best in India to meet the International standards.</p>
                            </div>                            
                        </div>
                        <div class="card">                            
                            <div class="card-body p-lg-5">
                                <h3 class="tittle"><span class="sub-tittle-w3">Our</span>Mission</h3>
                                <p class="card-text">Our Mission is to make a school, a place from where young students are able to go out to meet the challenges of a fast changing world, with a confidence based on secure foundation of intellectual ability, expertise in useful skills and a set of traditional values, Dignity of labour, Craftsmanship and Personal fulfillment is given scope to flourish alongside the common core of school subject and activities</p>
                            </div>                            
                        </div> 
                        <div class="card">
                            <div class="card-body p-lg-5" style="background:url(<?php echo base_url(). 'assets/images/girls.jpg';?>)">
                                
                            </div>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletters bg-dark py-5">
            <div class="container">
                <div class="inner-sec-wthree">                    
                    <div class="card-deck mt-5">                        
                        <div class="card">                            
                            <div class="card-body p-lg-5">
                                <h3 class="tittle"><span class="sub-tittle-w3">DIRECTOR'S </span>MESSAGE</h3>
                                <p class="card-text">Dear Parents,<br/>
                                    I belong to a Hindi speaking family. While raising my two children and educating them in an English medium school, I could realize the problem being faced by them. This holds true for most of the families in the near vicinity around us ...</p>
                            </div>  
                            <div class="card-footer">
                                <small class="text-muted"><a href="<?php echo site_url(). '/web/message';?>"><i class="fa fa-arrow-right"></i> Read More</a></small>
                            </div>                           
                        </div> 
                        <div class="card">                            
                            <div class="card-body p-lg-5">
                                <h3 class="tittle"><span class="sub-tittle-w3">PRINCIPAL'S  </span>MESSAGE</h3>
                                <p class="card-text">Dear Parents,<br/>
                                    Gurukul School is an upcoming institution affiliated to CBSE, New Delhi. The school aims at grooming its children into becoming ideal human beings with equal respect for Indian culture & modern ways of life ...</p>
                            </div>  
                            <div class="card-footer">
                                <small class="text-muted"><a href="<?php echo site_url(). '/web/message';?>"><i class="fa fa-arrow-right"></i> Read More</a></small>
                            </div>                          
                        </div>                        
                    </div>
                </div>
            </div>
        </section>        
        
       