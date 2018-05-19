
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
                
                
                    
                    
                <?php 
                        if( $_GET["type"] == "video" )
                        {
                            
                            acf_register_form(array(
                                'id'		=> 'new-item',
                                'post_id'	=> 'new_post',
                                'new_post'	=> array(
                                    'post_type'		=> 'video',
                                    'post_status'	=> 'draft'
                                ),
                                'post_title'=> true,
                                'uploader' => 'wp',
                            ));
        
                        }
                        else if( $_GET["type"] == "news" )
                        {
                            acf_register_form(array(
                                'id'		=> 'new-item',
                                'post_id'	=> 'new_post',
                                'new_post'	=> array(
                                    'post_type'		=> 'news',
                                    'post_status'	=> 'draft'
                                ),
                                'post_title'=> true,
                                'post_content'=> true,
                                'uploader' => 'wp',
                            ));
                        }
                        else if( $_GET["type"] == "mem" )
                        {
                            acf_register_form(array(
                                'id'		=> 'new-item',
                                'post_id'	=> 'new_post',
                                'new_post'	=> array(
                                    'post_type'		=> 'mem',
                                    'post_status'	=> 'draft'
                                ),
                                'post_title'=> true,
                                'uploader' => 'wp',
                            ));
                        }
                        acf_form('new-item'); 
                 ?>
                    
                    
                    
                    
                    
                    
                   <!-- 
                       <!-/- Add mem form -/->   
                <form class="form et-add-mem-form" >
                <div class="form-group">
                        <label for="title">Tytuł</label>
                        <input type="text" class="form-control" placeholder="Wpisz tytuł mema" id="title" name="title" aria-label="Title">
                    </div>
                    <div class="form-group">
                        <label for="file">Dodaj plik</label>
                        <input type="file" class="form-control-file et-file" id="file" name="file" aria-label="File">
                    </div>
                    <button class="btn text-uppercase" name="form_new" value="memy" type="submit">Wyślij</button>
                    </form>
                    -->
                
                 
            </div>
            <!-- ####### End of Panel ####### -->
                
            
               
           