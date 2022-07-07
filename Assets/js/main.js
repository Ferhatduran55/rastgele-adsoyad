$(document).ready(function(){
  $("#Generate").on("click",function(){
    $.ajax({
      url:"index.php",
      method:"POST",
      dataType:"html",
      data:{
        type: "NewUser",
      },
      success: function(data){
        $("#name").text(data);
      },
    });
  });
});
