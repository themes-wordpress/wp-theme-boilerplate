<?php get_header();?>
<?php use Wp\Wpuniversity\Models\Posts\Event; $event = new Event();?>
<?php $upcomingEvents = $event->upcomingEvents();?>
<?php $pastEvents = $event->pastEvents();?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ;?>);"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
       Upcoming Events
    </h1>
    <div class="page-banner__intro">
        <p>See what is going on in our world.</p>
    </div>
</div>
</div>  
<div class="container container--narrow page-section">
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
            <?php }} echo paginate_links([
                'total' => $upcomingEvents->max_num_pages
            ])  ?> 
           
</div>
<?php get_footer(); ?>