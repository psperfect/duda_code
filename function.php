<?php
$site_url="https://pssoftgroup.com/demo/duda";

 header('Access-Control-Allow-Origin: *'); 
// Include config file
require_once "config.php";

if($_REQUEST["action"] == "category_add"){
    
     $cat_name=$_REQUEST["cat_name"];
         // Prepare an insert statement
        $sql = "INSERT INTO category (cat_name) VALUES ('$cat_name')";
          if (mysqli_query($link, $sql)) {
echo json_encode(array('category_name'=>$cat_name));
               die;
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
               die;
            }
            $link->close();
       
   
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($link);
}
if($_REQUEST["action"] == "category_get"){
     $sql_get= "SELECT * FROM category";

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $category[]=$row;
}
echo json_encode($category);
die;
}
if($_REQUEST["action"] == "category_get_with_id"){
     $sql_get= "SELECT * FROM category Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $category=$row;
}
echo json_encode($category);
die;
}

if($_REQUEST["action"] == "category_delete_with_id"){
     $sql_get= "DELETE  FROM category Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
echo "1";
die;
}
if($_REQUEST["action"] == "category_edit"){

   $cat_name=$_REQUEST["cat_name"];
   $id=$_REQUEST['category_id'];
 $sql_get= "UPDATE category set cat_name= '$cat_name' where id= ".$id;

 $result = mysqli_query($link,$sql_get);
 die;


}
//-------------Treatment section functions-------------------//
if($_REQUEST["action"] == "treatment_get"){
     $sql_get= "SELECT * FROM category";
    

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $category[$row['id']]=$row;
      $sql_get1= "SELECT * FROM treatments WHERE treat_category=".$row['id'];
$category[$row['id']]['treatments']=array();
 $result1 = mysqli_query($link,$sql_get1);
   while ($row1 = $result1->fetch_assoc()) {
   $category[$row['id']]['treatments'][]=$row1;
}
   
  
   
}

echo json_encode($category);
die;
}
if($_REQUEST["action"] == "treatment_get_with_id"){
     $sql_get= "SELECT * FROM treatments Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $treatment=$row;
}
echo json_encode($treatment);
die;
}
if($_REQUEST["action"] == "add_treatment"){
    
    
    $treat_name=$_REQUEST["treat_name"];  
    $treat_price=$_REQUEST["treat_price"];
    $treat_currency=$_REQUEST["treat_currency"];
    $treat_category=$_REQUEST["treat_category"];
    $treat_time=$_REQUEST["treat_time"];
  
         // Prepare an insert statement
        $sql = "INSERT INTO treatments (treat_name,treat_price,treat_currency,treat_category,treat_time) VALUES ('$treat_name', '$treat_price', '$treat_currency', '$treat_category', '$treat_time')";
          if (mysqli_query($link, $sql)) {

               die;
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
               die;
            }
            $link->close();
       
   
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($link);
}
if($_REQUEST["action"] == "edit_treatment"){
    $id=$_REQUEST['treat_id'];
    $treat_name=$_REQUEST["treat_name"];  
    $treat_price=$_REQUEST["treat_price"];
    $treat_currency=$_REQUEST["treat_currency"];
    $treat_category=$_REQUEST["treat_category"];
    $treat_time=$_REQUEST["treat_time"];
    
 $sql_get= "UPDATE treatments set treat_name= '$treat_name',treat_price= '$treat_price',treat_currency= '$treat_currency',treat_category= '$treat_category',treat_time= '$treat_time' where id= ".$id;

 $result = mysqli_query($link,$sql_get);
 die;
}
if($_REQUEST["action"] == "treatment_delete_with_id"){
     $sql_get= "DELETE  FROM treatments Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
echo "1";
die;
}
//-------------Employee section functions-------------------//

if($_REQUEST["action"] == "add_employee"){
    
    
    $employee_name=$_REQUEST["employee_name"];  
    $employee_profession=$_REQUEST["employee_profession"];
    $file_name = $_FILES['employee_profile']['name'];
    $file_size =$_FILES['employee_profile']['size'];
    $file_tmp =$_FILES['employee_profile']['tmp_name'];
    $file_type=$_FILES['employee_profile']['type'];
if(empty($errors)==true){
         $result= move_uploaded_file($file_tmp,"uploads/employee_profile/".$file_name);
         $target_path = $site_url . "/uploads/employee_profile/" . basename($_FILES['employee_profile']['name']);
       // print_r($target_path); 
        echo "Success";
      }else{
          $target_path="";
         print_r($errors);
        die;
      }
     
         // Prepare an insert statement
        $sql = "INSERT INTO employees (employee_name,employee_profession,employee_profile) VALUES ('$employee_name', '$employee_profession', '$target_path')";
          if (mysqli_query($link, $sql)) {
              echo "done";
               die;
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
               die;
            }
            $link->close();
        mysqli_stmt_close($stmt);
     mysqli_close($link);
}
if($_REQUEST["action"] == "employee_get"){
     $sql_get= "SELECT * FROM employees";
    

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $employee[]=$row;
  }

echo json_encode($employee);
die;
}
if($_REQUEST["action"] == "employee_get_with_id"){
     $sql_get= "SELECT * FROM employees Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $employees=$row;
}
echo json_encode($employees);
die;
}if($_REQUEST["action"] == "edit_employee"){
    
     $id=$_REQUEST["employee_id"];
    $employee_name=$_REQUEST["employee_name"];  
    $employee_profession=$_REQUEST["employee_profession"];
   
    if(!empty($_FILES['employee_profile']['name'])){
    $file_name = $_FILES['employee_profile']['name'];
    $file_size =$_FILES['employee_profile']['size'];
    $file_tmp =$_FILES['employee_profile']['tmp_name'];
    $file_type=$_FILES['employee_profile']['type'];
if(empty($errors)==true){
         $result= move_uploaded_file($file_tmp,"uploads/employee_profile/".$file_name);
         $target_path = $site_url . "/uploads/employee_profile/" . basename($_FILES['employee_profile']['name']);
       // print_r($target_path); 
        echo "Success";
      }else{
          $target_path="";
         print_r($errors);
        die;
      }
      $sql_get= "UPDATE employees set employee_name= '$employee_name',employee_profession= '$employee_profession',employee_profile= '$target_path' where id= ".$id;

 $result = mysqli_query($link,$sql_get);
 die; 
    }else{
        
       $sql_get= "UPDATE employees set employee_name= '$employee_name',employee_profession= '$employee_profession' where id= ".$id;

 $result = mysqli_query($link,$sql_get);
 die;
 
    }
        
}

if($_REQUEST["action"] == "employee_delete_with_id"){
     $sql_get= "DELETE  FROM employees Where id=".$_REQUEST['id'];

 $result = mysqli_query($link,$sql_get);
echo "1";
die;
}

if($_REQUEST["action"] == "global_variable_update"){
       $global_value=$_REQUEST["attr_value"];
       $global_key=$_REQUEST["attr_name"];  
      $sql_get= "UPDATE global_variables set global_value= '$global_value' where global_key= '".$global_key."'";
 $result = mysqli_query($link,$sql_get);
 //print_r($result);
echo "1";
die;
}
if($_REQUEST["action"] == "global_variable_get"){
        
      $sql_get= "SELECT * FROM global_variables";
  $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $global_variables[]=$row;
}
echo json_encode($global_variables);
die;

}
//-------------------- schedule_cal_edit function start ------------------//
if($_REQUEST["action"] == "schedule_cal_edit"){
   // print_r($_REQUEST);
    $days=array('monday','tuesday','wednesday','thursday','friday','saturday','sunday');
    foreach($days as $day){
    //    echo $day;
     $day_off="0";
      $start_time=$_REQUEST[$day."_start"];
       $end_time=$_REQUEST[$day."_end"];
        $lunch_break_from=$_REQUEST[$day."_lunch_start"];
         $lunch_break_to=$_REQUEST[$day."_lunch_end"];
          //$day_off=$_REQUEST[$day."_is_day_off"];
          if(isset($_REQUEST[$day."_is_day_off"])){
              
              $day_off=$_REQUEST[$day."_is_day_off"];
          }
      $sql_get= "UPDATE schedule_cal set start= '$start_time', end= '$end_time',lunch_start='$lunch_break_from',lunch_end='$lunch_break_to',is_day_off=$day_off where day= '".$day."'";
      $result = mysqli_query($link,$sql_get);
        
    }
    echo "Done";
    die;
 }
 //-------------------- schedule_cal_edit function end ------------------//
 //-------------------- get_schedule_cal function start ------------------//
 if($_REQUEST["action"] == "get_schedule_cal"){
    $sql_get= "SELECT * FROM schedule_cal";
  $result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $schedule_cal[]=$row;
}
echo json_encode($schedule_cal);
die;
}
  //-------------------- get_schedule_cal function end ------------------//
 if($_REQUEST["action"] == "get_time_slot_today"){ 

 $dayName=strtolower(date("l", strtotime(date())));

$sql_get= "SELECT * FROM schedule_cal Where day='".$dayName."'";
$result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $schedule_cal=$row;
}
$duration=60;
$cleanup    = 0; // don't mind this
$start    = $schedule_cal['start']; // start time
$end      = $schedule_cal['end']; // end time
//$break_start = '1:00PM'; // break start
$break_start      = $schedule_cal['lunch_start'];
$break_end      = $schedule_cal['lunch_end'];
//$break_end   = '2:00PM'; // break end
$result=availableSlots($duration, $cleanup, $start, $break_start, $break_start, $break_end); 
$result2=availableSlots($duration, $cleanup, $break_end, $end, $break_start, $break_end); 
$result=array_merge($result,$result2);

$html="";
    
     $html .= "<h4>Available Slots</h4>	<h5>
	The following slots are available</h5>";
	foreach($result as $re){
	    $html .= " <div class='pretty p-default p-thick p-pulse'><input type='checkbox' class='check_time_slot' name='time_slot' value='".$re."' > " ;
	    $html .= "<div class='state p-warning-o'><label>".$re."</label></div>";
	    $html .= "</div>";
	}
 
 echo $html;
      die;
  }
 if($_REQUEST["action"] == "get_time_slot"){ 
 
     $selected_date=$_REQUEST["selected_date"];
    $services_id=$_REQUEST["services_id"];
    
 $sql_get_services= "SELECT * FROM treatments Where id='".$services_id."'";
$result1 = mysqli_query($link,$sql_get_services);
   while ($row1 = $result1->fetch_assoc()) {
   $services=$row1;
}

$p_name=$services['treat_name'];
$dayName=strtolower(date("l", strtotime($selected_date)));

$sql_get= "SELECT * FROM schedule_cal Where day='".$dayName."'";
$result = mysqli_query($link,$sql_get);
   while ($row = $result->fetch_assoc()) {
   $schedule_cal=$row;
}
$duration=$services['treat_time'];
//$duration = 30; // how much the is the duration of a time slot
$cleanup    = 0; // don't mind this
$start    = $schedule_cal['start']; // start time
$end      = $schedule_cal['end']; // end time
//$break_start = '1:00PM'; // break start
$break_start      = $schedule_cal['lunch_start'];
$break_end      = $schedule_cal['lunch_end'];
//$break_end   = '2:00PM'; // break end
$result=availableSlots($duration, $cleanup, $start, $break_start, $break_start, $break_end); 
$result2=availableSlots($duration, $cleanup, $break_end, $end, $break_start, $break_end); 
$result=array_merge($result,$result2);

$html="";
    
     $html .= "<h4>Available Slots</h4>	<h5>
	The following slots are available on <b> $p_name </b></h5>";
	foreach($result as $re){
	 $html .= " <div class='pretty p-default p-thick p-pulse'><input type='checkbox' class='check_time_slot' name='time_slot' value='".$re."' > " ;
	    $html .= "<div class='state p-warning-o'><label>".$re."</label></div>";
	    $html .= "</div>";
	}

 echo $html;
      die;
  }
  if($_REQUEST["action"] =="add_appointment_booking"){
    //  print_r($_REQUEST);
     // die;
      $treatment_id=$_REQUEST['book_treatment'];
      $employee_id=$_REQUEST['select_employee'];
      $time_slot=$_REQUEST['time_slot'];
      $date_select=$_REQUEST['select_date'];
      $user_id='';
      $status='active';
       $sql = "INSERT INTO appointment (treatment_id,employee_id,time_slot,date_select,user_id,status) VALUES ('$treatment_id', '$employee_id', '$time_slot', '$date_select', '$user_id', '$status')";
          if (mysqli_query($link, $sql)) {
              echo "done";
               die;
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
               die;
            }
      
  }
  if($_REQUEST["action"] =="get_all_events"){
        //start: '2019-11-01'
      
  $sql_get= "SELECT * FROM appointment";
  $result = mysqli_query($link,$sql_get);
  $x=0;
   //$events=array();
 while ($row = $result->fetch_assoc()) {
   $appointment[$x]=$row;
  
  $sql_get_services= "SELECT * FROM treatments Where id='".$row['treatment_id']."'";
  $result1 = mysqli_query($link,$sql_get_services);
    $row1  = $result1->fetch_array(MYSQLI_ASSOC); 
    $appointment[$x]['treat_data']=$row1;
    $employee= "SELECT * FROM employees Where id='".$row['employee_id']."'";
  $e = mysqli_query($link,$employee);
    $employee_data  = $e->fetch_array(MYSQLI_ASSOC); 
    $appointment[$x]['employee_data']=$employee_data;
  
   
    $events[$x]['title']=$row1['treat_name'];
   $events[$x]['description']=$row['time_slot'];
    $events[$x]['start']=date('Y-m-d',strtotime($row['date_select']));
    $x++;
   }
  
   echo json_encode($events);
   die;
  }
function availableSlots($duration, $cleanup, $start, $end, $break_start, $break_end) {
     date_default_timezone_set("Asia/Calcutta"); 
    $start         = new DateTime($start);
    $end           = new DateTime($end);
    $break_start           = new DateTime($break_start);
    $break_end           = new DateTime($break_end);
    $interval      = new DateInterval("PT" . $duration . "M");
    $cleanupInterval = new DateInterval("PT" . $cleanup . "M");
    $periods = array();

    for ($intStart = $start; $intStart < $end; $intStart->add($interval)->add($cleanupInterval)) {
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);


        if(strtotime($break_start->format('H:i A')) > strtotime($endPeriod->format('H:i A')) && strtotime($endPeriod->format('H:i A')) > strtotime($break_end->format('H:i A'))){
          echo "break"; die;
            $endPeriod = $break_start;
            $periods[] = $intStart->format('H:i A') . ' - ' . $endPeriod->format('H:i A');
            $intStart = $break_end;
            $endPeriod = $break_end;
            $intStart->sub($interval);
        }else{
            $periods[] = $intStart->format('H:i A') . ' - ' . $endPeriod->format('H:i A');
        }
    }


    return $periods;
}
  
?>