/*スライドショー*/
function slideSwitch() {
 var $active = $('#slideshow img.active');

 if ($active.length == 0) $active = $('#slideshow img:last');

 var $next = $active.next().length ? $active.next() : $('#slideshow img:first');

 $active.addClass('last-active');

 $next.css({
   opacity: 0.0
  })
  .addClass('active')
  .animate({
   opacity: 1.0
  }, 1000, function () {
   $active.removeClass('active last-active');
  });
}

$(function () {
 setInterval("slideSwitch()", 5000);
});


/*フェードイン*/
$(function () {
 $(window).load(function () {
  var delaySpeed = 100;
  var fadeSpeed = 1000;
  $('.box4 ul li').each(function (i) {
   $(this).delay(i * (delaySpeed)).css({
    display: 'block',
    opacity: '0'
   }).animate({
    opacity: '1'
   }, fadeSpeed);
  });
 });
});
