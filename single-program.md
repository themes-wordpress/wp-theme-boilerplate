 <h2><?php the_title()?> Events</h2>

            
             <?php if($programEvents->have_posts()) {while($programEvents->have_posts()){$programEvents->the_post();?>
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
            <?php }} ?>