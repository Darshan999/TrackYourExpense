<?php

                            	require 'database.php';
                            	$expense_id=$_REQUEST["expense_id"];
                                $obj=new database();
                                $res=$obj->expensedelete($expense_id);
                                 echo '<script langauge="javascript">;
                                    alert("Category deleted sucessfully");
                                    window.location.href="expense.php";
                                    </script>';

                            ?>