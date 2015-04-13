<?php
get_header();

if (have_posts()) :
    ?>

    <h2>Search results for : <?php the_search_query(); ?></h2>

    <?php
    while (have_posts()) : the_post();
        ?>

        <article class="post <?php if (has_post_thumbnail()) { ?> has_thumbnail <?php } ?>">

            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <p class="post-info">
                    <?php the_time('F jS, Y g:i a'); ?> | Posté par 
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?>
                </a> dans | 

                <?php
                $categories = get_the_category();
                $separator = ", ";
                $output = '';

                if ($categories) {

                    foreach ($categories as $category) {
                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                    }

                    echo trim($output, $separator);
                }
                ?>

            </p>

            <!-- post-thumbnail -->
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('small-thumbnail'); ?>
                </a>
            </div><!-- /post-thumbnail -->


        <?php the_content('Lire la suite &raquo;'); ?>
        </article>

        <?php
    endwhile;

else :
    echo '<P>Content not found</p>';
endif;

get_footer();
?>
