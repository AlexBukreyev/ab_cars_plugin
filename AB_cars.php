<?php
add_action('widgets_init', 'ab_cars_widget');

function ab_cars_widget () {
    register_widget('AB_cars');
}

class AB_cars extends WP_Widget {

    public function __construct() {

        $args = array(
            'name' => 'cars',
            'description' => 'cars',
        );
        parent:: __construct('ab_cars', '', $args);
    }

    public function form($instance) {

        //
    }

    public function widget($args, $instance) {

        $posts_cars = get_posts(
            array(
                'post_type' => 'cars',
                'numberposts' => $instance['count'],
                //'post_status'   => 'publish',
            )
        );

        //echo'<pre>';var_dump(wp_get_attachment_image(get_post_meta($posts_cars[7]->ID)['_thumbnail_id'][0]));echo'</pre>';
        //echo wp_get_attachment_image(get_post_meta($posts_cars[7]->ID)['_thumbnail_id'][0]);
        echo '<h2>'. get_post_type_object('cars')->label .'</h2>';
        $rand_car = rand(0, count($posts_cars)-1);
        echo($rand_car).'<br><br>';

        foreach ($posts_cars as $key=>$posts_car){
            $posts_car_object = get_post_meta(($posts_car)->ID);
           //echo'<pre>';var_dump($posts_car_object["engine"][0]);echo'</pre>';

          echo wp_get_attachment_image($posts_car_object["_thumbnail_id"][0], full);

            if($key == $rand_car) echo 'active';
            echo $posts_car_object["engine"][0].'<br>';
            echo $posts_car->post_title.'<br>';
            echo $posts_car->post_content.'<br><br>';
        }

        var_dump(count($posts_cars));
        //echo'<pre>';var_dump($posts_cars);echo'</pre>';


    }

//    public function update() {
//
//    }
}
