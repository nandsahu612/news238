<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CoverNews
 */

get_header(); ?>
        <div class="section-block-upper row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main"> 
 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4965030395022705"
     crossorigin="anonymous"></script>
<!-- Blog single page post ads top -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4965030395022705"
     data-ad-slot="8404695556"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <?php
                        while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('af-single-article'); ?>>
                                <div class="entry-content-wrap">
                                    <?php covernews_get_block('header'); ?>
                                    <?php

                                    get_template_part('template-parts/content', get_post_type());

                                    ?>
                                </div> 
                                   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4965030395022705"
     crossorigin="anonymous"></script>
<!-- Blog single page post ads bottom -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4965030395022705"
     data-ad-slot="3152368877"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>      
                                <?php
                                $show_related_posts = esc_attr(covernews_get_option('single_show_related_posts'));
                                if ($show_related_posts):
                                    if ('post' === get_post_type()) :
                                        covernews_get_block('related');
                                    endif;
                                endif;
                                ?>

                                <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;


                                ?>
                            </article>
                        <?php

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
                <?php ?>
                <?php
                get_sidebar(); ?>
            </div>
<?php
get_footer();