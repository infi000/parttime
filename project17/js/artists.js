 window.onload = function() {
     $("#myModal").modal("show");
 };

 $("#btn_save").on("click", function(e) {
     var name = $("#input_name").val();
     var time=new Date();
     var hour=time.getHours();
     var msg="";
     if(hour>6&&hour<12){
     	msg="Good morning  "+name;
     }else if(hour>=12&&hour<16){
     	msg="Good afternoon  "+name;
     }else{
     	msg="Good evening  "+name;
     }
     $("#log").html(msg)
 });