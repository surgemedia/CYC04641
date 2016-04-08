<?php
/**
 * Template Name: Home Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div id="hero-section" class="row">
      <?php 
			addComponent([
					'template' => 'molecule/carousel',
					'vars' => [
								get_field('jumbotron_title'), //title
								get_field('jumbotron_link'), //link text
								get_field('jumbotron_link_location'), //link text
								get_field('Jumbotron'), //repeater
								]
			]);
       ?>

		<?php 
			addComponent([
					'template' => 'molecule/img-title-desc-link',
					'vars' => [
								get_field('photo_block_1_image'), //title
								get_field('photo_block_1_title'), //link text
								get_field('photo_block_1_description'), //link text
								'View Sponsors',
								'#sponsors'
								]
			]);
			addComponent([
					'template' => 'molecule/img-title-desc-link',
					'vars' => [
								get_field('photo_block_2_image'), //img
								get_field('photo_block_2_title'), //title
								get_field('photo_block_2_description'), //description
								get_field('photo_block_2_link_1'), //link
								get_field('photo_block_2_link_1_location'), //location
								get_field('photo_block_2_link_2'), //link
								get_field('photo_block_2_link_2_location'), //location
								]
			]);
       ?>
</div>
<div class="row" id="ourteam">
<div class="bg-red">
    <div class="container text-center">
        <h1>
            Our Team
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officia, est illum. Similique quasi quidem blanditiis libero earum, fugit laudantium, eaque, praesentium doloribus enim et. Architecto alias vitae quaerat atque?
        </p>
    </div>
   </div>
    <div class="col-md-4 img-title-subtitle text-center" style="background-image:url(https://unsplash.it/500/500
)">
        <h1>
            Liz Young
        </h1>
        <a class="view" href="">
            View Profile
        </a>
    </div>
    <div class="col-md-4 img-title-subtitle text-center" style="background-image:url(https://unsplash.it/500/500
)">
        <h1>
            Liz Young
        </h1>
        <a class="view" href="">
            View Profile
        </a>
    </div>
    <div class="col-md-4 img-title-subtitle text-center" style="background-image:url(https://unsplash.it/500/500
)">
        <h1>
            Liz Young
        </h1>
        <a class="view" href="">
            View Profile
        </a>
    </div>
    <div class="col-md-4 img-title-subtitle text-center" style="background-image:url(https://unsplash.it/500/500
)">
        <h1>
            Liz Young
        </h1>
        <a class="view" href="">
            View Profile
        </a>
    </div>
</div>
<div class="row" style="background-image:url(<?php echo get_field('sponsor_image') ?>)">
<section class="text-center" id="sponsors" >
    <h1>
        Sponsors
    </h1>
    <p class="container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque minus porro quaerat iure vel ut blanditiis, placeat mollitia. Iusto atque tempora necessitatibus quibusdam laboriosam expedita. Eius ad illo, in accusantium.
    </p>
    <div class="container">
        <ul class="list-inline">
            <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
            <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
            <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
           <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
            <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
           <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
           <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
            <li class="col-md-3">
                <img alt="" src="https://unsplash.it/200/100">
                    <small>
                    </small>
                </img>
            </li>
  </ul>
    </div>
    </div>
</section>
<section id="contact" style="background-image:url(https://unsplash.it/1920/1080)">
	<div class="container text-center">
		<h2><?php echo get_field('form_title'); ?></h2>
		<p><?php echo get_field('form_description'); ?></p>
		<?php displayGravityForm(get_field('form')) ?>
	</div>
</section>

<?php endwhile; ?>
