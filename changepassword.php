
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Change Password</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/EduFocus.css">

   <link href="pagination/demo/Content/bootstrap.min.css" rel="stylesheet">
    <link href="pagination/demo/css/jquery.dataTables_themeroller.css" rel="stylesheet">


     <script type="text/javascript">
    function del()
    {
      return confirm("Are you sure you wanna delete this post?");
    }
    </script>

   
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body class="backcolor">
  <!-- container section start -->
  <section id="container" class="">
     
      
      
      <!--header end -->
      <?php

        include'./header.php';
      ?>

      <!--sidebar start-->
      <?php
        include'./sidebar.php';
      ?>
      <section id="main-content">
          <section class="wrapper">

  <div class="container-fluid">
    <div class="row">

   
   <div class="col-md-7 col-md-offset-2">
     <center><h1 class="text">Change Password</h1></center>
     <?php 
                   // include 'database.php';
                    $obj=new database();
                    $res=$obj->userdisplaybyid($_SESSION["user_email_id"]);
                    while($row=mysql_fetch_assoc($res))
                    {
                        $user_photo="image/".$row["user_photo"];
                        $pass=$row["user_password"];
                        
                    }
        ?>
        

       <?php
if(isset($_POST["editpass"]))
{
    $user_email_id=$_SESSION["user_email_id"];
    $pass1=$_POST["oldpass"];
    $pass2=$_POST["newpass"];
    $pass3=$_POST["renewpass"];
    
       if($pass==$pass1)
        {
              if($pass2==$pass3)
              {
                   $obj3=new database();
                   $res3=$obj3->updatepassword($user_email_id,$pass2);
                   if($res3==1)
                   {
                    header("location:main.php");
                   }
                   
              }

             else
             {
  
                  echo '<script type="text/javascript">';
                  echo "alert('please Re type new password');";
                  echo "</script>";

  
            }
       }
         
       else
      {
//  echo "old password is wrong";
        echo '<script type="text/javascript">';
        echo "alert('Old password is wrong');";
       echo "</script>";

      }
            
    
    
}
?>

      <div class="entry-widget" style="width: 900px;">
                            <div class="widget-profile">
    
     
                <div class="image" ></div>
                                <div class="portfolio text-center col-md-offset-1 col-sm-offset-3" style="margin-top: -36px;">

                                 <a href="" type="file"><img alt="" height="150px" width="150px" src="<?php echo $user_photo; ?>"></a>
                                 </div>
    
                          <div class="info">
                        
                               <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                                     
                                     <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Old Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="oldpass" type="password" placeholder="enter old password" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">New Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " placeholder="enter new password" id="username" name="newpass" type="password" />
                                          </div>
                                      </div>
                                   
                                    <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Reenter New Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" placeholder="Reenter new password" id="address"  name="renewpass" type="password" />
                                          </div>
                                      </div>
                                  

                                      
                                       
                                       <center>
                             <button type="submit" name="editpass" class="btn btn-success text-center">Update</button>
                                  </center>

                                  </form>
 

                             

                          
                          </div>
                          
                    
                  </div>
               
 

  </div>
  
  </div>

  </div>
              </section>
              </section>

</section>
</body>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>

  <script src="pagination/demo/Scripts/bootstrap.min.js"></script>
  <script src='pagination/demo/js/jquery.dataTables.min.js'></script>
  
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  
       $(function () {

            $('#dataTable').dataTable({
               // "bJQueryUI": true,
                "sPaginationType": "full_numbers",
        //"pageLength": 1
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });

  </script>

  </body>
</html>
