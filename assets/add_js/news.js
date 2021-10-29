$(function () {
  zeroPadding()
});


// wp-pagenaviゼロ埋め
function zeroPadding() {
  $('.wp-pagenavi').children('a ,span').not('.previouspostslink , .nextpostslink').each(function () {
    var no = $(this).text();
    if(String(no).length==1){
      var no2 = ( '00' + no ).slice( -2 );
      $(this).text(no2);
    }
    //$(this).find('span.current').addClass('page');

    // var zero = $('.page');
    // zero.each(function (i) {
    //   if(zero.length){

    //   }
    // });
  });
}