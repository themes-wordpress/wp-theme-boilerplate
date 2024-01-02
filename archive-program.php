<?php get_header();?>
<?php use Wp\Wpuniversity\Models\Posts\Program; $program = new Program();?>
<?php $basicPrograms = $program->basicPrograms();?>
<?php $advancedPrograms = $program->advancedPrograms();?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ;?>);"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
       All Programs
    </h1>
    <div class="page-banner__intro">
        <p>There is something for everyone. Have a look around.</p>
    </div>
</div>
</div>
<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Basic Programs</h2>
             <?php if($basicPrograms->have_posts()) {while($basicPrograms->have_posts()){$basicPrograms->the_post();?>
                <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <?php $eventDate = new DateTime(get_field('event_date')); ?>
                    <span class="event-summary__month"><?php echo $eventDate->format('M') ?></span>
                    <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                    <p>
                        <?php if(has_excerpt()) {echo get_the_excerpt();}else {echo wp_trim_words(get_the_content(), 18);}?> 
                        <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                    </p>
                </div>
            </div>
            <?php }} ?> 
           
            <!-- <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
                    <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
                </div>
            </div> -->

            <p class="t-center no-margin"><a href="<?php echo site_url('/upcoming-events') ?>" class="btn btn--blue">View All Upcoming Events</a></p>
        </div>
    </div>
    <div class="full-width-split__two">
    <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Advanced Programs</h2>
       
             <?php if($advancedPrograms->have_posts()) {while($advancedPrograms->have_posts()){$advancedPrograms->the_post();?>
                <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <?php $eventDate = new DateTime(get_field('event_date')); ?>
                    <span class="event-summary__month"><?php echo $eventDate->format('M') ?></span>
                    <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                    <p>
                        <?php if(has_excerpt()) {echo get_the_excerpt();}else {echo wp_trim_words(get_the_content(), 18);}?> 
                        <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                    </p>
                </div>
            </div>
            <?php }} ?> 
            <p class="t-center no-margin"><a href="<?php echo site_url('/past-events') ?>" class="btn btn--blue">View All Past Events</a></p>
    </div>
    </div>
</div>


<?php get_footer(); ?>