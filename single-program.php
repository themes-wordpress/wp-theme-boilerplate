<?php get_header();?>
<?php use Wp\Wpuniversity\Models\Posts\Program; $program = new Program(); ?>
<?php $programEvents = $program->events();?>
<?php $programPrefessors = $program->professors();?>


<?php  if(have_posts()) { the_post();?>
   <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ;?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ;?></h1>
        <div class="page-banner__intro">
            <p>DON'T FORGET TO REPLACE ME LATER!</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
<div class="metabox metabox--position-up metabox--with-home-link">
    <p>
        <a class="metabox__blog-home-link" href="<?php  echo get_post_type_archive_link('program') ;?>"><i class="fa fa-home" aria-hidden="true"></i> Programs Home</a> <span class="metabox__main"><?php the_title();?></span>
     </p>
   </div>

<div class="generic-content"><?php the_content() ?></div>
        
           <?php if($programEvents->have_posts()) {?>
                <h2><?php the_title()?> Events</h2>
                <?php while($programEvents->have_posts()){$programEvents->the_post(); ?>
                    <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <?php $eventDate = new DateTime(get_field('event_date')); ?>
                    <span class="event-summary__month"><?php echo $eventDate->format('M') ?></span>
                    <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                    <p>
                        <?php if(has_excerpt()) {echo wp_trim_words(get_the_excerpt(),18);}else {echo wp_trim_words(get_the_content(), 18);}?> 
                        <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                    </p>
                </div>
            </div>
                <?php } ?>
           <?php }?> 
             <?php wp_reset_postdata(); ?>
        
             <?php if($programPrefessors->have_posts()) {?>
                <h2><?php echo get_the_title()?> Professors</h2>
                <?php while($programPrefessors->have_posts()){$programPrefessors->the_post(); ?>
                    <div class="event-summary">
                    
                    <a class="event-summary__date t-center" href="<?php the_permalink(); ?>" style="color: white;">
                    <?php $eventDate = new DateTime(get_field('event_date')); ?>
                        
                       <?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                        <p>
                            <?php if(has_excerpt()) {echo wp_trim_words(get_the_excerpt(),18);}else {echo wp_trim_words(get_the_content(), 18);}?> 
                            <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                        </p>
                    </div>
                </div>
                <?php } ?>

             <?php }?>
              
       
</div>

<?php }else{ ?>

<h1>Page Not Found!</h1>
<?php } ?>

<?php get_footer()?>