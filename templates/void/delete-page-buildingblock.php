<?php /* Need to add an update block: colour background? And with a divider underneath. PLUS a month/year update. */ ?>

<?php /* Building Block for pages with sidebar navigation / Template Part */ ?>
<div class="row">
    <div class="small-12 medium-12 large-12 columns">
        <h1><?php the_title(); ?></h1>
    </div>
</div><!-- end .row -->

<?php while(has_sub_field("new_page_content")): ?>
    <?php if(get_row_layout() == 'subheading'): // layout: Subheading ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
               <h3><?php the_sub_field('heading'); ?></h3>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'introduction_full_width'): // layout: Introduction - Full Width ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
               <p class="introduction"><?php the_sub_field('introduction'); ?></p>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'paragraph_full_width'): // layout: Paragraph - Full Width ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
               <?php the_sub_field('paragraph'); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>



    <?php if(get_row_layout() == 'image_full_width'): // layout: Image / Caption - Full Width ?>
        <div class="row image-full-width">
            <div class="small-12 medium-12 large-12 columns">
                <figure class="icon">
                    <img class="border-shadow" src="<?php the_sub_field('image'); ?>" />
                    <?php if( get_sub_field('caption') ): ?>
                        <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
                    <?php endif; ?>
                </figure>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'area_box_ii'): // layout: Area Box II, The Repeater 
        $rows = get_sub_field('area_box'); //Repeater Field Name ?>
        <div class="row">
            <?php if ($rows){
                foreach($rows as $row){
                    echo '<div class="small-12 medium-6 large-6 columns">';
                    echo '<figure>';
                    echo '<img class="border-shadow" src="'.$row['image'].'" alt="">';
                    echo '<figcaption class="box-caption">'.$row['caption'].'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                }
            } ?>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'area_box_iii'): // layout: Area Box III, The Repeater 
        $rows = get_sub_field('area_box'); //Repeater Field Name ?>
        <div class="row">
            <?php if ($rows){
                foreach($rows as $row){
                    echo '<div class="small-12 medium-4 large-4 columns">';
                    echo '<figure>';
                    echo '<img class="border-shadow" src="'.$row['image'].'" alt="">';
                    echo '<figcaption class="box-caption">'.$row['caption'].'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                }
            } ?>
        </div>
    <?php endif; ?>


    <!-- To refer to the below: Pullout quote -->
    <!-- To refer to the below: Pullout quote -->
    <!-- To refer to the below: Pullout quote -->
    <?php if(get_row_layout() == 'pullout_quote'): // layout: OLD : TO DELETE ?>
        <div class="row pullout">
            <div class="small-12 medium-12 large-12 columns">
            	<div class="indent">
                	<h5><?php the_sub_field('pullout'); ?></h5>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <!-- Should be full width like the images from 'Area' on LM -->
    <?php if(get_row_layout() == 'pullout_quote'): // layout: Pullout / Quote  ?>
        <div class="row spoken">
            <div class="small-12 medium-12 large-12 columns">
                <div class="indent">
                        <div class="small-12 medium-12 large-12 columns">
                            <h5><?php the_sub_field('quote'); ?></h5><!-- Tweak HTML tag from H5 -->
                            <p class="credit-primary"><?php the_sub_field('credit_primary'); ?><br />
                                <?php if( get_sub_field('credit_secondary') ): ?>
                                    <span class="credit-secondary"><?php the_sub_field("credit_secondary"); ?></span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div><!-- end .row -->
                    
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'page_break'): // layout: Page Break ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <?php if( get_sub_field('break') )
                {
                    echo '<hr>';
                }
                ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'bullet_list'): // layout: Bulleted List 
        $rows = get_sub_field('bullet_point'); //Repeater Field Name ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div>
                    <?php if ($rows){ 
                    echo '<ul>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'conclusion'): // layout: Conclusion ?>
        <div class="row conclusion">
            <div class="small-12 medium-12 large-12 columns">
                <div class="break">
                    <p class="con"><?php the_sub_field('finish'); ?></p><!-- Tweak HTML tag from H5 -->
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'call_to_action'): // layout: Call To Action ?>
        <div class="row cta indent-cta">
            <div class="small-12 medium-12 large-12 columns">

                <div class="row">
                    <div class="small-12 medium-2 large-2 columns">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lm-illustration-sm.png" alt="La Mouissone - Illustration" />
                    </div>
                    <div class="small-12 medium-10 large-10 columns">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <?php the_sub_field('paragraph_full_width'); ?>
                    </div>
                </div><!-- end .row -->

            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'footnote'): // layout: Footnote ?>
        <div class="row footnote">
            <div class="small-12 medium-12 large-12 columns">
                <div class="break">
                    <p class="note"><?php the_sub_field('note'); ?></p><!-- Tweak HTML tag from H5 -->
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'shortcode'): // layout: Shortcode / WYSIWYG ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div>
                    <?php $content = get_sub_field( 'code' ); 
                    echo do_shortcode($content);?>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'template_part'): // layout: Template Part ?>
        <div class="row template">
            <?php
                global $templ;
                $templ = get_sub_field('template_name');
            ?>
            <div class="small-12 medium-12 large-12 columns">
                <?php include(locate_template("$templ".".php")); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_sub_field('site') == "vimeo"): // If Vimeo Selected ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="flex-video vimeo">
                    <iframe src="//player.vimeo.com/video/<?php the_sub_field('vimeo_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_sub_field('site') == "youtube"): // If YouTube Selected ?>
         <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="flex-video youtube">
                    <iframe src="//www.youtube.com/embed/<?php the_sub_field('youtube_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <?php the_sub_field("youtube_link"); ?>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

   

    <!-- Ear-marked for deletion -->
    <!-- Ear-marked for deletion -->
    <!-- Ear-marked for deletion -->
    <?php if(get_row_layout() == 'imageleft_pararight'): // layout: Image Left / Paragraph Right ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="row">
                    <div class="small-12 medium-6 large-6 columns">
                        <figure class="icon">
                            <img class="border-shadow" src="<?php the_sub_field('imageleft'); ?>" />
                            <?php if( get_sub_field('captionleft') ): ?>
                                <figcaption class="caption"><?php the_sub_field('captionleft'); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    </div>
                    <div class="small-12 medium-6 large-6 columns">
                        <?php the_sub_field('pararight'); ?>
                    </div>
                </div><!-- end .row -->
            </div>
        </div><!-- end .row -->
    <?php endif; ?>



    <!-- Ear-marked for deletion -->
    <!-- Ear-marked for deletion -->
    <!-- Ear-marked for deletion -->
    <?php if(get_row_layout() == 'paraleft_imageright'): // layout: Paragraph Left / Image Left ?>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="row">
                    <div class="small-12 medium-6 large-6 columns">
                        <?php the_sub_field('paraleft'); ?>
                    </div>
                    <div class="small-12 medium-6 large-6 columns">
                        <figure class="icon">
                            <img class="border-shadow" src="<?php the_sub_field('imageright'); ?>" />
                            <?php if( get_sub_field('captionright') ): ?>
                                <figcaption class="caption"><?php the_sub_field('captionright'); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    </div>
                </div><!-- end .row -->
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

<?php endwhile; ?>