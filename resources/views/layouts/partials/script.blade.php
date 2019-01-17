<!-- jquery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->
<!-- bootstrap -->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--slick carousel -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!--Portfolio Filter-->
<script src="{{ asset('js/imgloaded.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<!-- Magnific-popup -->
<script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script>
$(document).ready(function(){
  $(".dropdown-trigger").dropdown();
  });
</script>
<script type="text/javascript">
	    function googleTranslateElementInit() {
	      new google.translate.TranslateElement({pageLanguage: 'id', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
	    }

		function triggerHtmlEvent(element, eventName) {
		  var event;
		  if (document.createEvent) {
			event = document.createEvent('HTMLEvents');
			event.initEvent(eventName, true, true);
			element.dispatchEvent(event);
		  } else {
			event = document.createEventObject();
			event.eventType = eventName;
			element.fireEvent('on' + event.eventType, event);
		  }
		}

		jQuery('.lang-select').click(function() {
		  var theLang = jQuery(this).attr('data-lang');
		  jQuery('.goog-te-combo').val(theLang);

		  //alert(jQuery(this).attr('href'));
		  window.location = jQuery(this).attr('href');
		  location.reload();

		});
	  </script>
<!--Counter-->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- WOW JS -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('js/main.js') }}"></script>

  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
