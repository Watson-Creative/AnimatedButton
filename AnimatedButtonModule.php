<?php
   /*
   Plugin Name: Animated Button Module
   Plugin URI: https://github.com/Watson-Creative/Gravity-Forms-Fusion-Module
   GitHub Plugin URI: https://github.com/Watson-Creative/Gravity-Forms-Fusion-Module
   description: Add module to Fusion Builder to create an animated button designed by Anna Gray
   Version: 1.0.0
   Author: Alex Tryon
   Author URI: http://www.alextryonpdx.com
   License: GPL2
   */





function fusion_element_animated_button() {

    fusion_builder_map( array(
        'name'            => esc_attr__( 'Button - Animated', 'fusion-builder' ),
        'shortcode'       => 'wc_animated_button',
        'params'          => array(
                array(
                  'type'        => 'tinymce',
                  'heading'     => esc_attr__( 'Link Text', 'fusion-builder' ),
                  'description' => esc_attr__( 'Enter link Text', 'fusion-builder' ),
                  'param_name'  => 'element_content',
                  'value'       => '',
                  'placeholder' => true),
                array(
                  'type'        => 'link_selector',
                  'heading'     => esc_attr__( 'Link', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select link', 'fusion-builder' ),
                  'param_name'  => 'link_url',
                  'value'       => '',),
                array(
                  'type'        => 'textfield',
                  'heading'     => esc_attr__( 'Width', 'fusion-builder' ),
                  'description' => esc_attr__( 'Element width - valid css including %/px/%/em', 'fusion-builder' ),
                  'param_name'  => 'width',
                  'value'       => '',),
                array(
                  'type'        => 'textfield',
                  'heading'     => esc_attr__( 'Max Width', 'fusion-builder' ),
                  'description' => esc_attr__( 'Element max width - valid css including %/px/%/em', 'fusion-builder' ),
                  'param_name'  => 'max_width',
                  'value'       => '',),
                 array(
                  'type'        => 'textfield',
                  'heading'     => esc_attr__( 'Padding', 'fusion-builder' ),
                  'description' => esc_attr__( 'Element padding in valid css notation... include px/%/em in value eg: "300px, 2%"', 'fusion-builder' ),
                  'param_name'  => 'padding',
                  'value'       => '',),
                 array(
                  'type'        => 'textfield',
                  'heading'     => esc_attr__( 'Margin', 'fusion-builder' ),
                  'description' => esc_attr__( 'Element margins in valid css notation... include px/%/em in value eg: "300px, 2%"', 'fusion-builder' ),
                  'param_name'  => 'margin',
                  'value'       => '',),
                array(
                  'type'        => 'checkbox_button_set',
                  'heading'     => esc_attr__( 'Use Custom Border Thickness?', 'fusion-builder' ),
                  'param_name'  => 'custom_thickness',
                  'value'       => array(
                        'true'     => esc_attr__( 'Custom', 'fusion-builder' ),
                        'false'     => esc_attr__( 'Default', 'fusion-builder' ),
                   ),
                ),
                 array(
                  'type'        => 'range',
                  'heading'     => esc_attr__( 'Border Thickness', 'fusion-builder' ),
                  'description' => esc_attr__( 'Border thickness in pixels', 'fusion-builder' ),
                  'param_name'  => 'border_thickness',
                  'value'       => '2',
                  'min'         => '0',
                  'max'         => '10',
                  'step'        => '1', ),
                array(
                  'type'        => 'checkbox_button_set',
                  'heading'     => esc_attr__( 'Use Custom Font Size?', 'fusion-builder' ),
                  'param_name'  => 'custom_font',
                  'value'       => array(
                        'true'     => esc_attr__( 'Custom', 'fusion-builder' ),
                        'false'     => esc_attr__( 'Default', 'fusion-builder' ),
                   ),
                ),
                array(
                  'type'        => 'range',
                  'heading'     => esc_attr__( 'Font Size', 'fusion-builder' ),
                  'description' => esc_attr__( 'Font size in pixels', 'fusion-builder' ),
                  'param_name'  => 'font_size',
                  'value'       => '14',
                  'min'         => '0',
                  'max'         => '60',
                  'step'        => '1', ),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Link Text Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select link text color and opacity ', 'fusion-builder' ),
                  'param_name'  => 'link_color',
                  'value'       => '',),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Border Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select border color  and opacity ', 'fusion-builder' ),
                  'param_name'  => 'border_color',
                  'value'       => '',),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Background Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select background color and opacity (inactive state)', 'fusion-builder' ),
                  'param_name'  => 'background_color',
                  'value'       => '',),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Link Text Hover Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select link text hover color and opacity ', 'fusion-builder' ),
                  'param_name'  => 'link_hover_color',
                  'value'       => '',),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Border Hover Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select border color and opacity (hover state)', 'fusion-builder' ),
                  'param_name'  => 'border_hover_color',
                  'value'       => '',),
                array(
                  'type'        => 'colorpickeralpha',
                  'heading'     => esc_attr__( 'Background Hover Color', 'fusion-builder' ),
                  'description' => esc_attr__( 'Select background color and opacity (hover state)', 'fusion-builder' ),
                  'param_name'  => 'background_color_hover',
                  'value'       => '',)
        ),
    ) );
}
add_action( 'fusion_builder_before_init', 'fusion_element_animated_button' );



function wcab_enqueue_styles() {
    wp_enqueue_style( 'wcab-button-style', plugins_url( 'button-defaults.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'wcab_enqueue_styles' );




function wcab_random_password( $length = 22 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

function wcab_animated_button( $atts, $content = null ){
    $a = shortcode_atts( array(
        'link_text' => '',
        'link_url' => '',
        'width' => '',
        'max_width' => '',
        'padding' => '',
        'margin' => '',
        'border_thickness' => '',
        'link_color' => '',
        'background_color' => '',
        'link_hover_color' => '',
        'background_color_hover' => '',
        'font_size' => '',
        'border_color' => '',
        'border_hover_color' => ''

    ), $atts);        

    $id = wcab_random_password();

    $block = "<div id='" . $id . "' class='btn-wrap'><a class='btn btn-red btn-fx _tb' style='opacity: 1;' href='". $a['link_url'] ."' ><div class='btn-over btn-over-red btn-over-fx'></div><div class='btn-over btn-over-red btn-over-fx'></div> <span class='btn-txt btn-txt-dark'>" .$content. "</span> </a></div>";
    $style = "<style>";
    
    if($a['link_color'] !== ''){
      $style .= "#" . $id . " .btn-txt{  color: " .$a['link_color']. ";}";
    }
    if($a['link_hover_color'] !== ''){
      $style .= "#" . $id . " .btn-red:hover .btn-txt{  color: " .$a['link_hover_color']. ";}";
    }
    if($a['padding'] !== ''){
      $style .= "#" . $id . " .btn{  padding: " .$a['padding']. ";}";
    }
    if($a['custom_thickness'] == 'true'){
      $style .= "#" . $id . " .btn{  border-width: " .$a['border_thickness']. "px;}";
    }
    if($a['background_color_hover'] !== ''){
      $style .= "#" . $id . " .btn-over-red:after, ". $id ." .btn-over-red:before{  background: " .$a['background_color_hover']. ";}";
    }
    if($a['margin'] !== ''){
      $style .= "#" . $id . ".btn-wrap{  margin: " .$a['margin']. ";}";
    }
    if($a['width'] !== ''){
      $style .= "#" . $id . ".btn-wrap{  width: " .$a['width']. ";}";
    }
    if($a['max_width'] !== ''){
      $style .= "#" . $id . ".btn-wrap{  max-width: " .$a['max_width']. ";}";
    }
    if($a['background_color'] !== ''){
      $style .= "#" . $id . " .btn{  background-color: " .$a['background_color']. ";}";
    }
    if($a['custom_font'] == 'true'){
      $style .= "#" . $id . " .btn{  font-size: " .$a['font_size']. "px;}";
    }
    if($a['border_hover_color'] !== ''){
      $style .= "#" . $id . " .btn:hover{  border-color: " .$a['border_hover_color']. ";}";
    }

    $style .= "</style>";


    $block .= $style;
    return $block;
}
add_shortcode('wc_animated_button', 'wcab_animated_button');



?>