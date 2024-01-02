 if (have_posts()){
    while(have_posts()) {
        the_post();
        ?>
        <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
        <p><?php the_content(); ?></p>
<?php 
    }

 }else{
    ?>
     <h2>No Post Found</h2>
<?php 
 }