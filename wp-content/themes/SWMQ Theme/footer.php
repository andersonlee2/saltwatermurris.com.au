<!--footer-->
<footer>
    <div class='container'>
		<div class="left">
			<div class='contact-info'>
				<h4>Contact Us</h4>
				<p><i class="fa fa-street-view" aria-hidden="true"></i>3 Ballow Road, Dunwich, North Stradbroke Island, QLD 4183</p>
				<p><i class="fa fa-clock-o" aria-hidden="true"></i>Open Monday thru Friday 9am to 3pm</p>
				<p><i class="fa fa-envelope-o" aria-hidden="true"></i>info@saltwatermurris.com.au</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i>(07) 3415 2373</p>
			</div>
		</div>
		<div class="right">
			<p>We acknowledge Aboriginal People and Torres Strait Islander People as the first inhabitants of the nation and acknowledge Traditional Owners of the lands where our staff live, learn, and work.</p>
			<h5> Saltwater Murris Quandamooka Aboriginal Art Gallery &COPY; 2019</h5>
		</div>
	</main>
	
<script type='text/javascript'>
	(function($){
		
		$('.hamburger').on( 'click', function(){
			if ($(window).width() <= 696) {
				$('.site-nav ul').slideToggle();
				$('.site-nav ul ul').css('display', 'none');
			}
		});
			
		$('.site-nav ul li').on( 'click', function(){
			if ($(window).width() <= 696) {	
				$(this).find('ul').slideToggle();
			}
		});
		
		
		$(window).resize(function(){
			if( $(window).width() > 696){
				$('.site-nav ul').removeAttr('style');
			}
		});
		
	}(jQuery));
</script>

</footer>
<?php wp_footer(); ?>
</body>
</html>