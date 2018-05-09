 <!-- ####### Left sidebar ####### -->
 <div class="col-md-3">
                               
                               <!-- Facebook -->                       
                               <div class="card mb-4 et-card-ad">
                                   <img class="card-img" src="img/fb.png" alt="">
                               </div>
                                  
                               <!-- Square ad -->                       
                               <div class="card mb-4 et-card-ad">
                                   <img class="card-img" src="img/300x250.png" alt="">
                               </div>
                               
                               <!-- Sidebar latest videos header -->
                               <h2 class="text-uppercase et-sidebar-title"><?php echo et_section_title("video"); ?></h2>
                               
               
                               <?php 
                                   et_panel_last_posts( "video", 5 );
                               ?>
                                  
                               <!-- Horizontal ad -->                       
                               <div class="card mb-4 et-card-ad">
                                   <img class="card-img" src="img/300x600.png" alt="">
                               </div>
                                   
                           </div>
                           <!-- ####### End of Left sidebar ####### -->