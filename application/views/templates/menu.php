<nav class="main-header d-flex" style="z-index:99999999">
                <div id="brand">
                    <div id="word-mark">
                        <h1>
                            <a href="#"><img src="<?php echo base_url().'assets/images/logo.png';?>"></a>
                        </h1>
                    </div>
                </div>
                <div id="menu">
                    <div id="menu-toggle">
                        <div id="menu-icon">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <ul class="text-left nav-honey">
                        <li>
                            <a href="<?php echo site_url().'/web';?>" class="<?php if($menu==1){echo 'active';}?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'/web/about';?>" class="<?php if($menu==2){echo 'active';}?>">About Us</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url().'/web/academics';?>" class="<?php if($menu==3){echo 'active';}?>">Academics</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url(). '/web/administration';?>" class="<?php if($menu==4){echo 'active';}?>">Administration</a>
                        </li>
                        <li>
                            <a href="#" class="<?php if($menu==5){echo 'active';}?>">Finance</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url(). '/web/miscellaneous'?>" class="<?php if($menu==6){echo 'active';}?>">Miscellaneous</a>
                        </li>                        
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>

                            <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url(). '/web/gallery';?>" class="<?php if($menu==7){echo 'active';}?>">Photo Gallery</a>                                
                                <a class="dropdown-item" href="<?php echo site_url(). '/web/activities';?>">Activities</a>                       
                            </div>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url().'/web/contact';?>" class="<?php if($menu==8){echo 'active';}?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </nav>