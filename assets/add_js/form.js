// JavaScript Document
$(function () {
  validateCheck();
  autokana();
  
  /*validateCheck
  ----------------------------------------------------------------------------------*/

  function validateCheck() {
    //$("form").addClass("h-adr");
    $(".required").each(function () {
      $(this).find('input[type="text"],textarea,input[type="checkbox"]').addClass('validate[required]');
      $(this).find('input[type="email"]').addClass('validate[required,custom[email]]');
      if($(this).children('dt').text()==="フリガナ"){
        $(this).find('input[type="text"]').addClass('validate[custom[katakana]]')
      }
      //$(this).find('input[type="email"]:not(#email)').addClass('validate[required,equals[email]]');
    });

    $("form").validationEngine('attach', {
      //promptPosition: "inline"
      promptPosition: "bottomLeft"
    });
  }

    /*autokana
  ----------------------------------------------------------------------------------*/
function autokana(){
      $.fn.autoKana('input[name="氏名"]', 'input[name="フリガナ"]',{katakana : true});
    }
});