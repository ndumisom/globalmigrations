<html>
<head>
<script>

window.addEvent('domready', function() {

  var status = {
    'true': 'open',
    'false': 'close'
  };

  // -- vertical

  var myVerticalSlide = new Fx.Slide('vertical_slide');

  $('v_slidein').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.slideIn();
  });

  $('v_slideout').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.slideOut();
  });

  $('v_toggle').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.toggle();
  });

  $('v_hide').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.hide();
    $('vertical_status').set('text', status[myVerticalSlide.open]);
  });

  $('v_show').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.show();
    $('vertical_status').set('text', status[myVerticalSlide.open]);
  });

  // When Vertical Slide ends its transition, we check for its status
  // note that complete will not affect 'hide' and 'show' methods
  myVerticalSlide.addEvent('complete', function() {
    $('vertical_status').set('text', status[myVerticalSlide.open]);
  });


  // -- horizontal
  var myHorizontalSlide = new Fx.Slide('horizontal_slide', {mode: 'horizontal'});

  $('h_slidein').addEvent('click', function(event){
    event.stop();
    myHorizontalSlide.slideIn();
  });

  $('h_slideout').addEvent('click', function(event){
    event.stop();
    myHorizontalSlide.slideOut();
  });

  $('h_toggle').addEvent('click', function(event){
    event.stop();
    myHorizontalSlide.toggle();
  });

  $('h_hide').addEvent('click', function(event){
    event.stop();
    myHorizontalSlide.hide();
    $('horizontal_status').set('text', status[myHorizontalSlide.open]);
  });

  $('h_show').addEvent('click', function(event){
    event.stop();
    myHorizontalSlide.show();
    $('horizontal_status').set('text', status[myHorizontalSlide.open]);
  });

  // When Horizontal Slide ends its transition, we check for its status
  // note that complete will not affect 'hide' and 'show' methods
  myHorizontalSlide.addEvent('complete', function() {
    $('horizontal_status').set('text', status[myHorizontalSlide.open]);
  });
});
</script>
<style>
    h3.section {
  margin-top: 1em;
}

#vertical_slide, #horizontal_slide {
  background: #D0C8C8;
  color: #8A7575;
  padding: 10px;
  border: 5px solid #F3F1F1;
  font-weight: bold;
}

div.marginbottom {
  /* Since the Fx.Slide element resets margins, we set a margin on the above element */
  margin-bottom: 10px;
}
</style>
</head>
<body>
<h3 class="section">Vertical</h3>
<div class="marginbottom">
  <a id="v_slideout" href="#">slide out</a> |
  <a id="v_slidein" href="#">slide in</a> |
  <a id="v_toggle" href="#">toggle</a> |
  <a id="v_hide" href="#">hide</a> |
  <a id="v_show" href="#">show</a> |
  <strong>status</strong>: <span id="vertical_status">open</span>
</div>

<div id="vertical_slide">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<h3 class="section">Horizontal</h3>
<div class="marginbottom">
  <a id="h_slideout" href="#">slide out</a> |
  <a id="h_slidein" href="#">slide in</a> |
  <a id="h_toggle" href="#">toggle</a> |
  <a id="h_hide" href="#">hide</a> |
  <a id="h_show" href="#">show</a> |
  <strong>status</strong>: <span id="horizontal_status">open</span>
</div>
</body>
</html>