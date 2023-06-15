<?php include('header_blog.php');?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <!--/stories-->
                        <div class="row">
                            <br>
                            <?php
              $query = $conn->query("select * from post LEFT JOIN members on members.member_id = post.member_id order by post_id DESC");
              while($row = $query->fetch()){
              $posted_by = $row['firstname']." ".$row['lastname'];
              $posted_image = $row['image'];
              $id = $row['post_id'];
              ?>
                            <div class="col-md-2 col-sm-3 text-center">
                                <img src="<?php echo $posted_image; ?>" style="width:100px;height:100px"
                                    class="img-circle"></a>
                            </div>
                            <div class="col-md-10 col-sm-9">
                                <div class="alert"><?php echo $row['content']; ?></div>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span>
                                        </h4>
                                        <h4>
                                            <small style="font-family:courier,'new courier';"
                                                class="text-muted">Publicado por: <a href="#"
                                                    class="text-muted"><?php echo $posted_by; ?></a></small>
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>"><i></i></a>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            <?php } ?>
                        </div>
                        <hr>
                    </div>
                </div>



            </div>
            <!--/col-12-->
        </div>
    </div>
</body>