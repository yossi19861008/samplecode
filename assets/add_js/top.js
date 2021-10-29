$(function(){
  serviceBtn();
});
//関数
////////////////////////////////
/*serviceBtn
----------------------------------------------------------------------------------*/
function serviceBtn(){
  $('.service_box').each(function(){
    var targetService = $(this);
    targetService.find('.aco_btn').on('click',function(){
      targetService.toggleClass('active');
      targetService.find('.aco_cont').slideToggle(400);
      return false;
    });
  });
}