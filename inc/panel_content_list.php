
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nazwa</th>
                                            <th>Data dodania</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            if( !empty( $_GET["type"] ) )
                                            {
                                                $posts = et_get_last_posts( $_GET["type"], -1 );
                                                foreach( $posts as $post )
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><a class="panel-a" href="'.$panel_link.'&panel=edit&post_id='.$post->ID.'&type='.$_GET['type'].'">'.$post->ID.'</a></td>
                                                        <td><a class="panel-a" href="'.$panel_link.'&panel=edit&post_id='.$post->ID.'&type='.$_GET['type'].'">'.$post->post_title.'</a></td>
                                                        <td>'.$post->post_date.'</td>
                                                        <td>'.$post->post_status.'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>