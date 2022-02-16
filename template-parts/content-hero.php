    <!-- using the permalink gives a link to the post -->

    <!-- <h1>
        <a href="<?php the_permalink(); ?>">
            Check out <?php the_title(); ?>

        </a>
    </h1> -->

    <!-- background image for hero  -->
    <!-- here is used an inline style attribute to attach the hero image as a css background directly onto the element -->

    <!-- make the hero have a min height of 100vh, cover the background, center it, add flexbox and make the content center vertically and horizontally  -->
    <section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="
	  <?php if (get_field('hero_image')): ?>
			background-image: url(<?php the_field('hero_image'); ?>)
				<?php endif; ?>
				">
        <!-- make text white and center it -->
        <div class="hero-content white tc">
            <!-- the location title  -->
            <h1 class="b mt0 mb3 ttu hero-heading archivo"> <?php the_title(); ?> </h1>

            <!-- the location subheading -->
            <?php if (get_field('subhead')): ?>
            <p class="hero-subhead mb6 mt0 ttu tenor mw7"><?php the_field('subhead'); ?></p>
            <?php endif; ?>

            <!-- formatted date  -->
            <?php if (get_field('date')): ?>
            <p class="f6 date ma0 ttu tracked archivo">
                <?php 
			// convert  date into format that php can work with
			// then format it to be nice + readable
			echo date("F Y", strtotime(get_field('date')))
			?>

            </p>
            <?php endif; ?>
        </div>
    </section>