<?php get_header(); ?>
	
<!--Main Content-->
<main id='about-page'>

	<section id="about">
		<div class="restrict">
			<div class="text-wrap">
				<h2>Who We Are</h2>
				<p>Salt Water Murris Quandamooka Inc (SWMQ) is an Aboriginal contemporary visual arts and craft centre located on  North Stradbroke Island. The Quandamooka people identify as people of the sand and seas. Members are traditional custodians of the Quandamooka Country - the Noonuccal, Nughie and the Gorenpul clans.</p>
				<p>The purpose of SWMQ is to foster and preserve the cultural heritage of these clan groups through contemporary visual art and craft. This is done by providing the opportunity for cultural production and professional development for artists, curators and the community alike.</p>
			</div>
		</div>
    </section>
	
    <section id="goals">
		<div class="restrict">
			<h2>Our Values</h2>
			<ul>
				<li>
					<i class="fa fa-users" aria-hidden="true"></i>
					<div>
						<h3>Community Based Activities</h3>
						<p>Conducting school holiday art activities as well as workshops of schools and groups in the gallery workshop for screen printing, sand art (can come to your location, Brisbane), weaving, painting and linocut textile printing.</p>
					</div>
				</li>
				<li>
					<i class="fa fa-home" aria-hidden="true"></i>
					<div>
						<h3>Supporting Indigenous Artists</h3>
						<p>Operating an indigenous owned and managed enterprise.</p>
					</div>
				</li>
				<li>
					<i class="fa fa-paint-brush" aria-hidden="true"></i>
					<div>
						<h3>Providing Visual Art and Craft Pieces</h3>
						<p>Supplying unique lines of handmade locally designed pieces and gifts, producing commissions and public artwork.</p>
					</div>
				</li>
				<li>
					<i class="fa fa-sun-o" aria-hidden="true"></i>
					<div>
						<h3>Preserving and Cultivating Culture Heritage</h3>
						<p>Participating in gallery exhibitions in Australia and overseas, cultural days and community events.</p>
					</div>
				</li>
			</ul>
		</div>
    </section>
	
	<section id='contact'>
        <div class="restrict">
			<img src="<?php bloginfo('template_url'); ?>/asset/img/store-front-HD.jpg">
			<div class='contact-info'>
				<h2>Find Us</h2>
				<p><i class="fa fa-street-view" aria-hidden="true"></i>3 Ballow Road, Dunwich, North Stradbroke Island, QLD 4183</p>
				<p><i class="fa fa-clock-o" aria-hidden="true"></i>Open Monday thru Friday 9am to 3pm</p>
				<p><i class="fa fa-envelope-o" aria-hidden="true"></i>info@saltwatermurris.com.au</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i>(07) 3415 2373</p>
			</div>
        </div>
    </section>
	
    <section id="culture">
		<div class="restrict">
			<div class="text-wrap">
				<h2>Quandamooka Culture</h2>
				<p>The Quandamooka Peoples have lived on  Minjerribah or North Stradbroke Island for a very long time.</p>
				<p>Scientists say at least 25 000 years, however we say longer.  Our traditional estate – Quandamooka, the waters and islands of Central and Southern Moreton Bay and the coastal land and streams between the Brisbane to Logan Rivers, gave life to us in a time beyond memory.</p>
				<p>There are three clans that comprise the Peoples of the Quandamooka. They are the Nughi of Moorgumpin (now known as Moreton Island) and the Nunukul and Gorenpul of Terrangerri (Stradbroke Island). We hold our heads high as Traditional Owners with strong identity and culture.</p>
				<p>We are the Quandamooka People. We are the people of the sand and the water.</p>
				<p>Our people have retained our distinctive culture and we are living proof of our continuous occupation and cultural practice.  Our traditional practices have been upheld in contemporary form. Our People travel regularly through Quandamooka land and sea, caring for Country. Through consultations with our Elders and the Quandamooka Yoolooburrabee Aboriginal Corporation, we work together to protect our lands and sea Country in many ways, including taking part in cultural heritage management, Environmental Impact Assessments, negotiating over developments, educating the public and maintaining land and sea management responsibilities. Caring for our Country is our business.  It always has been and always will be.</p>
				<p>We sing its songs, tell it’s stories and dance to its rhythms to give honour and thanks to keep our place in it’s heart.</p>
			</div>
		</div>
    </section>
</main>
<script type='text/javascript'>
	// Add Text Highlight to paragraphs
	//select p elements
	const copy = document.querySelectorAll('.about p, .culture p');
	for (var i=0; i<copy.length; i++){
		// add span tag around paragraphs
		copy[i].innerHTML = '<span>' + copy[i].innerHTML + '</span>'; 
	}
	const spans = document.querySelectorAll('.about span, .culture span');
	for (var i=0; i<spans.length; i++){    
		// add text hightlight effect
		spans[i].classList.add('text-highlight');
	};
</script>

<?php get_footer(); ?>