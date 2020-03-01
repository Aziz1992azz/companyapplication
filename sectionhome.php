<?php
include("control/conn.php");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Users</title>

    <script src="style/css/jquery-3.2.1.min.js"></script>
    <link href="style/css/font.css" rel="stylesheet" type="text/css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="style/app-assets/vendors/css/material-vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/material.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/material-extended.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/material-colors.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/custom-rtl.css">
    <!-- END: Theme CSS-->
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/core/menu/menu-types/material-vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/css-rtl/core/colors/material-palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="style/app-assets/fonts/mobiriseicons/24px/mobirise/style.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="style/assets/css/style-rtl.css">

</head>

<body style="font-family: 'Cairo', sans-serif;" class="vertical-layout vertical-compact-menu material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
        <div class="pace-progress-inner"></div>
      </div>
      <div class="pace-activity"></div></div>
      
          <!-- BEGIN: Header-->
     <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
              
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle" href=""><i class="ft-menu"></i></a></li>
                        <li class="nav-item nav-link-search"><a class="nav-link d-none d-lg-block" href="">
                                <input class="round form-control search-box" type="text" placeholder="Explore Modern Admin">
                                <a class="nav-link dropdown-toggle search-bar-toggle d-lg-none d-m-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">search</i></a>
                                <div class="dropdown-menu arrow"><a class="dropdown-item">
                                        <input class="round form-control" type="text" placeholder="Search Here"></a></div>
                            </a></li>
                        <li class="nav-item d-none d-lg-block d-none"><a class="nav-link nav-link-expand" href=""><i class="ficon ft-maximize"></i></a></li>
                       
                    </ul>
            
                </div>
            </div>
        </div>
    </nav>
          <!-- END: Header-->
      
      
          <!-- BEGIN: Main Menu-->
      
          <div class="main-menu material-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item "><a href="users.php"><i class="mbri-paper-plane"></i><span class="menu-title" data-i18n="nav.dash.travel">Travel</span></a>
                </li>
                <li class=" nav-item"><a href="cards.php"><i class="mbri-bulleted-list"></i><span class="menu-title" data-i18n="">Travel List</span></a>
                </li>
                <li class=" nav-item active"><a href="sectionhome.php"><i class="mbri-database"></i><span class="menu-title" data-i18n="">Travel Detail</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-bootstrap"></i><span class="menu-title" data-i18n="">Travel Booking</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-cash"></i><span class="menu-title" data-i18n="">Payment Details</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-success"></i><span class="menu-title" data-i18n="">Complete Booking</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-extension"></i><span class="menu-title" data-i18n="nav.ui.main">UI</span></a>
                    <ul class="menu-content">
                       
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
          </div>
      
          <!-- END: Main Menu-->
          <!-- BEGIN: Content-->
          <div class="app-content content">
            
              <div class="content-wrapper">
                 <div class="row">
                 <div class="col-md-4 ">
                      
                      <div class="card">
                          <div class="card-body">
                            <div class="col-md-12">
                                <div class="card" >
                                   
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                            
                                            <form class="form" >
                                                <div class="form-body">
                                                    <h4 class="form-section" style="font-family: 'Cairo', sans-serif;"><i class="ft-home"></i> إضافة قسم جديد</h4>
                                                  

                                                    <div class="form-group">
                                                        <label for="companyName">الإسم</label>
                                                        <input type="text" id="Name" class="form-control" placeholder="Company Name" name="Name" >
                                                    </div>

                                                </div>
                                                <div class="row">
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput5">القسم التابع لة</label>

                                                                <select id="Relationship" name="Relationship" class="form-control">
                                                                    <option value="0" > لا يتبع أية قسم </option>
                                                                 
                                                                          <?php
                                                                            $sql_select = "select * from  sections ";
                                                                            $results_select = $conn->query($sql_select);
                                                                            if ($results_select->num_rows > 0) {
                                                                                while($rows_select = $results_select->fetch_assoc()) {
                                                                                $id_select=$rows_select["id"]; ?>
                                                                            <option value="<?php echo $id_select; ?>"><?php echo $rows_select['sectionname']; ?></option>
                                                                            <?php
                                                                            }}?>
                                                                </select>
                                                            </div>
                                                        </div>
                                             
                                                </div>
                                                 
                       
                                            

                                                <div class="form-row">
                                        
                                                        <label class="col-md-3 label-control  font-medium-2">الحالة</label>      
                                                    
                                                    <div class="form-check form-check-inline">
                                                        <input   type="radio" id="status" name="status"   class="form-check-input"   value="on" checked>
                                                        <label class="form-check-label  font-medium-2" for="inlineCheckbox1">تعمل</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input   type="radio"  id="status" name="status" class="form-check-input" value="off">
                                                        <label class="form-check-label  font-medium-2" for="inlineCheckbox2">لا تعمل</label>
                                                    </div>
                                                </div>



                                                <div class="form-actions">
                                                  
                                                <button type="button"  onclick="get()" id="gett" class="btn btn-info font-medium-2">حفظ
                                   <i class="ft-save"></i>
                                </button>
                                                </div>
                                            </form>

<script>

function get()
 {
     if( $("#Name").val() != '')
     {
    $.ajax({
                 url : 'control/addsection.php',
              method : 'POST',
               data: {
                Relationship: $("#Relationship").val(),
                Name:$("#Name").val(),               
                Starus:$("input[name='status']:checked").val(),            
                  },
                  success:function(msg){
                   // $('#tablebody').load('fetch/tableusercard.php');
                   // $('#bootstrap').modal('hide');
                   // $('#error_mess').html('');
                   // val_card_clear();
                  
                      },
               });
            }
            else{
             //   $('#error_mess').html('البيانات غير مكتملة');
            }
 }
 




</script>


                                            <hr>
                                            <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row"><div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">

                                                    </div>
                                                </div>
                                             
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                            <table class="table material-table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 190px;">
                                                    الأسم
                                                </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 307.6px;">
                                                    التعديل
                                                </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 153.2px;">
                                                    الحدف
                                                </th>
                                            </thead>
                                            <tbody>
                                    
                                                
                                            <?php   $sql_table = "select * from  sections ";
                                                    $result_table = $conn->query($sql_table);
                                                    if ($result_table->num_rows > 0) 
                                                    {
                                                        while($row_table = $result_table->fetch_assoc()) 
                                                        {
                                                            $id_table = $row_table['id'];
                                                            ?> 
                                            <tr role="row" class="odd">
                                                    <td class="sorting_1"> <?php echo $row_table['sectionname']; ?> </td>
                                                    <td> <a  href="edit_section.php?id=<?php echo $id_table;?>"  class="btn  btn-warning">تعديل</a></td>
                                                    <td><a  href="delete_section.php?id=<?php echo $id_table;?>" class="btn  btn-danger">حدف</a></td>
                                        
                                                </tr>
                                                        <?php } } ?>
                                            </tbody>
                                        </table></div></div>
                                        <div class="row">
                                            </div></div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            



                  
                          </div>
                      </div>
                 
             
          </div>
                    <div  class="col-md-8 ">
                 
                                <div class="row">


                                
                                    <div class="col-md-12 col-sm-12">
                                        <div class="card pull-up">
                                            <div class="card-content">
                                                
                                                <section id="material-steppers-vertical">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 style=" font-family: cairo;" class="card-title">الأقسام داخل الشركة</h4>
                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                                                                        <div class="heading-elements">
                                                                            <ul class="list-inline mb-0">
                                                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-content collapse show">
                                                                        <div class="card-body ">
                                                                            <p>مجموعة الأقسام والأقسام التابعة لها</p>
                                                                            <?php   $sqls = "select * from  sections ";
                                                                                $results = $conn->query($sqls);
                                                                                if ($results->num_rows > 0) 
                                                                                {
                                                                                    while($rows = $results->fetch_assoc()) 
                                                                                    {
                                                                                ?>
                                                                                        <ul class=""  style=" font-size: 1.5rem; color:black;list-style: none">
                                                                                        <?php
                                                                                            $id=$rows["id"];
                                                                                            if($rows["relationship"] == '0')
                                                                                            {   ?>  

                                                                                        <li><span class="btn"  style="font-size: 1.5rem; color:black; " ><a href=""> <?php echo $rows["sectionname"];  ?></a></span>
                                                                                            <ul class="pl-5">
                                                                                            <?php   $sql =  "select * from  sections where relationship = $id ";
                                                                                    $result = $conn->query($sql);
                                                                                    if ($result->num_rows > 0) 
                                                                                    {
                                                                                        while($row = $result->fetch_assoc()) 
                                                                                        {
                                                                                            $id_one=$row["id"];
                                                                                            ?> 
                                                                                            <li class="pt-1 pl-5">
                                                                                            <span class="btn"  style="font-size: 1.5rem; color:black; " > <a href=""> <?php echo $row["sectionname"];  ?></a></span>
                                                                                            <ul class="pl-5">
                                                                                            <?php   $sql_one =  "select * from  sections where relationship =   $id_one ";
                                                                                                            $result_one = $conn->query($sql_one);
                                                                                                            if ($result_one->num_rows > 0) 
                                                                                                            {
                                                                                                                while($row_one = $result_one->fetch_assoc()) 
                                                                                                                {
                                                                                                                    $id_two=$row_one["id"];
                                                                                                                    ?>  
                                                                                                                    <li class="pt-1 pl-5">
                                                                                                                        <span  class="btn"   style="font-size: 1.5rem; color:black;"><a href=""> <?php echo $row_one["sectionname"];  ?></a></span>
                                                                                                                        <ul class="pl-5">
                                                                                                                        <?php   $sql_two =  "select * from  sections where relationship =   $id_two ";
                                                                                                                                        $result_two = $conn->query($sql_two);
                                                                                                                                        if ($result_two->num_rows > 0) 
                                                                                                                                        {
                                                                                                                                            while($row_two = $result_two->fetch_assoc()) 
                                                                                                                                            {
                                                                                                                                                $id_three=$row_two["id"];
                                                                                                                                                ?>  
                                                                                                                                                <li class="pt-1 pl-5">
                                                                                                                                                    <span class="btn"  style="font-size: 1.5rem; color:black; "><a href=""> <?php echo $row_two["sectionname"];  ?></a></span>
                                                                                                                                                    <ul class="pl-5">
                                                                                                                                                    <?php   $sql_three =  "select * from  sections where relationship =   $id_three ";
                                                                                                                                                                    $result_three = $conn->query($sql_three);
                                                                                                                                                                    if ($result_three->num_rows > 0) 
                                                                                                                                                                    {
                                                                                                                                                                        while($row_three = $result_three->fetch_assoc()) 
                                                                                                                                                                        {
                                                                                                                                                                            $id_four=$row_three["id"];
                                                                                                                                                                            ?>  
                                                                                                                                                                            <li class="pt-1 pl-5">
                                                                                                                                                                                <span class="btn"  style="font-size: 1.5rem; color:black; "><a href=""> <?php echo $row_three["sectionname"];  ?></a></span>
                                                                                                                                                                                <ul class="pl-5">
                                                                                                                                                                                <?php   $sql_four =  "select * from  sections where relationship =   $id_four ";
                                                                                                                                                                                $result_four = $conn->query($sql_four);
                                                                                                                                                                                if ($result_four->num_rows > 0) 
                                                                                                                                                                                {
                                                                                                                                                                                    while($row_four = $result_four->fetch_assoc()) 
                                                                                                                                                                                    {
                                                                                                                                                                                        $id_five=$row_four["id"];
                                                                                                                                                                                        ?>  
                                                                                                                                                                                        <li class="pt-1 pl-5">
                                                                                                                                                                                            <span class="btn"  style="font-size: 1.5rem; color:black; "><a href=""> <?php echo $row_four["sectionname"];  ?></a></span>
                                                                                                                                                                                            <ul>
                                                                                                                                                                                                
                                                                                                                                                                                            </ul>
                                                                                                                                                                                        </li>                       
                                                                                                                                                                                        <?php
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                                        ?>
                                                                                                                                                                                </ul>
                                                                                                                                                                            </li>                       
                                                                                                                                                                            <?php
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                            ?>
                                                                                                                                                    </ul>
                                                                                                                                                
                                                                                                                                                </li>                       
                                                                                                                                                <?php
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                                ?>
                                                                                                                        </ul>
                                                                                                                    </li>                       
                                                                                                                    <?php
                                                                                                                }
                                                                                                            }
                                                                                                                    ?>
                                                                                            </ul>
                                                                                            </li>     
                                                                                            <?php
                                                                                        }
                                                                                    }
                                                                                            ?>                             



                                                                                            </ul>
                                                                                    
                                                                                    </li>
                                                                                        <?php    } ?>
                                                                                        </ul>
                                                                            <?php       }
                                                                                }
                                                                            ?>
                                                                            

                                                                        

                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                </div>
                         
                    </div>
                
                </div>
              </div>
          </div>
          <!-- END: Content-->
      
        
          <!-- BEGIN: Footer-->
          <footer class="footer footer-static footer-dark navbar-border navbar-shadow">
              <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright © 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted &amp; Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
          </footer>
          <!-- END: Footer-->
      
      
          <!-- BEGIN: Vendor JS-->
          <script src="style/app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="style/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="style/app-assets/js/core/app-menu.js"></script>
    <script src="style/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="style/app-assets/js/scripts/pages/material-app.js"></script>
    <script src="style/app-assets/js/scripts/tables/material-datatable.js"></script>
    <!-- END: Page JS-->


</body>


</html>