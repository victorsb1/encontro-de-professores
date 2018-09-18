$(document).ready(function(){

$("#ap_sim").change(function(){
//    if($("#ap_sim").prop("checked", true)){
//        alert("OPs");
//         $("#ap_nao").prop("checked", true);
//    } else{
//        $("#ap_sim").prop("checked", false);
//    }
//Aqui eu coloquei o listnner para verificar
    
    
$('#lb_tipo').css({
      'display': 'block'
   });
    $('#lb_upload').css({
      'display': 'block'
   });
});

$("#ap_nao").change(function(){
   $('#lb_tipo').css({
      'display': 'none' 
   });
    
   $('#lb_upload').css({
      'display': 'none'
   });
});

$("#poster").change(function(){
   $('#lb_trabalho').css({
      'display': 'block' 
   }); 
});
    
$("#oficina").change(function(){
   $('#lb_trabalho').css({
      'display': 'none' 
   }); 
    
});   
    
$("#almoco").change(function(){
   $('#lb_almoco').css({
      'display': 'block' 
   }); 
});
    

    
});