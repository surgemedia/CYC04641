<?php
/**
 * Template Name: Home Template
 */
?>
<?php 


 ?>
<?php while (have_posts()) : the_post(); ?>
<div id="hero-section" class="row">
        <?php 
            // menu in molecule/carousel
            //view gallery panel & menu
			addComponent([
					'template' => 'molecule/carousel',
					'vars' => [
								get_field('jumbotron_title'), //title
								get_field('jumbotron_link'), //link text
								get_field('Jumbotron'), //repeater
								]
			]);
       ?>
        <?php 
            addComponent([
                    'template' => 'molecule/carousel-modal',
                    'vars' => [ get_field('gallery') ]]);
            //photo blocks
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
            //photo blocks
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
<div class="row">
<div id="ourTeam" class="bg-red">
    <?php 
    //Title Blurb
    addComponent([
                    'template' => 'molecule/title-blurb',
                    'vars' => [
                            'ourTeamTitle',
                            'container text-center',
                            get_field('red_section_title'),
                            get_field('red_section_blurb'),
                              ]
                ]);
     ?>
   </div>
   <?php 
        // WP_Query arguments
        $args = array (
            'post_type'              => array( 'people' ),
            'post__in'              => get_field('our_team'),

        );
        // The Query
        $team_query = new WP_Query( $args );
        // The Loop
        if ( $team_query->have_posts() ) {
            while ( $team_query->have_posts() ) {
                $team_query->the_post();
                //team members
                addComponent([
                                'template' => 'molecule/profile-img-title-link',
                                'vars' => [
                                        get_the_id().'teamMember',
                                        'col-md-4 text-center team-item',
                                        getFeaturedUrl(get_the_id()),
                                        get_the_title(),
                                        get_the_content(),
                                            ] 
                                            ]);
            }
        } else { /* no posts */ }
        wp_reset_postdata();
        $spacer_class = 'col-md-8';
        switch (sizeof(get_field('our_team'))) {
             case 1:
                  addComponent([
                                'template' => 'molecule/spacer',
                                'vars' => ['col-md-8 text-center',
                                            get_field('team_placeholder_image','option'),
                                            get_field('team_placeholder_blurb','option'),

                                            ] 
                                ]);
                break;
            case 2:
                 addComponent([
                                'template' => 'molecule/spacer',
                                'vars' => ['col-md-4 text-center',
                                             get_field('team_placeholder_image','option'),
                                            get_field('team_placeholder_blurb','option'),
                                            ]  
                                ]);
                break;
            case 4:
                 addComponent([
                                'template' => 'molecule/spacer',
                                'vars' => ['col-md-8 text-center',
                                             get_field('team_placeholder_image','option'),
                                            get_field('team_placeholder_blurb','option'),
                                            ]  
                                ]);
                break;
            case 5:
                addComponent([
                                'template' => 'molecule/spacer',
                                'vars' => ['col-md-4 text-center',
                                             get_field('team_placeholder_image','option'),
                                            get_field('team_placeholder_blurb','option'),
                                            ]  
                                ]);
                break;

            default:
                break;
        }
        
    ?>
    
</div>
<div class="row" style="background-image:url(<?php echo get_field('sponsor_image') ?>)">
<section class="text-center" id="sponsors" >
    <h2>
        <?php echo get_field('sponsor_section_title') ?>
    </h2>
    <p class="container">
      <?php echo get_field('sponsor_section_blurb') ?>
    </p>
    <div class="container">
        <ul class="list-inline">
        
<?php 
        // WP_Query arguments
        $args = array (
            'post_type'              => array( 'sponsor' ),
            'post__in'              => get_field('sponsors'),

        );

        // The Query
        $spon_query = new WP_Query( $args );

        // The Loop
        if ( $spon_query->have_posts() ) {
            while ( $spon_query->have_posts() ) {
                $spon_query->the_post();
                //team members
                addComponent([
                                'template' => 'atom/sponser-item',
                                'vars' => [
                                            '',
                                            'sponsor-item col-md-3',
                                            getFeaturedUrl(get_the_id()),
                                            get_the_title(),
                                            get_field('type_of_sponser'),
                                 ] ]); }
        } else {  }
        // Restore original Post Data
        wp_reset_postdata();
    ?>
    </div>
    </section>
 </div>
<div class="row">
<section id="contact" style="background-image:url(<?php echo get_field('form_background') ?>)">
	<div class="container text-center">
        <div class="col-md-6 col-md-offset-3">
		<h2><?php echo get_field('form_title'); ?></h2>
		<p><?php echo get_field('form_description'); ?></p>
        <?php displayGravityForm(get_field('form')) ?>
        </div>
	</div>
</section>
</div>
<?php endwhile; ?>
