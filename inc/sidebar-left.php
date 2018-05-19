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
                               <h2 class="text-uppercase et-sidebar-title">
                               <?php 
                               if( $_GET["type"] == "video" )
                               {
                                echo et_section_title("news");
                               }
                               else if( $_GET["type"] == "news" )
                               {
                                echo et_section_title("mem");
                               }
                               else if( $_GET["type"] == "mem" )
                               {
                                echo et_section_title("video");
                               }
                               ?>
                               </h2>
                               
               
                               <?php 
                               if( $_GET["type"] == "video" )
                               {
                                et_panel_last_posts( "news", 5 );
                               }
                               else if( $_GET["type"] == "news" )
                               {
                                et_panel_last_posts( "mem", 5 );
                               }
                               else if( $_GET["type"] == "mem" )
                               {
                                et_panel_last_posts( "video", 5 );
                               }
                            

                               ?>
                                  
                               <!-- Horizontal ad -->                       
                               <div class="card mb-4 et-card-ad">
                                   <img class="card-img" src="img/300x600.png" alt="">
                               </div>
                                   
                           </div>
                           <!-- ####### End of Left sidebar ####### -->