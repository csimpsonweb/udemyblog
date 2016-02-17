                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input class="form-control" type="text" name="cat_title" >
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category" >
                                </div>
                            </form>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Edit Category</label>

                                    <?php

                                    if(isset($_GET["edit"])){

                                        $cat_id = $_GET['edit'];

                                        $query  = "SELECT * FROM categories WHERE cat_id = $cat_id ";
                                        $select_categories_id = mysqli_query($connection,$query);

                                            while($row = mysqli_fetch_assoc($select_categories_id)) {
                                                $cat_id = $row['cat_id'];
                                                $cat_title = $row['cat_title'];

                                     ?>
                                                
                                     <input value="<?php echo $cat_title; ?>" type="text" class="form-control" name="update_category">

                                     <?php

                                            }
                                    }

                                    ?>

                                    <?php 

                                        if(isset($_POST['update_category'])){
                                            $the_cat_title = $_GET['cat_title'];
                                            $query = "UPDATE categories SET cat_title = '{$the_cat_id}' WHERE cat_id = {$cat_id}";
                                            $update_query = mysqli_query($connection,$query);
                                            
                                            if(!$update_query){
                                                die("Query Failed" . mysqli_error($connection));
                                            }
                                        }

                                    ?>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Edit Category" >
                                </div>
                            </form>