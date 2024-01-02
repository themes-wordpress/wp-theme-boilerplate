<?php get_header();?>
<?php use Wp\Wpuniversity\Models\Posts\Event; $event = new Event();?>
<?php $upcomingEvents = $event->upcomingEvents();?>
<?php $pastEvents = $event->pastEvents();?>

<?php $header->pageBanner(['title' => 'All Events', 'subtitle' => 'See what is going on in our world.']) ;?>

</div>
<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
             <?php if($upcomingEvents->have_posts()) {while($upcomingEvents->have_posts()){$upcomingEvents->the_post();?>
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
            <h2 class="headline headline--small-plus t-center">Past Events</h2>
       
             <?php if($pastEvents->have_posts()) {while($pastEvents->have_posts()){$pastEvents->the_post();?>
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