<?php
/*
Template Name: Toucan
*/

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h1><?php echo get_post_meta( get_the_ID(), 'Title', true ); ?></h1>

		<?php
			$release = get_post_meta( get_the_ID(), 'Date', true );
			$datetime1 = new DateTime();
			$datetime2 = new DateTime($release);
			$diff = date_diff($datetime1, $datetime2);
			$diffBase = $diff->format('%a - %H:%M:%S');	
		?>

		<table>
			<tr>
				<td><?php echo $diff->format('%a'); ?></td>
				<td><?php echo $diff->format('%H'); ?></td>
				<td><?php echo $diff->format('%M'); ?></td>
				<td><?php echo $diff->format('%S'); ?></td>
			</tr>
			<tr>
				<td class="tdText">DAYS</td>
				<td class="tdText">HOURS</td>
				<td class="tdText">MINUTES</td>
				<td class="tdText">SECONDS</td>
			</tr>
		</table>

		<p><?php echo get_post_meta( get_the_ID(), 'Texte', true ); ?></p>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" id="modal" data-toggle="modal" data-target="#exampleModal">
			NOTIFY ME
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="formsave" action="." method="POST">
						<input name="username" type="text" placeholder="Write your username here">
						<input name="email" type="email" placeholder="Write your email here">
						<button type="submit" class="btn btn-primary save">Register</button>
					</form>
				</div>
				</div>
			</div>
			</div>
		
		<a target="_blank" rel="noopener noreferrer" href="https://theuselessweb.com/" class="aboutus">ABOUT US</a>
		<p>Template Handcrafted by <a target="_blank" rel="noopener noreferrer" href="http://codincamp.fr/">Codi n Camp</a></p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
