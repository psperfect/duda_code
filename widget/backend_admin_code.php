<script src="https://pssoftgroup.com/demo/duda/uploads/js/notify.js"></script>
<link href="https://pssoftgroup.com/demo/duda/uploads/css/bootstrap.min.css" rel="stylesheet">
<link href="https://pssoftgroup.com/demo/duda/uploads/css/bootstrap-timepicker.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script src="https://pssoftgroup.com/demo/duda/uploads/js/bootstrap-timepicker.min.js"></script>
 <link href='https://pssoftgroup.com/demo/duda/packages/core/main.css' rel='stylesheet' />
<link href='https://pssoftgroup.com/demo/duda/packages/daygrid/main.css' rel='stylesheet' />
<link href='https://pssoftgroup.com/demo/duda/packages/timegrid/main.css' rel='stylesheet' />
<link href='https://pssoftgroup.com/demo/duda/packages/list/main.css' rel='stylesheet' />
<script src='https://pssoftgroup.com/demo/duda/packages/core/main.js'></script>
<script src='https://pssoftgroup.com/demo/duda/packages/core/locales-all.js'></script>
<script src='https://pssoftgroup.com/demo/duda/packages/interaction/main.js'></script>
<script src='https://pssoftgroup.com/demo/duda/packages/daygrid/main.js'></script>
<script src='https://pssoftgroup.com/demo/duda/packages/timegrid/main.js'></script>
<script src='https://pssoftgroup.com/demo/duda/packages/list/main.js'></script>
<script src='https://unpkg.com/tooltip.js@1.3.3/dist/umd/tooltip.min.js'></script>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'booking')" id="defaultOpen"><i class="fa fa-th-large" aria-hidden="true"></i> Booking Setting</button>
  <button class="tablinks" onclick="openCity(event, 'treatment')"><i class="fa fa-cog" aria-hidden="true"></i> Treatments</button>
  <button class="tablinks" onclick="openCity(event, 'employee')"><i class="fa fa-user" aria-hidden="true"></i> Employees</button>
  <button class="tablinks" id="button_booking_time" onclick="openCity(event, 'booking_time')"><i class="fa fa-clock-o" aria-hidden="true"></i> Booking Time</button>
 <button class="tablinks"  onclick="openCity(event, 'booking_calnder')"><i class="fa fa-clock-o" aria-hidden="true"></i>Booking Calendar</button>

</div>


<style>
    .popper,
.tooltip {
  position: absolute;
  z-index: 9999;
  background: #FFC107;
  color: black;
  width: 150px;
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  padding: 10px;
  text-align: center;
}
.style5 .tooltip {
  background: #1E252B;
  color: #FFFFFF;
  max-width: 200px;
  width: auto;
  font-size: .8rem;
  padding: .5em 1em;
}
.popper .popper__arrow,
.tooltip .tooltip-arrow {
  width: 0;
  height: 0;
  border-style: solid;
  position: absolute;
  margin: 5px;
}

.tooltip .tooltip-arrow,
.popper .popper__arrow {
  border-color: #FFC107;
}
.style5 .tooltip .tooltip-arrow {
  border-color: #1E252B;
}
.popper[x-placement^="top"],
.tooltip[x-placement^="top"] {
  margin-bottom: 5px;
}
.popper[x-placement^="top"] .popper__arrow,
.tooltip[x-placement^="top"] .tooltip-arrow {
  border-width: 5px 5px 0 5px;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  bottom: -5px;
  left: calc(50% - 5px);
  margin-top: 0;
  margin-bottom: 0;
}
.popper[x-placement^="bottom"],
.tooltip[x-placement^="bottom"] {
  margin-top: 5px;
}
.tooltip[x-placement^="bottom"] .tooltip-arrow,
.popper[x-placement^="bottom"] .popper__arrow {
  border-width: 0 5px 5px 5px;
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-color: transparent;
  top: -5px;
  left: calc(50% - 5px);
  margin-top: 0;
  margin-bottom: 0;
}
.tooltip[x-placement^="right"],
.popper[x-placement^="right"] {
  margin-left: 5px;
}
.popper[x-placement^="right"] .popper__arrow,
.tooltip[x-placement^="right"] .tooltip-arrow {
  border-width: 5px 5px 5px 0;
  border-left-color: transparent;
  border-top-color: transparent;
  border-bottom-color: transparent;
  left: -5px;
  top: calc(50% - 5px);
  margin-left: 0;
  margin-right: 0;
}
.popper[x-placement^="left"],
.tooltip[x-placement^="left"] {
  margin-right: 5px;
}
.popper[x-placement^="left"] .popper__arrow,
.tooltip[x-placement^="left"] .tooltip-arrow {
  border-width: 5px 0 5px 5px;
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  right: -5px;
  top: calc(50% - 5px);
  margin-left: 0;
  margin-right: 0;
}
</style>
<script>
jQuery(document).mouseup(function (e){

	var container = jQuery(".modal-content");

	if (!container.is(e.target) && container.has(e.target).length === 0){

		jQuery('.modal').fadeOut(300);
		
	}
}); 
 function alignModal(){
        var modalDialog = $('.modal').find(".modal-content");
       // Applying the top margin on modal dialog to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 4));
    }
   
</script>

<div id="booking" class="tabcontent">
  <div class="booking_wrapper">
    <h3>Ask for following when they booking</h3>
    <div class="booking_inner_wrapper">
<label class="check_container">Phone Number
  <input type="checkbox" class="check_booking" name="phone_number" >
  <span class="checkmark"></span>
</label>
<label class="check_container">E-mail
  <input type="checkbox" class="check_booking" name="email">
  <span class="checkmark"></span>
</label>
<label class="check_container">Name
  <input type="checkbox" class="check_booking" name="name">
  <span class="checkmark"></span>
</label>
<label class="check_container">Birthdate
  <input type="checkbox" class="check_booking" name="birthdate">
  <span class="checkmark"></span>
</label>
 <label class="check_container">Gender
  <input type="checkbox" class="check_booking" name="gender">
  <span class="checkmark"></span>
</label>
<label class="check_container">Receive Newsletter
  <input type="checkbox" class="check_booking" name="receive_newsletter">
  <span class="checkmark"></span>
</label>
 <label class="check_container">Receive SMS
  <input type="checkbox" class="check_booking" name="receive_sms">
  <span class="checkmark"></span>
</label>
  
  <div class="checkbox_other">
       <h5>Other options so far that is possible to choose here is:</h5>  
       <label class="check_container">Can choose different stylists?  
  <input type="checkbox" class="check_booking"  name="other_stylists">
  <span class="checkmark"></span>
</label>
   
    </div>
  </div>
  </div>
</div>

<div id="treatment" class="tabcontent">
  <div class="top-section">
  <div class="title_wrapper"><h3>Category</h3></div>
  <div class="add_category_wrap">
   <a href="javascript:void(0);" class="slide-toggle" id="add_cat_link" >category <i class="fa fa-plus"></i></a>
  </div>
</div>
  <div class="category_list" id="list_category">
      
      
  </div>
 
   
    <div class="top-section"> <h3>Treatments</h3><p><a href="javascript:void(0);" class="slide-toggle_treatment"  ><i class="fa fa-plus"></i> Treatements</a></p></div>
    
   
 <div class="treatments_list" id="list_treatment">
      
      
  </div>
  
  
</div>

<div id="employee" class="tabcontent">
<div class="top-section">
  <div class="title_wrapper"><h3>List of employees</h3></div>
  <div class="add_category_wrap"> <a href="javascript:void(0);" class="slide-toggle_employee button button--aylen button--border-thin" id="add_employee" >Add employee <i class="fa fa-plus"></i></a></div>
</div>
  <div class="employee_list" id="list_employee">
      
      
  </div>
</div>

<div id="booking_time" class="tabcontent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
          <form id="target_schedule_cal" method="post">       
    <table id="working-time-table-id" class="table table-responsive table-hover table-bordered" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="table_title_wrap">
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Lunch Break From</th>
                <th>Lunch Break To</th>
                <th>Day Off</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <span class="margin8">
                        Monday                    </span>
                </td>
                <td>
                    <div class="form-group monday " style="display: inline-block;">
			
                        <div class="input-group bootstrap-timepicker">    
                            <input class="timepicker form-control " type="text" name="monday_start" value="09:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group monday " style="display: inline-block;">
                        <div class="input-group bootstrap-timepicker">   
                            <input class="left-radius timepicker form-control input-sm" type="text" name="monday_end" value="18:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group monday " style="display: inline-block;">
                        <div class="input-group bootstrap-timepicker">  
                            <input class="left-radius timepicker form-control input-sm" type="text" name="monday_lunch_start" value="13:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group monday " style="display: inline-block;">
                        <div class="input-group bootstrap-timepicker"> 
                            <input class="left-radius timepicker form-control input-sm" type="text" name="monday_lunch_end" value="14:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" rel="monday" name="monday_is_day_off" value="1" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Tuesday  </span>
                </td>
                <td>
                    <div class="input-group tuesday ">
                        <div class="form-group">
                            <div class="input-group bootstrap-timepicker">   
                                <input class="left-radius timepicker form-control input-sm" type="text" name="tuesday_start" value="09:00">
                                <div class="input-group-addon right-radius">
                                    <i class="fa fa-fw fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group tuesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="tuesday_end" value="18:00">
                            <div class="input-group-addon  right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group tuesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="tuesday_lunch_start" value="13:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group tuesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="tuesday_lunch_end" value="14:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" rel="tuesday" name="tuesday_is_day_off" value="1" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Wednesday   </span>
                </td>
                <td>
                    <div class="input-group wednesday ">
                        <div class="form-group">
                            <div class="input-group bootstrap-timepicker">
                                <input class="left-radius timepicker form-control input-sm" type="text" name="wednesday_start" value="09:00">
                                <div class="input-group-addon right-radius">
                                    <i class="fa fa-fw fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group wednesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="wednesday_end" value="18:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group wednesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="wednesday_lunch_start" value="13:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group wednesday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="wednesday_lunch_end" value="14:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="wednesday_is_day_off" value="1" rel="wednesday" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Thursday                    </span>
                </td>
                <td>
                    <div class="form-group thursday ">
                        <div class="input-group bootstrap-timepicker">  
                            <input class="left-radius timepicker form-control input-sm" type="text" name="thursday_start" value="09:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group thursday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="thursday_end" value="18:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group thursday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="thursday_lunch_start" value="13:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group thursday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="thursday_lunch_end" value="14:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="thursday_is_day_off" value="1" rel="thursday" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Friday                    </span>
                </td>
                <td>
                    <div class="form-group friday ">
                        <div class="input-group bootstrap-timepicker"> 
                            <input class="left-radius timepicker form-control input-sm" type="text" name="friday_start" value="09:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group friday ">
                        <div class="input-group bootstrap-timepicker">  
                            <input class="left-radius timepicker form-control input-sm" type="text" name="friday_end" value="18:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group friday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="friday_lunch_start" value="13:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group friday ">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="friday_lunch_end" value="14:00">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="friday_is_day_off" value="1" rel="friday" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Saturday  </span>
                </td>
                <td>
                    <div class="form-group saturday not-visibility">
                        <div class="input-group bootstrap-timepicker"> 
                            <input class="left-radius timepicker form-control input-sm" type="text" name="saturday_start" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group saturday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="saturday_end" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group saturday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="saturday_lunch_start" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group saturday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="saturday_lunch_end" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input checked="checked" type="checkbox" name="saturday_is_day_off" value="1" rel="saturday" class="is_day_off" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="margin8">
                        Sunday  </span>
                </td>
                <td>
                    <div class="form-group sunday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="sunday_start" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group sunday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="sunday_end" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group sunday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="sunday_lunch_start" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group sunday not-visibility">
                        <div class="input-group bootstrap-timepicker">
                            <input class="left-radius timepicker form-control input-sm" type="text" name="sunday_lunch_end" value="10:15">
                            <div class="input-group-addon right-radius">
                                <i class="fa fa-fw fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="icheckbox_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input checked="checked" type="checkbox" name="sunday_is_day_off" value="1" rel="sunday" class="is_day_off"></div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <button id="submit" class="btn btn-primary" autocomplete="off" value="Submit" name="submit" tabindex="9" type="submit"><i class="fa fa-fw fa-save"></i>&nbsp;&nbsp;Save</button>
                </td>
            </tr>
        </tfoot>
    </table>
    </form>
            </div>
        </div>
    </div>
</div>


<div id="booking_calnder" class="tabcontent">
      <!--div id='top'>

    Locales:
    <select id='locale-selector'></select>

  </div-->

  <div id='calendar'></div>
  <script>
    var initialLocaleCode = 'en';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');
var site_url="https://pssoftgroup.com/demo/duda/function.php";
var events_res="";
 $.ajax({
    type: "GET",
    url: site_url,
    async: false,
    data: 'action=get_all_events',
    success: function(result) {
       events_res=result;
   }
  });
//alert(events_res);
console.log(events_res);
var events_res_obj = jQuery.parseJSON(  events_res);
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
       eventRender: function(info) {
      var tooltip = new Tooltip(info.el, {
        title: info.event.extendedProps.description,
        placement: 'top',
        trigger: 'hover',
        container: 'body'
      });
    },
     locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: events_res_obj
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

 

</script>
     
</div>


<div id="mycategoryadd" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

           <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      
 <form id="target_add_cat" method="post">
                <input type="hidden" value="" name="category_id" id="category_id" />
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" id="cat_name" name="cat_name" class="form-control" value="">
                <span class="error" id="cat_error">Please enter category name!</span>
            </div>    
           
            <div class="form-group" style="float: right;">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>


    </div>


   
  </div>
</div> 

  </div>

</div>


<div id="treatmentadd" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

           <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      
 <form id="target_add_treatment" method="post">
                <input type="hidden" name="treat_id" id="treat_id" value=""/>
            <div class="form-group">
                <label>Name of Treatment</label>
                <input type="text" id="treat_name" name="treat_name" class="form-control" value="">
                <span class="error" id="treat_error">Please enter the treatment name!</span>
            </div>    
           <div class="form-group">
                <label>Price of Treatment</label>
                <input type="text" id="treat_price" name="treat_price" class="form-control" value="">
                <span class="error" id="treat_price_error">Please enter the treatment price!</span>
            </div> 
             <div class="form-group">
                <label>Currency </label>
                <select  id="treat_currency"  class="form-control" name="treat_currency" >
                    <option value="DKK">DKK</option>
                    <option value="SEK">SEK</option>
                    <option value="NOK">NOK</option>
                    <option value="EUR">EUR</option>
                    <option value="USD">USD</option>
                </select>
                <span class="error" id="treat_currency_error">Please enter the treatment currency!</span>
            </div> 
             <div class="form-group">
                <label>Time of duration </label>
                <input type="text" id="treat_time" name="treat_time" class="form-control" value="">
                <!--span class="error" id="treat_time_error">Please enter the treatment price!</span-->
            </div> 
             <div class="form-group">
                <label>Category </label>
                <select  id="treat_category"  class="form-control" name="treat_category" >
                   
                </select>
                <span class="error" id="treat_category_error">Please select a category!</span>
            </div> 
            <div class="form-group" style="float: right;">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>


    </div>


   
  </div>
</div> 

  </div>

</div>
 <div id="employeeadd" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

           <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form id="target_add_employee" enctype="multipart/form-data"  method="post">
                <input type="hidden" name="employee_id" id="employee_id" value=""/>
            <div class="form-group">
                <label>Name of Employee</label>
                <input type="text" id="employee_name" name="employee_name" class="form-control" value="">
                <span class="error" id="employee_error">Please enter the employee name!</span>
            </div>    
           <div class="form-group">
                <label>Type of Profession</label>
                <input type="text" id="employee_profession" name="employee_profession" class="form-control" value="">
                <span class="error" id="employee_profession_error">Please enter the employee  profession !</span>
            </div> 
            
             <div class="form-group">
                <label>Picture of the employee </label>
                <input type="file" id="employee_profile" name="employee_profile" class="form-control" value="">
              </div> 
             
            <div class="form-group" style="float: right;">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
 


    </div>


   
  </div>
</div> 

  </div>

</div>
    
<script>
var q=getUrlVars();
if(q=='t'){
    document.getElementById("button_"+q.t).click()
    //$( "#button_"+q.t ).trigger( "click" );
   // openCity('event', q.t);
}else{
   document.getElementById("defaultOpen").click();
}
$('.timepicker').timepicker();
$( ".close" ).click(function(){
   $(".modal").hide();
});
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
var site_url="https://pssoftgroup.com/demo/duda/function.php";
   $.ajax({
    type: "POST",
    url: site_url,
    data: 'action=global_variable_get',
    success: function(result) {
        //alert(result);
        var obj = jQuery.parseJSON(  result);
          $.each( obj, function( key, value ) {
              //alert(value.global_value);
              if(value.global_value=="true"){
                 $('input:checkbox[name='+value.global_key+']').attr('checked',true); 
              }else{
                  $('input:checkbox[name='+value.global_key+']').attr('checked',false);
              }
     
         })
   }
  });
$('.check_booking').click(function(){
//$('.mybox:checked').each(function(){
    var attr_value=$(this).is(':checked');
    var attr_name=$(this).attr('name');
   $.ajax({
    type: "POST",
    url: site_url,
    data: 'action=global_variable_update&attr_name='+attr_name+'&attr_value='+attr_value,
    success: function(result) {
       
      
    }
  });
    
});
$.ajax({
    type: "POST",
    url: site_url,
    data: 'action=get_schedule_cal',
    success: function(result) {
         var obj = jQuery.parseJSON(result);
         $.each( obj, function( key, value ) {
		 var day=value.day;
		  $('input[name='+day+'_start]').val(value.start);
          $('input[name='+day+'_end]').val(value.end); 		  
          $('input[name='+day+'_lunch_start]').val(value.lunch_start); 		  
          $('input[name='+day+'_lunch_end]').val(value.lunch_end); 		  
          //$('input[name='+day+'_is_day_off]').value(value.is_day_off); 		  
              if(value.is_day_off=="1"){
             $('input[name='+day+'_is_day_off]').attr('checked',true); 
           }else{
              $('input[name='+day+'_is_day_off]').attr('checked',false);
            }
     
          })
   }
  });

$( "#target_add_cat" ).submit(function( event ) {
  event.preventDefault();
     $('.error').hide();
      var cat_name = $("input#cat_name").val();
      if (cat_name == "") {
        $("#cat_error").show();
        $("input#cat_name").focus();
        return false;
      }
 var data = $('#target_add_cat').serializeArray();
      if($("#category_id").val()==""){
     var action="category_add"; 
      }else{
     var action="category_edit"; 
    }
    data.push({name: 'action', value: action});
var dataString =data;
$.ajax({
    type: "POST",
    url: site_url,
    data: dataString,
    success: function(result) {
     get_category_all();
     get_treatment_all();
    $("#mycategoryadd").hide();  
      $("input#cat_name").val('');
      $("input#category_id").val('');
    }
  });
  return false;
  });
  
  $( "#target_schedule_cal" ).submit(function( event ) {
  event.preventDefault();
    
      
 var data = $('#target_schedule_cal').serializeArray();
      
     var action="schedule_cal_edit"; 
  
    data.push({name: 'action', value: action});
var dataString =data;
$.ajax({
    type: "POST",
    url: site_url,
    data: dataString,
    success: function(result) {
   
        window.location.replace(window.location.pathname+'?t=booking_time');
    }
  });
  return false;
  });
  
$( "#target_add_treatment" ).submit(function( event ) {
 event.preventDefault();
  $('.error').hide();
    var data = $('#target_add_treatment').serializeArray();
     if($("#treat_id").val()==""){
     var action="add_treatment"; 
      }else{
     var action="edit_treatment"; 
    }
  
data.push({name: 'action', value: action});
    var dataString =data;
  
  $.ajax({
    type: "POST",
    url: site_url,
    data: dataString,
    
    success: function(result) {
    
      get_treatment_all();
      $("#treatmentadd").hide();
         }
  });
  return false;
  
});
$( "#target_add_employee" ).submit(function( event ) {
    
 event.preventDefault();
  $('.error').hide();
  var form = $('#target_add_employee')[0];

    var data = new FormData(form);
         // var files = $('#employee_profile').files;
 //var file = files[0]; 
    //var data = $('#target_add_employee').serializeArray();
     if($("#employee_id").val()==""){
     var action="add_employee"; 
      }else{
     var action="edit_employee"; 
    }
   data.append("action", action);  
      var dataString =data;
  
  $.ajax({
      
    type: "POST",
    url: site_url,
    data: data,
   enctype: 'multipart/form-data',
        processData: false,  // Important!
        contentType: false,
        cache: false,
    success: function(result) {
    $("#target_add_employee")[0].reset() ;
     get_employee_all();
     
      $("#employeeadd").hide();
         }
  });
  return false;
  
});
 $(document).ready(function(){
     get_category_all();
     get_treatment_all();
     get_employee_all(); 
        $(".slide-toggle").click(function(){
              $("#target_add_cat")[0].reset() ;
               $("input#category_id").val('');
               $("#mycategoryadd").show();
               alignModal();
           
        });
          $(".slide-toggle_treatment").click(function(){
              $("#target_add_treatment")[0].reset() ;
             $("#treat_id").val('');
             $("#treatmentadd").show();
               alignModal();
        });
           $(".slide-toggle_employee").click(function(){
              $("#target_add_employee")[0].reset() ;
             $("#employee_id").val('');
               $("#employeeadd").show();
                 alignModal();
        });
    });
    
    function edit_category(id){
    $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=category_get_with_id&id='+id,
    success: function(result) {
      var obj = jQuery.parseJSON(  result);
     $("input#cat_name").val(obj.cat_name);
       $("input#category_id").val(obj.id);
       $("#mycategoryadd").show();
       alignModal();

       }
  });
    }
  function edit_treatment(id){
      $('option:selected', "select#treat_currency").removeAttr('selected');
        $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=treatment_get_with_id&id='+id,
    success: function(result) {
      var obj = jQuery.parseJSON(  result);
        
     $("input#treat_id").val(obj.id);
    $("input#treat_name").val(obj.treat_name);
    $("input#treat_price").val(obj.treat_price);
    $("#treat_currency").val(obj.treat_currency);
    $("input#treat_time").val(obj.treat_time);
    $("#treat_category").val(obj.treat_category);
      $("#treatmentadd").show();
      alignModal();
       }
  });
    }
        function edit_employee(id){
     
 $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=employee_get_with_id&id='+id,
    success: function(result) {
      var obj = jQuery.parseJSON(  result);
        
     $("input#employee_id").val(obj.id);
    $("input#employee_name").val(obj.employee_name);
    $("input#employee_profession").val(obj.employee_profession);
     $("#employeeadd").show();
     alignModal();
       }
  });
    }
    function delete_category(id){
        
        $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=category_delete_with_id&id='+id,
    success: function(result) {
     get_category_all();
     get_treatment_all();

       }
  });
    }
    function delete_treatment(id){
        
        $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=treatment_delete_with_id&id='+id,
    success: function(result) {
     get_treatment_all();

       }
  });
    }
    function delete_employee(id){
        
        $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=employee_delete_with_id&id='+id,
    success: function(result) {
     get_employee_all();

       }
  });
    }
    function get_category_all(){
    $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=category_get',
    success: function(result) {
      var obj = jQuery.parseJSON(  result);
      var c = '';
      var o='';
      $.each( obj, function( key, value ) {
         c += '<div class="cat_data"><div class="cat_name"> '+ value.cat_name+'</div><div class="actions"> <button onclick="edit_category('+value.id+');"><i class="fa fa-edit"></i></button> <button onclick="delete_category('+value.id+');"><i class="fa fa-trash-o"></i></button></div></div>';
         o +='<option value="'+ value.id+'"> '+ value.cat_name+'</option>';
        })
$("#list_category").html(c);

$("#treat_category").html(o);

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
      
      $.each( obj, function( key, value ) {
           var treatments=value.treatments;
        if(treatments.length){
        c += '<div class="treatments"><h5> '+ value.cat_name+'</h5>';
       
        $.each(value.treatments, function( key1, value1 ) {
            c += '<div class="treatment"> <i class="fa fa-minus"></i> <span>'+ value1.treat_name+'</span><span>'+value1.treat_price+'</span><span>'+value1.treat_currency+'</span><div class="actions"> <button onclick="edit_treatment('+value1.id+');"><i class="fa fa-edit"></i></button> <button onclick="delete_treatment('+value1.id+');"><i class="fa fa-trash-o"></i></button></div></div>';   
         });
       
       c +='</div>';
        }
      })
  $("#list_treatment").html(c);
       }
  });
 }

  function get_employee_all(){
    $.ajax({
    type: "GET",
    url: site_url,
    data: 'action=employee_get',
    success: function(result) {
      var obj = jQuery.parseJSON(result);
      var c = '';
      
      $.each( obj, function( key, value ) {
           c += '<div class="employees"> <div class="employee_pro"><p class="img-box"><img align="middle" src="'+ value.employee_profile+'" class="emplyee_pic" /></p></div>';
       
        
            c += '<div class="employee"> <span> <strong>Employee Name:</strong>'+ value.employee_name+'</span><span class="emp_occ"><strong>Designation:</strong> '+value.employee_profession+'</span><div class="emp_actions"> <button class="button button--aylen button--border-thin" onclick="edit_employee('+value.id+');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button> <button class="button button--aylen button--border-thin" onclick="delete_employee('+value.id+');"><i class="fa fa-trash-o"></i> Delete</button></div></div>';   
         
       
       c +='</div>';
     
      })
  $("#list_employee").html(c);
       }
  });
 }

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

</script>
