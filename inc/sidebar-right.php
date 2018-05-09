<!-- ####### Right sidebar ####### -->
<div class="col-md-3">
                                               
                                               <!-- Horizontal ad -->                       
                                               <div class="card mb-4 et-card-ad">
                                                   <img class="card-img" src="img/300x600.png" alt="">
                                               </div>
                                                                             
                                               <!-- Sidebar latest news header -->
                                               <h2 class="text-uppercase et-sidebar-title"><?php echo et_section_title("news"); ?></h2>
                                                                              
                               
                                               <?php 
                                                   et_panel_last_posts( "news", 5 );
                                               ?>
                                                  
                                               <!-- Square ad -->                       
                                               <div class="card mb-4 et-card-ad">
                                                   <img class="card-img" src="img/300x250.png" alt="">
                                               </div>               
                                                                               
                                           </div>
                                           <!-- ####### End of Right sidebar ####### -->