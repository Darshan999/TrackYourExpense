<?php
    session_start();
    $user_email_id=$_SESSION["user_email_id"];
?>

<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Track<span class="lite">Your</span>Expenses</a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
               
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending Request</p>
                            </li>
                            <li>
                                <a href="notesapprove.php">
                                    <div class="task-info">
                                        <div class="desc">Notes 
                                        
                                        </div>
                                      
                                    </div>
                                 </a>
                                 
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                   
                                        <div class="desc">
                                          Questions
                                         
                                        </div>
                                        </div>
                                    
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <!-- Approve Products -->
                    
                    <?php
                     
                     require 'database.php';
                     /*$obj=new database();
                     $res=$obj->approveproducts();
                     $res1=$obj->productbylimit();
                     $cnt=mysql_num_rows($res1);*/

                    echo '
                
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">10</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 10 new messages</p>
                            </li>';
                            /*while($row=mysql_fetch_assoc($res1))
                            {

                            $sortcontent=substr($row["product_name"],0,20)."...";*/

                            echo'

                            
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="image/p1.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Darshan</span>
                                        <span class="time"></span>
                                        <span class="message"></span>
                                        </span>
                                        
                                    </a>
                                </li>';
                            //}
                            echo '
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>';
                    ?>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <!-- Approve Users -->
                    <?php

                   
                    /*$obj=new database();
                    $res=$obj->approveusers();
                    $cnt=mysql_num_rows($res);*/
                     
                    echo '
                        <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">10</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 10 new notifications</p>
                            </li>';
                            
                    
                    /*while($row=mysql_fetch_assoc($res))
                    {
                        
                       // $time=date("i");
                        $user_first_name=$row["user_first_name"];*/
                        echo '
                            <li>
                                <a href="#">
                                    <img src="image/p2.jpg" height="40px" width="40px">&nbsp;
                                    <span class="label label-primary"></span> 
                                    Darshan
                                  
                                </a>
                            </li>';
                     
                     
                    //}
                    echo '
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>';
                    ?>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                    <?php
                       $obj=new database();
                       $res=$obj->userdisplaybyid($user_email_id);
                       while($row=mysql_fetch_assoc($res))
                       {
                            $user_name=$row["user_name"];
                            $user_photo="image/".$row["user_photo"];
                       }
                    echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="'.$user_photo.'" height="40px" width="40px">
                            </span>
                            <span class="username">'.$user_name.'</span>
                            <b class="caret"></b>
                        </a>';
                    ?>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="editprofile.php"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="changepassword.php"><i class="icon_key_alt"></i> Change Password</a>
                                
                            </li>
                            <li>
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
                            </li>
                           </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      