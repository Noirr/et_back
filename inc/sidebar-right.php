<!-- ####### Right sidebar ####### -->
<div class="col-md-3">
                                               
                                               <!-- Horizontal ad -->                       
                                               <div class="card mb-4 et-card-ad">
                                                   <img class="card-img" src="img/300x600.png" alt="">
                                               </div>
                                                                             
                                               <!-- Sidebar latest news header -->
                                               <h2 class="text-uppercase et-sidebar-title">
                                               <?php 
                                                if( $_GET["type"] == "video" )
                                                {
                                                    echo et_section_title("mem");
                                                }
                                                else if( $_GET["type"] == "news" )
                                                {
                                                    echo et_section_title("video");
                                                }
                                                else if( $_GET["type"] == "mem" )
                                                {
                                                    echo et_section_title("news");
                                                }
                                                ?>
                                               </h2>
                                                                              
                               
                                               <?php 
                                               if( $_GET["type"] == "video" )
                                               {
                                                et_panel_last_posts( "mem", 5 );
                                               }
                                               else if( $_GET["type"] == "news" )
                                               {
                                                et_panel_last_posts( "video", 5 );
                                               }
                                               else if( $_GET["type"] == "mem" )
                                               {
                                                et_panel_last_posts( "news", 5 );
                                               }
                                               ?>
                                                  
                                               <!-- Square ad -->                       
                                               <div class="card mb-4 et-card-ad">
                                                   <img class="card-img" src="img/300x250.png" alt="">
                                               </div>               
                                                                               
                                           </div>
                                           <!-- ####### End of Right sidebar ####### -->