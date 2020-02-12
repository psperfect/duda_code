<link href="https://pssoftgroup.com/demo/duda/uploads/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<script src="https://pssoftgroup.com/demo/duda/uploads/js/jquerysession.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<div  class="container-fluid" >
    <div class="row">
    <form id="appointment_booking" method="POST">    
        <div class="col-md-4 left_col">
            <img src="https://irp-cdn.multiscreensite.com/eeadd5a0/dms3rep/multi/desktop/white_logoArtboard+1.svg" alt="beauty_hair_bar_logo">
        </div>
        
        <div id="service_wrapper" class="col-md-8">
            <div id="progress_1" class="progressbar"></div>
           
       <div id="service_wrapper_list">
           
       </div>
		<a href="javascript:void(0)"  class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s right_btn" onclick="next_divs('service_wrapper','select_emp');"  data-text="Next"><span>Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>		
		</div>
        
        
        <div id="select_emp" style="display:none"  class="col-md-8" >
            <div id="progress_2" class="progressbar"></div>
             <div class="row">
            <h2>Select Your Assistant</h2>
            
            <div class="form-check default_assist"><input class="form-check-input" type="radio" name="select_employee" value="" checked/><label class="form-check-label" for="radio1">
                    

                    <div>Choose an assistant for me</div>

                   </label>
                   </div>
            <div id="emp_data_list" class="emp_data">
                
                
                 </div>
               <a href="javascript:void(0)" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s left_btn" onclick="back_divs('select_emp','service_wrapper');"  data-text="Back"><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</span></a>
                <a href="javascript:void(0)" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s right_btn" onclick="next_divs('select_emp','time_date_wrapper');"  data-text="Next"><span>Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
           
        </div>
            
        </div>
       <!-- Date Section Starts Here -->
    <div id="time_date_wrapper" style="display:none" class="col-md-8">
        <div id="progress_3" class="progressbar"></div>
        <div class="row">
            <h2>When do you want to come</h2>
            <div id="error_div_time_slot" class="alert alert-danger error_form"> </div>
            <div class="col-md-6">
                 <input name="select_date" id="date_pick" type="hidden">
                <div id="datepicker"></div>
            </div>
            <div id="time_slot" class="col-md-6 time_col">
                <h4>Available Slots</h4>
                <h5>Please Select date and time.</h5>
                
            </div>
           </div>
        <a href="javascript:void(0)" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s left_btn" onclick="back_divs('time_date_wrapper','select_emp');"  data-text="Back"><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</span></a>
         <a href="javascript:void(0)" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s right_btn" onclick="next_divs('time_date_wrapper','checkout_wrapper');"  data-text="Next"><span>Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
        
    </div>
     <!-- Date Section Ends Here -->
      <!-- Checkout Section Starts Here -->
    
    <div id="checkout_wrapper" style="display:none" class="col-md-8">
       <div id="progress_4" class="progressbar"></div>
            <h2>Checkout</h2>
               <div id="error_div_checkout" class="alert alert-danger error_form"> </div>
                    <input type="text" name="first_name" value="" placeholder="Enter your name">
                    
                    <input type="email" name="email_address" value="" placeholder="Enter your e-mail">
                    
                    <label class="left_align" for="date">Birthday*</label><br>
                    <input type="text" name="birth_date" placeholder="Please select birth date"  id="datetimepick" value="">
                    
                    <p class="left_align">Select Gender</p>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="male" value="male">
                          <label class="form-check-label" for="male">Male</label>
                          
                          <input class="form-check-input" type="radio" name="exampleRadios" id="female" value="female">
                          <label class="form-check-label" for="female">Famale</label>
                    </div>
                    <input type="tel" placeholder="Enter your phone no." value="">
                     <a href="javascript:void(0)" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s left_btn" onclick="back_divs('checkout_wrapper','time_date_wrapper');"  data-text="Back"><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</span></a>
                    <button class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s right_btn" type="submit" data-text="Submit">Submit <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
     
    </div>
   
     <div id="message" class="col-md-8">
         <h2>Your booking request was sent!</h2>
         <p>Thanks for your booking. Looking forward to meeting you.</p>
        <img id='checkmark' src='https://pssoftgroup.com/demo/duda/uploads/check_image.png' />
        </div>
    </form>
</div>


</div>
    
 <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>
    <script>
    $( "#datetimepick" ).datepicker({
      changeMonth: true,
      changeYear: true,
      maxDate: new Date()
    });
    $( "#progress_1" ).progressbar({
      value: 25
    });
    $( "#progress_2" ).progressbar({
      value: 50
    });
    $( "#progress_3" ).progressbar({
      value: 75
    });
    $( "#progress_4" ).progressbar({
      value: 100
    });
     function next_divs(currentdiv, newdiv) {
    
    if(currentdiv=="service_wrapper"){
        if ($("input[name='book_treatment']").is( ":checked")) { 
                    } else {
            $("#error_div").html("Please select atleast one service.");
            $("#error_div").fadeTo(2000, 500).slideUp(500, function(){
            $("#error_div").slideUp(5000);
                });
              return false; 
              } 
     }
    if(currentdiv=="time_date_wrapper"){
        
       var date_select= $("#date_pick").val();
        
        if (date_select!="") {
           
            if ($("input[name='time_slot']").is( ":checked")) { 
                    } else {
            $("#error_div_time_slot").html("Please select atleast one time Slot.");
            $("#error_div_time_slot").fadeTo(2000, 500).slideUp(500, function(){
            $("#error_div_time_slot").slideUp(5000);
                });
              return false; 
              } 
                    } else {
            $("#error_div_time_slot").html("Please select date from calendar.");
            $("#error_div_time_slot").fadeTo(2000, 500).slideUp(500, function(){
            $("#error_div_time_slot").slideUp(5000);
                });
              return false; 
              } 
    }
 $("#" + currentdiv).hide(); 
        $("#" + newdiv).show();
    }
     function back_divs(currentdiv, newdiv) {
 $("#" + currentdiv).hide(); 
        $("#" + newdiv).show();
    }
    function display_login(){
        $( "#register" ).hide();
        $( "#login" ).show();
        
    }
    //-------------user register-------------
       $( "#target" ).submit(function( event ) {
  
  event.preventDefault();
 
    $('.error').hide();
      var name = $("input#name").val();
        if (name == "") {
        $("#name_error").show();
        $("input#name").focus();
        return false;
      }
        var password = $("input#password").val();
        if (password == "") {
        $("#pass_error").show();
        $("input#password").focus();
        return false;
      }
      
      var dataString = 'name='+ name + '&password=' + password ;
  //alert (dataString);return false;
  $.ajax({
    type: "POST",
    url: "https://pssoftgroup.com/demo/duda/register.php",
    data: dataString,
    success: function() {
    // $("#checkout_wrapper").hide();
      $('#message').html("<h2>Contact Form Submitted!</h2>")
      .append("<p>We will be in touch soon.</p>")
      .show()
      .fadeIn(1500, function() {
        $('#message').append("<img id='checkmark' src='https://pssoftgroup.com/demo/duda/uploads/check_image.png' />");
      });
    }
  });
  return false;
  
});
//-----------user register end --------------
//-----------user Login --------------
 $( "#target_login" ).submit(function( event ) {
  
  event.preventDefault();
 
    $('.error').hide();
      var username = $("input#username").val();
        if (username == "") {
        $("#name_error").show();
        $("input#username").focus();
        return false;
      }
        var password = $("input#password_login").val();
        if (password == "") {
        $("#pass_login_error").show();
        $("input#password_login").focus();
        return false;
      }
      
      var dataString = 'username='+ username + '&password=' + password ;
  //alert (dataString);return false;
  $.ajax({
    type: "GET",
    crossDomain: true,
    url: "https://pssoftgroup.com/demo/duda/login.php",
    data: dataString,
    success: function(result) {
 var obj = jQuery.parseJSON(  result);
  $.session.set('user_id', obj.id );
  location.reload();
      
    }
  });
  return false;
  
});
        
    </script>
    
    <div id="active_user_div">
     <div id="">
         
     
         
     </div>
        
    </div>
    
    <script>
     $(document).on('click', '.check_time_slot', function() {
      $('.check_time_slot').not(this).prop('checked', false);
    });
    $(document).on('click', '.treat_appointment', function() {
      $('.treat_appointment').not(this).prop('checked', false);
    });
    var site_url="https://pssoftgroup.com/demo/duda/function.php";
     get_treatment_all();
     get_employee_all();

    function today_time_slot() {
        $.ajax({
            type: "GET",     //today_time_slot();

            url: site_url,
            data: 'action=get_time_slot_today',
            success: function(result) {
                $("#time_slot").html(result);
            }
        });
    }

       function get_treatment_all(){
    $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=treatment_get',
    success: function(result) {
      var obj = jQuery.parseJSON(result);
      var c = '';
      
    c += '<h2>Book an Appointment</h2><div id="error_div" class="alert alert-danger error_form"> </div><ul id="accordion" class="accordion"> ';
$.each(obj, function(key, value) {
  var treatments = value.treatments;
  
       	if (treatments.length) {
               c +=  '<li class="toggal_accordion"><div class="link"><i class="fa fa-male" aria-hidden="true"></i>' + value.cat_name + '<i class="fa fa-chevron-down"></i></div>';
                c +=  '<ul class="submenu">';  
                
          $.each(value.treatments, function(key1, value1) {
                c +=  '<li >';
                               c +=  '<div class="pretty p-default p-thick p-pulse">';
                                 c +=  '<input class="treat_appointment" type="checkbox" name="book_treatment" value="' + value1.id + '">';
                                 c +=  '<div class="state p-warning-o">';
                                     c +=  '<label>' + value1.treat_name + '</label>';
                                 c +=  '</div>';
                               c +=  '</div>';
                           c +=  '</li>';     
 });
	
				
			c +=  '</ul></li>';  
       	}
				
});
		
			c +=  '</ul>';
			c += 
		
  $("#service_wrapper_list").html(c);
       }
  });
 }  
 function get_employee_all() {
        $.ajax({
            type: "GET",
            url: site_url,
            data: 'action=employee_get',
            success: function(result) {
               var obj = jQuery.parseJSON(result);
                var c = '';
                
                $.each(obj, function(key, value) {
					c += '<div class="form-check"><input class="form-check-input" type="radio" name="select_employee" value="' + value.id + '"><label class="form-check-label" for="radio1">';
                    c += ' <div class="col-md-4 portfolio_img"><img src="' + value.employee_profile + '" ></div>';

                    c += '<div class="col-md-4 name_col">' + value.employee_name + '</div><div class="col-md-4 name_col">' + value.employee_profession + '</div>';

                    c += '</label></div>';

                })
                $("#emp_data_list").html(c);
            }
        });
    }
    var holidays = [
    '20.2.2020',
    '25.2.2020',
    
  ];

function noSundaysOrHolidays(date) {
    var day = date.getDay();
    if (day !=1) {
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      for (i = 0; i < holidays.length; i++) {
        if($.inArray((d) + '.' + (m+1) + '.' + y, holidays) != -1) {
          return [false];
        }
      }
      return [true];
    } else {
      return [day != 1, ''];
    }
  }
 $(function() {
        $("#datepicker").datepicker({
            beforeShowDay: noSundaysOrHolidays,
            minDate: -0,
            maxDate: "+1M +10D",
              //altField:"#date_pick",
              
              
              
            onSelect: function(dateText) {
                $("input[name='select_date']").val(dateText);
                var services_id = $("input[name='book_treatment']:checked").val();
                $.ajax({
                    type: "GET",
                    url: site_url,
                    data: 'action=get_time_slot&selected_date=' + dateText + '&services_id=' + services_id,
                    success: function(result) {
                        //  var obj = jQuery.parseJSON(result);
                        $("#time_slot").html(result);
                    }
                });
                //console.log("Selected date: " + dateText + "; input's current value: " + this.value);
            }
        });
    });
  $("#appointment_booking").submit(function(event) {
      
      var name=$("input[name='first_name']").val();
      if(name==""){
          $("#error_div_checkout").html("Please enter you name!");
            $("#error_div_checkout").fadeTo(2000, 500).slideUp(500, function(){
            $("#error_div_checkout").slideUp(5000);
            });
            return false;
      }
      var email_address=$("input[name='email_address']").val();
      if(email_address==""){
          $("#error_div_checkout").html("Please enter you email Id!");
            $("#error_div_checkout").fadeTo(2000, 500).slideUp(500, function(){
            $("#error_div_checkout").slideUp(5000);
            });
            return false;
      }
            
        event.preventDefault();
        
        var form = $('#appointment_booking')[0];

        var data = new FormData(form);
        // var files = $('#employee_profile').files;
        //var file = files[0]; 
        //var data = $('#target_add_employee').serializeArray();
        var action = "add_appointment_booking";

        data.append("action", action);
        var dataString = data;

        $.ajax({
            type: "POST",
            url: site_url,
            data: dataString,
            enctype: 'multipart/form-data',
            processData: false, // Important!
            contentType: false,
            cache: false,
            success: function(result) {
      $("#checkout_wrapper").hide();
      $('#message').show();
         }
        });
        return false;

    });  
 </script>
 
 
 
