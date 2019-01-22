<nav class="main-header d-flex">
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
                            <a href="#" class="<?php if($menu==3){echo 'active';}?>">Academics</a>
                        </li>
                        
                        <li>
                            <a href="#" class="<?php if($menu==4){echo 'active';}?>">Administration</a>
                        </li>
                        <li>
                            <a href="#" class="<?php if($menu==5){echo 'active';}?>">Finance</a>
                        </li>
                        
                        <li>
                            <a href="#" class="<?php if($menu==6){echo 'active';}?>">Miscellaneous</a>
                        </li>
                        <li>
                            <a href="#" class="<?php if($menu==7){echo 'active';}?>">Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'/web/contact';?>" class="<?php if($menu==8){echo 'active';}?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </nav>