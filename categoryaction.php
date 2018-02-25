<?php

                            	require 'database.php';
                            	$category_id=$_REQUEST["category_id"];
                                $obj=new database();
                                $res=$obj->categorydelete($category_id);
                                 echo '<script langauge="javascript">;
                                    alert("Category deleted sucessfully");
                                    window.location.href="category.php";
                                    </script>';

                            ?>