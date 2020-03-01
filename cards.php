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
    <title>Cards</title>
    <!-- <script src="style/css/jquery-3.2.1.min.js"></script> -->

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
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body style="font-family: 'Cairo', sans-serif;"  class="vertical-layout vertical-compact-menu material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

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
                <li class=" nav-item"><a href="users.php"><i class="mbri-paper-plane"></i><span class="menu-title" data-i18n="nav.dash.travel">Travel</span></a>
                </li>
                <li class=" nav-item active"><a href="cards.php"><i class="mbri-bulleted-list"></i><span class="menu-title" data-i18n="">Travel List</span></a>
                </li>
                <li class=" nav-item"><a href="sectionhome.php"><i class="mbri-database"></i><span class="menu-title" data-i18n="">Travel Detail</span></a>
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
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-header row">
       
        </div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <!-- Button trigger modal -->
                        </div>
                    </div>    
        <!-- BEGIN: card table-->     
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 style="font-family: 'Cairo', sans-serif;" class="card-title font-medium-4" >البطاقات</h3>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <table class="table material-table">
                                        <thead>
                                            <tr>
                                                <th>ر.ق</th>
                                                <th>اللإسم</th>
                                                <th>رقم البطاقة</th>
                                                <th>نوع البطاقة</th>                                            
                                                <th>الحالة </th>
                                                <th>الملاحظة</th>
                                                <th>تاريخ الإنشاء </th>
                                                <th> تعديل </th>
                                                <th> حدف </th>                                     
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
                                            <?php 
                                            $i = 1;
                                            $sqls = "SELECT * FROM cards";
                                            $result = mysqli_query($conn,$sqls);
                                            if (mysqli_num_rows($result) > 0) 
                                            {
                                                while($row = mysqli_fetch_array($result)) 
                                                {
                                                    $id = $row["id"];
                                            
                                                    $sql = "SELECT * FROM radcheck  WHERE id = ".$row["userid"];
                                                    $results = mysqli_query($conn,$sql);
                                                    $rows = mysqli_fetch_array($results);            
                                                ?>
                                                <tr>
                                                    <td> <?php echo $id; ?>  </td>
                                                    <td> <?php echo $rows['fullname']  ; ?>  </td>
                                                    <td> <?php echo $row['cardnumber']; ?>  </td>
                                                    <td> <?php echo $row['cardtype']; ?> </td>
                                                    <td> <?php echo $row['status']; ?> </td>
                                                    <td> <?php echo $row['note']; ?>  </td>
                                                    <td> <?php echo $row['date']; ?>  </td> 
                                                    <td> 
                                                        <button type="button" class="btn btn-warning  btn-glow font-medium-1  w-100 " onclick="<?php echo ' card_edit_val(\''.$id.'\',\''.$row["cardnumber"].'\',\''.$row["cardtype"].'\',\''.$row["status"].'\',\''.$row["note"].'\')';?>" id="editbt"  data-toggle="modal" data-target="#cd_edit">
                                                            تعديل
                                                            <i class="ft-edit"></i>                                                                                                            
                                                        </button> 
                                                    </td>    
                                                    <td> 
                                                        <button type="button" class="btn btn-danger  btn-glow font-medium-1  " onclick="<?php echo ' card_del_val(\''.$id.'\',\''.$username.'\')';?>" id="delbt"  data-toggle="modal" data-target="#cd_del">
                                                            حدف
                                                            <i class="ft-trash-2"></i>                                                                      
                                                        </button>                      
                                                    </td> 
                                                    
                                                </tr>

                                                <?php 
                                                }
                                            }
                                            mysqli_close($conn);
                                                ?>
                        
                                        
                                        </tbody>                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!--begin  model -->

    <!-- end model -->
    <div class="modal fade text-left" id="cd_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="form-body m-2">
                            <div class="col-10">
                            <h4 class="form-section" style="font-family: 'Cairo', sans-serif;"><i class="ft-credit-card"></i> إضافة مستخدم جديد</h4>
                                
                                <div class="row">
                                    <div class="col-md-12 font-large-1">
                                        <div class="form-group">
                                            <label class=" font-medium-2" >نوع البطاقة</label>
                                            <select id="card_type" class="form-control">                                                       
                                                <option value="بطاقة عامة" selected>بطاقة عامة</option>                                                   
                                                    <option  value="بطاقة زبون" >بطاقة زبون</option>
                                                    <option  value="بطاقة موضف" >بطاقة موضف</option>                                                                                                      
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class=" font-medium-2">رقم البطاقة</label>
                                            <input type="text" class="form-control" id="card_number" placeholder="card cumber" required  >
                                            <input type="text" id="idcard" style="display: none"  >
                                        </div>
                                    </div>                                                                                 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">          
                                        <label class=" font-medium-2">ملاحظة</label>   
                                        <textarea  class="form-control"  id="note"  placeholder="note"     ></textarea>                                                
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
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary  font-medium-2" id="close" data-dismiss="modal">إلغاء
                                    <i class="ft-x"></i>
                                </button>
                                <button type="button"  onclick="card_edit()" id="gett" class="btn btn-info font-medium-2">تعديل
                                   <i class="ft-save"></i>
                                </button>
                            </div>
                            <div class="alert text-warning text-center font-large-1" id="error_mess"></div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="" target="_blank"></a></span><span class="float-md-right d-none d-lg-block">lamah <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
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
<script>
function card_edit_val(id,num,type,status,note)
{
    $("#idcard").val(id);
    $("#card_number").val(num);
    $("#card_type").val(type);
   
    $("#note").val(note);
    //$("#status").val(status); 
     
     
}

function card_edit()
 {
     if( $("#card_number").val() != '')
     {
    $.ajax({
                 url : 'control/editcard.php',
              method : 'POST',
               data: {
                card_number: $("#card_number").val(),
                card_type:$("#card_type").val(),               
                note:$("#note").val(),
                id:$("#idcard").val(),
                status:$("input[name='status']:checked").val(),            
                  },
                  success:function(msg){
                   // $('#tablebody').load('fetch/tableusercard.php');
                    $('#cd_edit').modal('hide');
                    $('#error_mess').html('');
                    val_card_edit_clear();
                  
                      },
               });
            }
            else{
                $('#error_mess').html('البيانات غير مكتملة');
            }
 }
 
 $('#close').click(function () {
    $('#error_mess').html('');
        });

        function val_card_edit_clear()
{
                $("#card_number").val('');
                $("#card_type").val('');               
                $("#note").val('');
                $("#idcard").val('');
}

/*

function get_del_val(id_del , username)
{
    $("#idusers_del").val(id_del); 
    $("#username_del").html(username); 

}

function gets_ok_delete()
 {
   
     $.ajax({
            url : 'control/deleteuser.php',
            method : 'POST',
            data: {
                    id: $("#idusers_del").val(),      
                  },
                  success:function(msg){
                    $('#tablebody').load('fetch/tableusercard.php');
                    $('#heading2').modal('hide');
                           },
        
          });   
 }
*/
</script>
    
</body>


</html>