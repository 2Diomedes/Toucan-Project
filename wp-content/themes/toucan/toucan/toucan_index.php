<?php
/*
Template Name: Toucan
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	
		<h1>WE ARE LAUNCHING IN</h1>
		<h2>5</h2>
		<h3>DAYS</h3>
		<p>Codi - High quality Bottstrap HTML5 Coming Soon Landing Page Template Comes with fully responsive layout, Cool features, and Clean design.
		</p>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		 NOTIFY ME
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form" method="POST">
				<input type="email" placeholder="Write your email here">
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary save">Save changes</button>
			</div>
			</div>
		</div>
		</div>
		
		<a href="#" class="aboutus">ABOUT US</a>
		<p>Template Handcrafted by <a target="_blank" rel="noopener noreferrer" href="http://codincamp.fr/">Codi n Camp</a></p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
