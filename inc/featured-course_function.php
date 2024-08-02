<?php

// course shortcode function 

function a2n_courses_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts
    );
    ob_start();

    $a2n_course_id = $atts['id'];
    if (!empty($a2n_course_id)) {
        $a2n_course_ids = $a2n_course_id;
        $a2n_course_ids = (explode(",", $a2n_course_ids));
        $course_id = array();
        if ($a2n_course_ids) {
            foreach ($a2n_course_ids as $a2n_course_id) {
                $course_id[] = $a2n_course_id;
            }
        }
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => 6,
            'post__in' => $course_id,
            'post_status' => 'published',
        );
    }
    $fetch = new WP_Query($args);
    if ($fetch->have_posts()) {
        while ($fetch->have_posts()) {
            $fetch->the_post();
            $course_ID = get_the_ID();
            $course_title = get_the_title($course_ID);
            $course_img = get_the_post_thumbnail_url($course_ID, "large");
            $average_rating = get_post_meta($course_ID, 'average_rating', true);
            $rating_count = get_post_meta($course_ID, 'rating_count', true);
            $units = bp_course_get_curriculum_units($course_ID);
            $duration = $total_duration = 0;


            foreach ($units as $unit) {
                $duration = get_post_meta($unit, 'vibe_duration', true);
                if (empty($duration)) {
                    $duration = 0;
                }
                if (get_post_type($unit) == 'unit') {
                    $unit_duration_parameter = apply_filters('vibe_unit_duration_parameter', 60, $unit);
                } elseif (get_post_type($unit) == 'quiz') {
                    $unit_duration_parameter = apply_filters('vibe_quiz_duration_parameter', 60, $unit);
                }
                $total_duration = $total_duration + $duration * $unit_duration_parameter;
            }

            $course_link = get_the_permalink($course_ID);
            $author_id = get_the_author_meta('ID');
            $author_img = get_avatar($author_id, 30);
            $author_name = get_the_author_meta('display_name');

            // $taxonomy = 'level';
            // $course_terms = wp_get_post_terms($course_ID, $taxonomy, array('fields' => 'all'));

            ?>
            <!-- Featured Courses Card start  -->
            <div class="a2n_featured-card">
                <div class="course-img">
                    <img src="<?php echo $course_img ?>" alt="" />
                </div>
                <div class="course-contents">
                    <div class="course-details">
                        <span class="rating"><?php echo $average_rating ?></span>
                        <div class="a2n-ratings-container bp_blank_stars">
                            <?php
                            if (is_numeric($average_rating)) {
                                $percentage = ($average_rating / 5) * 100;
                                ?>
                                <div style="width:<?php echo $percentage ?>%;" class="bp_filled_stars"></div>

                                <?php
                            }
                            ?>
                        </div>
                        <span class="rating-count">
                            <?php
                            if (is_numeric($rating_count)) {
                                echo '(' . $rating_count . ')';
                            }
                            ?>
                        </span>
                    </div>
                    <div class="course-title">
                        <a href="<?php echo esc_attr($course_link); ?>">
                            <?php
                            echo esc_html($course_title);
                            ?>
                        </a>
                    </div>
                    <div class="course-details cd">
                        <div class="course_icon-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course_icons/1-2.svg" alt="" />
                            <span><?php echo count($units); ?> lesson</span>
                        </div>
                        <div class="course_icon-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course_icons/2-2.svg" alt="" />
                            <span>
                                <?php
                                if (!function_exists('convert_seconds_to_hours_minutes')) {
                                    function convert_seconds_to_hours_minutes($seconds)
                                    {
                                        $hours = floor($seconds / 3600);
                                        $minutes = floor(($seconds % 3600) / 60);
                                        return sprintf('%02dh %02dm', $hours, $minutes);
                                    }
                                }
                                $courseDuration = convert_seconds_to_hours_minutes($total_duration);
                                echo $courseDuration;
                                ?>
                            </span>
                        </div>
                        <div class="course_icon-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course_icons/3-1.svg" alt="" />
                            <!-- <span>level</span> -->
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course-user course-details">
                            <?php echo $author_img; ?>
                            <span class="user-text"><?php echo $author_name; ?></span>
                        </div>
                        <div class="course-details course-price">
                            <?php
                            bp_course_credits();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Courses Card end  -->
            <?php
        }
        wp_reset_query();
    } else {
        echo "no course found";
    }
    return ob_get_clean();
}
add_shortcode('a2n_courses', 'a2n_courses_shortcode');