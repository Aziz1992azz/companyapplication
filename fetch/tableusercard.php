<?php
include("../control/conn.php");

$i = 1;
$sqls = "SELECT * FROM radcheck ORDER BY id DESC ";
$result = mysqli_query($conn,$sqls);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_array($result)) 
    {
        $id = $row["id"];
        $username = $row["username"];
        $full_name = $row["fullname"];
        $useremail = $row["useremail"];
        $userphone = $row["userphone"];
        $birtdate = $row["userbirthdate"];
        $userblood = $row["userblood"];
        $idnumber = $row["attribute"];
        $password = $row["value"];
        $sql = "SELECT * FROM cards  WHERE userid = ".$row["id"];
        $results = mysqli_query($conn,$sql);                                           
       
        $output .='                                         
            <tr>                         
                    <td>'.$i.' </td>                 
                    <td class="font-medium-2 ">'.$row["username"].' </td>
                    ';
                  
                    if (mysqli_num_rows($results) > 0) 
                    {    
                        $rows = mysqli_fetch_array($results); 
                        $card_num = $rows["cardnumber"];
                        $card_type = $rows['cardtype'];
                        $card_note = $rows['note'];
                       
                        $output .='
                        <td class="font-medium-2 ">'. $rows["cardnumber"].' </td>
                        ';
                       
                    }
                    else 
                    {   
                    $output .='
                            <td style="color:red"> لا توجد بطاقة</td>
                            ';
                        
                    }
                    $sql_credits = "SELECT * FROM balanceactivity  WHERE userid = ".$row["id"];

                    
                    $results_credits = mysqli_query($conn,$sql_credits);    
                    if (mysqli_num_rows($results_credits) > 0) 
                        {
                            $sum =0;
                            while($rows_credits = mysqli_fetch_array($results_credits)) 
                            {

                             $sum = $sum + $rows_credits["amount"];
                      
                            }
                            $output .='
                            <td class="font-medium-2 success ">'. $sum.'  دينار</td>
                            ';
                       
                    }
                    else 
                    {   
                    $output .='
                            <td style="color:red"> الرصيد صفر</td>
                            ';
                    }
                    $output .='
                    <td  class="font-medium-2 "> فارغ </td>
                    <td> 
                        <button type="button" class="btn btn-outline-info btn-glow font-medium-1 " onclick="val('.$id.')" id="butt"  data-toggle="modal" data-target="#bootstrap">
                        إضافة بطاقة
                        <i class="ft-plus-square"></i>
                        </button> 
                    </td>   
                    <td > 
                       <button type="button"  class="btn  btn-outline-primary btn-glow font-weight-bold font-medium-1 " onclick="val_credit('.$id.')" data-toggle="modal" data-target="#creditmod"> إضافة رصيد
                            <i class="ft-plus-square"></i>
                        </button> 
                    </td>
                    <td> 
                        <button type="button" class="btn btn-warning  btn-glow font-medium-1  w-100 " onclick=" get_edit_val(\''.$id.'\',\''.$username.'\',\''.$full_name.'\',\''.$useremail.'\',\''.$userphone.'\',\''.$birtdate.'\',\''.$userblood.'\',\''.$idnumber.'\',\''.$password.'\')" id="bu"  data-toggle="modal" data-target="#bootstrap_edit">
                            تعديل
                            <i class="ft-edit"></i>                                                                                                            
                        </button> 
                    </td>    
                    <td> 
                        <button type="button" class="btn btn-danger  btn-glow font-medium-1  " onclick=" get_del_val(\''.$id.'\',\''.$username.'\')" id="b"  data-toggle="modal" data-target="#heading2">
                            حدف
                            <i class="ft-trash-2"></i>                                                                      
                        </button>                      
                    </td>                                                                                                                  
            </tr>
            ';
          
            $i++; 
    }
}

echo $output;
mysqli_close($conn);

?>
