<ul>		                                
	<?php foreach ($news as $item) { ?>
		                                    <li>		                                      
		                                         <p class="card-text"><?php echo $item->NEWS; ?></p>
	                             					<h7 class="card-title"><span class="fa fa-calendar" aria-hidden="true"></span> Posted: <?php echo $item->DATE_;?> By: Admin</h7>		                                        		                                        
		                                    </li>	
		                                <?php } ?>                              
		                                </ul>