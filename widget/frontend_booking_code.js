

 $( document ).ready(function() {
//   if($.session.get('user_id')=="undefined"){
//       $('#active_user_div').hide();
//       $('#unactive_user_div').show();
//   }else{
//       $('#active_user_div').show();
//       $('#unactive_user_div').hide();
//   }
})


// Accordion Script Starts Here
$("#service_wrapper").on("click",".link", function(event){
 event.preventDefault();
        // create accordion variables
        var accordion = $(this);
        var accordionContent = accordion.next('.submenu');

        // toggle accordion link open class
        accordion.toggleClass("open");
        // toggle accordion content
        accordionContent.slideToggle(250);
});
