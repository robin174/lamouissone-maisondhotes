<?php while(has_sub_field("new_page_content")): ?>

    <?php if(get_row_layout() == 'block_subheading_h2'): // Subheading: h2 - done ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <h2 class="font--subheading"><?php the_sub_field('unit_subheading_h2'); ?></h2>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_subheading_h3'): // Subheading: h3 - done ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <h3 class="font--subheading"><?php the_sub_field('unit_subheading_h3'); ?></h3>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_introduction'): // Paragraph: Introduction - DONE ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <p class="intro"><?php the_sub_field('unit_introduction'); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_paragraph'): // Paragraph: Full Width - DONE ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <?php the_sub_field('unit_paragraph'); ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(get_row_layout() == 'block_image'): // layout: Image / Caption - Full Width - DONE ?>
        <!-- Repurpose this code to bring in the Alt tag via the object array (as opposed to image URL) -->
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <figure class="in-article">
                    <img class="border-shadow" src="<?php the_sub_field('unit_image'); ?>" alt="" />
                    <?php if( get_sub_field('unit_image_caption') ): ?>
                        <figcaption class="caption"><?php the_sub_field('unit_image_caption'); ?></figcaption>
                    <?php endif; ?>
                </figure>
            </div>
        </div>
        <!-- https://themaverickspirit.com/image-alt-tags-wordpress/ ?> -->
        <!-- https://support.advancedcustomfields.com/forums/topic/how-to-use-alt-tags/ -->
        <!-- https://www.advancedcustomfields.com/resources/image/ ?> -->
        <!-- https://www.aliciaramirez.com/2014/03/advanced-custom-fields-image-object-tutorial/ -->
    <?php endif; ?>
    


    
    <?php if(get_row_layout() == 'block_listing'): // layout: Listing, The Repeater
    $rows = get_sub_field('unit_listing'); // Repeater Field Name ?>
    <!-- Will this be boxed? Add the option to 'box' -->
        <div class="row">
            <!-- Image (left) -->
            <!-- Caption -->
            <!-- Repeater / bullet: -->
                <!-- Title -->
                <!-- Location -->
                <!-- link (display) -->
                <!-- link (url) -->

            <!-- Option 02 -->
                <!-- Image (left) -->
                <!-- Caption -->
                <!-- Title -->
                <!-- Description -->
                <!-- link (display) -->
                <!-- link (url) -->

            <!-- Option -->
                <!-- To box? ie would standout in an article --> 
        </div>
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_box_ii'): // layout: Box II, The Repeater - DONE
    $rows = get_sub_field('unit_box'); // Repeater Field Name ?>
        <div class="row">
            <?php if ($rows){
                foreach($rows as $row){
                    echo '<div class="small-12 medium-6 large-6 columns">';
                    echo '<figure>';
                    echo '<img class="border-shadow" src="'.$row['item_image'].'" alt="">';
                    echo '<figcaption class="caption">'.$row['item_caption'].'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                }
            } ?>
        </div>
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_box_iii'): // layout: Box III, The Repeater - DONE
    $rows = get_sub_field('unit_box'); // Repeater Field Name ?>
        <div class="row">
            <?php if ($rows){
                foreach($rows as $row){
                    echo '<div class="small-12 medium-4 large-4 columns">';
                    echo '<figure>';
                    echo '<img class="border-shadow" src="'.$row['item_image'].'" alt="">';
                    echo '<figcaption class="caption">'.$row['item_caption'].'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                }
            } ?>
        </div>
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_page_break'): // layout: Page Break - DONE ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <?php if( get_sub_field('unit_break') )
                {
                    echo '<hr class="article">';
                }
                ?>
            </div>
        </div>
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_footnote'): // layout: Footnote - DONE ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <section class="unit_footnote">
                    <p class="note"><?php the_sub_field('unit_note'); ?></p>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_sub_field('unit_site') == "vimeo"): // If Vimeo Selected - DONE ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <div class="responsive-embed vimeo">
                    <iframe width="640" height="360" src="//player.vimeo.com/video/<?php the_sub_field('unit_vimeo_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if(get_sub_field('unit_site') == "youtube"): // If YouTube Selected - DONE ?>
         <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <div class="responsive-embed youtube">
                    <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_sub_field('unit_youtube_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_template_part'): // layout: Template Part - DONE ?>
        <div class="row template">
            <?php
                global $templ;
                $templ = get_sub_field('unit_template_name');
            ?>
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <?php include(locate_template("templates/$templ".".php")); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'block_bullet_list'): // Bullet List - DONE ?>
        <div class="row">
            <div class="small-12 medium-centered medium-10 large-9 columns">
                <section>
                     <?php if( get_sub_field('unit_introduction_para') ): ?>
                        <p class="bullet-intro"><?php the_sub_field('unit_introduction_para'); ?></p>
                    <?php endif; ?>
                    <?php 
                    $values = get_sub_field('unit_bullet_point');
                    if ($values){ 
                    echo '<ul class="bullet">';
                    foreach($values as $value){
                        echo '<li class="">'.$value['item_list'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                    <?php if( get_sub_field('unit_conclusion_para') ): ?>
                        <p><?php the_sub_field('unit_conclusion_para'); ?></p>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    <?php endif; ?>


<?php endwhile; ?>