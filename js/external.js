$().ready(function() {
	
	$('a#twitter').hover(
  		function () {
  	 		$('#hover-twitter').show();
  		}, 
  		function () {
  			$('#hover-twitter').hide();
  		}
	);
	
	$('a#blog').hover(
  		function () {
  	 		$('#hover-blog').show();
  		}, 
  		function () {
  			$('#hover-blog').hide();
  		}
	);
	
	$('a#github').hover(
  		function () {
  	 		$('#hover-github').show();
  		}, 
  		function () {
  			$('#hover-github').hide();
  		}
	);
	
	$('a#linkedin').hover(
  		function () {
  	 		$('#hover-linkedin').show();
  		}, 
  		function () {
  			$('#hover-linkedin').hide();
  		}
	);
	
});
