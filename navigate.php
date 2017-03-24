<a href="#" id="brand">SMS</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
				<i class="fa fa-bars"></i>
			</a>
			<ul class='main-nav'>
				<li>
					<!--<a href="index.php">
						<span>Dashboard</span>
					</a>-->
				</li>
			</ul>          
            
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
                    
                    
						<!--<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="label label-lightred">5</span>
						</a>-->
						<ul class="dropdown-menu pull-right message-ul">
                        
                        
                       
					
                     
							<li>
								<a href="#">
									<img src="img/info.png" alt="">
									<div class="details">
										<div class="name"><?php echo $_SESSION['sess_fullnames'];?> | <?php echo $_SESSION['sess_role'];?></div>
										<div class="message">
											
										</div>
									</div>
								</a>
							</li>
							
							
							
                    
					
                      </ul>  
                       
					</li>

				</ul>
                
            
                    		
            
               

	

                
                
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $_SESSION['sess_fullnames'];?> | <?php echo $_SESSION['sess_role'];?>
						
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="logout.php">Sign out</a>
						</li>
					</ul>
				</div>
           <!--  end while-->
			</div>