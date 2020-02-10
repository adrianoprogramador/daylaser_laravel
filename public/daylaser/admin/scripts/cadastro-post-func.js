$(function(){
      $("#categoria").click(function(){
        if($("#categoria").val() =='servicos'){
        $("#produtos-class").show("slow");
        }else {
          $("#produtos-class").hide("slow");

        }
        
    });
});
