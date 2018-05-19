
            <!-- ####### Panel ####### -->
            <div class="col-md-6">
               
                <!-- Panel menu -->
                <ul class="nav text-uppercase et-categories-menu">
                       
                    <li class="nav-item">
                        <a class="nav-link et-menu-active" href="#">
                        <?php 
                        if( $_GET["type"] == "video" )
                        {
                            echo et_add_new_text("video");
                        }
                        else if( $_GET["type"] == "news" )
                        {
                            echo et_add_new_text("news");
                        }
                        else if( $_GET["type"] == "mem" )
                        {
                            echo et_add_new_text("mem");
                        }
                        ?>
                        </a>       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BACK_PAGE_HISTORY."&type=".$_GET["type"]; ?>">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wyloguj się</a>
                    </li> 

                </ul>
                

                <!-- Accepted memes -->   
                <a class="et-history-memes et-history-memes-active" href="?page_id=<?php echo $_GET['page_id']; ?>&type=<?php echo $_GET['type']; ?>&history=publish">Memy zaakceptowane</a>
                
                <!-- Rejected memes -->   
                <a class="et-history-memes" href="?page_id=<?php echo $_GET['page_id']; ?>&type=<?php echo $_GET['type']; ?>&history=nopublish">Memy odrzucone</a>
                
                    
                    
                <?php 
                         if( $_GET["history"] == "nopublish")
                         {
                            et_panel_last_posts( $_GET["type"], 50, 'draft' );
                         }else{
                            et_panel_last_posts( $_GET["type"], 50 );
                         }
                          
                       
                 ?>
                    
                    
                   
                 
            </div>
            <!-- ####### End of Panel ####### -->
                
            
               
           