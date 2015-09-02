<?php

// Create the widget 
class Seventeen_Contact_Address extends WP_Widget {

    /**
     * Set up and define the widget
     */
    public function __construct() {
        parent::__construct(
            // Base ID of your widget
            'seventeen_contact_address', 

            // Widget name will appear in UI
            __('Contact Details Widget', 'seventeen'), 

            // Widget description
            array(
                'classname'   => 'seventeen_contact_details',
                'description' => __( 'A widget to diplay the gallery address and contact details.', 'jag_shoes' )
            )
        );
    }
	
	/**  
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {    

        extract( $args );

        $title = apply_filters( 'widget_title', $instance['title'] );
        $street = $instance['street'];
        $city = $instance['city'];
        $postCode = $instance['postCode'];
        $phone = $instance['phone'];
        $email = $instance['email'];
        
        echo $before_widget;

        if ( $title ):
            echo $before_title . $title . $after_title;
        endif;
        
        $address = '';
        
        if( '' != $street || '' != $phone || '' != $email ):
            $address .= '<div class="site-info vcard">';
            if( '' != $street || '' != $city || '' != $postcode ):
                $address .= '<p class="adr">';
                $address .= '<span class="street-address">' . esc_html( $street ) . '</span>';
                $address .= '<span class="region">' . esc_html( $city ) . '</span>';
                $address .= '<span class="postal-code">' . esc_html( $postCode ) . '</span>';
                $address .= '</p>';
            endif;
            if( '' != $phone ):
                $address .= '<span class="tel">' . esc_html( $phone ) . '</span>';
            endif;
            if( '' != $email ):
                $address .= '<span class="email"><a href="mailto:' . antispambot( esc_html( $email ) ) . '" target="_blank">' . antispambot( esc_html( $email ) ) . '</a></span>';
            endif;
            $address .= '<div>';
        endif;
        
        echo $address;
        
        echo $after_widget;
    }
    
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {    
        
        $title        = esc_attr( $instance['title'] );
        $street       = esc_attr( $instance['street'] );
        $city         = esc_attr( $instance['city'] );
        $postCode     = esc_attr( $instance['postCode'] );
        $phone        = esc_attr( $instance['phone'] );
        $email        = esc_attr( $instance['email'] );
    ?>
      
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>      
        <p>
            <label for="<?php echo $this->get_field_id('street'); ?>"><?php _e('Street:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('street'); ?>" name="<?php echo $this->get_field_name('street'); ?>" type="text" value="<?php echo $street; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('postCode'); ?>"><?php _e('Post Code:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('postCode'); ?>" name="<?php echo $this->get_field_name('postCode'); ?>" type="text" value="<?php echo $postCode; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo $email; ?>" />         
        </p>        
    
    <?php 
    }
    
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {        

        $instance = $old_instance;
        
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['street'] = strip_tags( $new_instance['street'] );
        $instance['city'] = strip_tags( $new_instance['city'] );
        $instance['postCode'] = strip_tags( $new_instance['postCode'] );
        $instance['phone'] = strip_tags( $new_instance['phone'] );
        $instance['email'] = strip_tags( $new_instance['email'] );

        return $instance;
     
    }
}

/**
 * Register and load the widget
 */
add_action( 'widgets_init', function() {
    register_widget( 'Seventeen_Contact_Address' );
});
