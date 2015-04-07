<title>
    Shebatech IT services Ltd.
</title>
<meta name="description" content="ShebaTech IT Services, your local Calgary IT Company. We can help you with web, mobile and design solutions. We also offer Consulting services." />

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/ShebaFlex.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="/css/jquery-ui.css" />
<link rel="stylesheet" href="/css/lightbox.css" />


<script src="/js/jquery.min.js"></script> 
<script src="/js/jquery-ui.min.js"></script> 
<script src="/js/lightbox.min.js"></script> 
<script src="/js/jquery.smint.js"></script> 
<script>
	$(document).ready( function() {
		//scroll
		$('a[href^="#"]').click(function(e) {
	        e.preventDefault();
	        var target = this.hash, $target = $(target);
	        $('html, body').stop().animate({
	            'scrollTop': $target.offset().top
	        }, 900, 'swing', function() {
	            window.location.hash = target;
	        });
	    });

		//slider
		$("#1").fadeIn(2000);
		$("#slider #1 img").delay(1500).fadeIn(2000);
		$("#1").delay(5000).fadeOut(2000);

		var count = 2;
		var slides = 4

		setInterval(function(){
			$("#slider #"+count).fadeIn(2000);
			$("#slider #"+count+" img").delay(1500).fadeIn(2000);
			$("#slider #"+count).delay(5000).fadeOut(2000);

			if(count == slides){
				count = 1;
			}else{
				count = count+1;
			}
		},9200);
	});
</script>
<script>
	//google anlytics
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42544983-2', 'auto');
  ga('send', 'pageview'); 

</script>
