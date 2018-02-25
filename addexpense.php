<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Insert Expense</title>

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

    <script type="text/javascript">
  
  function allLetter(cat_name)
{
  var letters=/^[A-Za-z]+$/;
  if(cat_name.value.match(letters))
  {
      return true;
  }
  else
  {
      
      cat_name.value="";
      cat_name.focus();
      alert(' Name must have Alphabetic characters only');
      return false;
  }
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

    <center><h1 class="text">Add Your Expense</h1></center>
    <div class="panel-body">

   
    </div>

    <?php



          // include 'database.php';        
          $obj=new database();
          $res=$obj->userdisplaybyid($_SESSION["user_email_id"]);

          while($row=mysql_fetch_assoc($res))
          {
    
            $user_id=$row["user_id"];

          }
    ?>
  
   <?php
           
           
           
            if(isset($_POST["expenseadd"]))
            {


              $amount=$_POST["amount"];
              $notes=$_POST["notes"];
              $date=$_POST["date"];
              $photo='null';
              $category_id=$_POST["category_id"];


                      if($_FILES["photo"]["name"]=="")
                        {

                          $target_file="";
                        }
                         else if($_FILES["photo"]["name"]!="")
                            {
                            $target_dir = "image/";
                            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
                            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
                           $target_file="image/". basename($_FILES["photo"]["name"]);

                         }


            $obj1=new database();
            $res1=$obj1->insertexpense($amount,$notes,$date,$target_file,$category_id,$user_id);

           echo '<script langauge="javascript">;
                                    alert("Add sucessfully");
                                    window.location.href="expense.php";
                                    </script>';
            
            }
        ?>
      
      
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             
                          </header>
                          <div class="panel-body">
                              
                                  <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                                     
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Amount <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                               <input class="form-control "  name="amount" type="text" placeholder="Enter Expense Amount " required="" />
                                          </div>
                                      </div>


                                       <div class="form-group ">
                                          <label class="control-label col-lg-2">Notes<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control ckeditor" name="notes" rows="6" placeholder=" Description About Expense" ></textarea>
                                              <div class="help-block with-errors"></div>
                          
                                            </div>
                                      </div>


                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Date <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                               <input class="form-control "  name="date" type="date"  required="" />
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control browse_img" type="file" name="photo" >

                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Category Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="category_id">
                                                 <?php 

                                                  // require 'database.php';
                                                   $obj=new database();
                                                   $res=$obj->getallcategory();
                                                   while ($row=mysql_fetch_array($res,MYSQL_ASSOC)) 
                                                    {
                

                                                      echo '<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
                                                    
                                                    }
                                                 ?>
                                              </select>
                                          </div>
                                      </div>



                                

                                       <div class="form-group">
                                        
                                              <center><button class="btn btn-primary text-center" type="submit" name="expenseadd">Add Expense</button>
                                              
                                      </div>

                                  </form>
                            
                          </div>
                      </section>
                  </div>
              </div>
 

        
      

    </div>
  </div>

              </section>
              </section>

</section>
</body>
  <!-- container section start -->

<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
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
