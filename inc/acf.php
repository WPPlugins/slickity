<?php
/**
 * Advanced Custom Fields PRO fields
 *
 * @package Slickity
 * @version 1.0.0
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_57e83721185af',
  'title' => 'Slideshow Slides',
  'fields' => array (
    array (
      'key' => 'field_57e83725172e4',
      'label' => 'Manage Slides Below',
      'name' => 'slickity_slides',
      'type' => 'repeater',
      'instructions' => 'Click \'Add Slide\' to add a new slide to the slideshow.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => '',
      'max' => '',
      'layout' => 'block',
      'button_label' => 'Add Slide',
      'sub_fields' => array (
        array (
          'key' => 'field_57e83a37241d5',
          'label' => 'Options',
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
        ),
        array (
          'key' => 'field_57e93c18011dd',
          'label' => 'Enable mobile slide image',
          'name' => 'slickity_enable_mobile_image',
          'type' => 'true_false',
          'instructions' => 'Enable to display a different image on mobile.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_57e85346ded84',
          'label' => 'Style',
          'name' => 'slickity_style',
          'type' => 'select',
          'instructions' => 'Select a layout for this slide or use custom CSS.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'style-1' => 'Style 1 &mdash; 500px tall, vertically centered, aligned to right at 50% maximum width',
            'style-2' => 'Style 2 &mdash; 500px tall, vertically centered, aligned to left at 50% maximum width',
            'custom-css' => 'Custom CSS',
          ),
          'default_value' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'ui' => 0,
          'ajax' => 0,
          'return_format' => 'value',
          'placeholder' => '',
        ),
        array (
          'key' => 'field_57e85397ded85',
          'label' => 'Custom CSS',
          'name' => 'slickity_custom_css',
          'type' => 'textarea',
          'instructions' => 'Enter your custom CSS for this slide below.',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_57e85346ded84',
                'operator' => '==',
                'value' => 'custom-css',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        array (
          'key' => 'field_57e839a96fcc1',
          'label' => 'Enable schedule',
          'name' => 'slickity_enable_schedule',
          'type' => 'true_false',
          'instructions' => 'Toggle to enable and set a schedule to display this slide.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_57e83a4d241d6',
          'label' => 'Content',
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
        ),
        array (
          'key' => 'field_57e837b33212b',
          'label' => 'Slide Image',
          'name' => 'slickity_slide_image',
          'type' => 'image',
          'instructions' => 'Upload an image for the slide. If no \'Slide Content\' is provided, the image will be used as the slide\'s content. If content is provided, the image will be used as the background.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'full',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_57e83da189983',
          'label' => 'Link Slide Image',
          'name' => 'slickity_link_slide_image',
          'type' => 'true_false',
          'instructions' => 'Enable to link the slide image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_57e83b40a2a3d',
          'label' => 'Slide Link',
          'name' => 'slickity_slide_link',
          'type' => 'url',
          'instructions' => 'Optional. If no \'Slide Content\' is provided, this will be used to link the \'Slide Image\'.',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_57e83da189983',
                'operator' => '==',
                'value' => '1',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
        array (
          'key' => 'field_57e83c881d008',
          'label' => 'Open link in new window',
          'name' => 'slickity_slide_window',
          'type' => 'true_false',
          'instructions' => 'Enable to open the slide link in a new window.',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_57e83da189983',
                'operator' => '==',
                'value' => '1',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_57e8383134119',
          'label' => 'Slide Content',
          'name' => 'slickity_slide_content',
          'type' => 'wysiwyg',
          'instructions' => 'Optional.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 1,
        ),
        array (
          'key' => 'field_57e93e4a23fcb',
          'label' => 'Mobile',
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_57e93c18011dd',
                'operator' => '==',
                'value' => '1',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
        ),
        array (
          'key' => 'field_57e93c56011de',
          'label' => 'Mobile Slide Image',
          'name' => 'slickity_mobile_slide_image',
          'type' => 'image',
          'instructions' => 'Upload an image for the slide when mobile. If no \'Slide Content\' is provided, the image will be used as the slide\'s content. If content is provided, the image will be used as the background.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'full',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_57e93dba23fca',
          'label' => 'Mobile Breakpoint',
          'name' => 'slickity_mobile_breakpoint',
          'type' => 'text',
          'instructions' => 'Enter a breakpoint to switch from the mobile image to the main image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '768px',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_57e874143d0cb',
          'label' => 'Schedule',
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_57e839a96fcc1',
                'operator' => '==',
                'value' => '1',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
        ),
        array (
          'key' => 'field_57e83a915c17e',
          'label' => 'Begin showing slide on',
          'name' => 'slickity_start_date',
          'type' => 'date_time_picker',
          'instructions' => 'Select the date and time when this slide should be displayed.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'display_format' => 'F j, Y g:i a',
          'return_format' => 'Y-m-d H:i:s',
          'first_day' => 1,
        ),
        array (
          'key' => 'field_57e83ac65c17f',
          'label' => 'Stop showing slide on',
          'name' => 'slickity_slide_stop_date',
          'type' => 'date_time_picker',
          'instructions' => 'Select the date and time when this slide should no longer be sidplayed',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'display_format' => 'F j, Y g:i a',
          'return_format' => 'Y-m-d H:i:s',
          'first_day' => 1,
        ),
        array (
          'key' => 'field_57e8746835779',
          'label' => 'Show slide yearly',
          'name' => 'slickity_show_slide_yearly',
          'type' => 'true_false',
          'instructions' => 'Enable to show this slide year between the two dates selected above.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_57e95a21725a3',
          'label' => 'Show slide by day',
          'name' => 'slickity_show_slide_by_day',
          'type' => 'select',
          'instructions' => 'Select which days you want the slide to display.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'monday' => 'Monday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
          ),
          'default_value' => array (
          ),
          'allow_null' => 0,
          'multiple' => 1,
          'ui' => 1,
          'ajax' => 0,
          'return_format' => 'value',
          'placeholder' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'slickity-slideshow',
      ),
    ),
  ),
  'menu_order' => 1,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_57e8308e1dd32',
  'title' => 'Slide Options',
  'fields' => array (
    array (
      'key' => 'field_57e84d4563e90',
      'label' => 'Accessibility',
      'name' => 'slickity_accessibility',
      'type' => 'true_false',
      'instructions' => 'Enables tabbing and arrow key navigation',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e84d8463e91',
      'label' => 'Adaptive Height',
      'name' => 'slickity_adaptive_height',
      'type' => 'true_false',
      'instructions' => 'Enables adaptive height for single slide horizontal carousels.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e87bc52e871',
      'label' => 'Dots',
      'name' => 'slickity_dots',
      'type' => 'true_false',
      'instructions' => 'Show dot indicators.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e869599dcd1',
      'label' => 'Append Dots',
      'name' => 'slickity_append_dots',
      'type' => 'text',
      'instructions' => 'Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object).',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e87bc52e871',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e87bff2e872',
      'label' => 'Dots Class',
      'name' => 'slickity_dots_class',
      'type' => 'text',
      'instructions' => 'Class for slide indicator dots container',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e87bc52e871',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'slick-dots',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e84da563e92',
      'label' => 'Autoplay',
      'name' => 'slickity_autoplay',
      'type' => 'true_false',
      'instructions' => 'Enables autoplay.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e84dcd63e93',
      'label' => 'Autoplay Speed',
      'name' => 'slickity_autoplay_speed',
      'type' => 'number',
      'instructions' => 'Autoplay speed in milliseconds.',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e84da563e92',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 3000,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e932abebe64',
      'label' => 'Pause On Focus',
      'name' => 'slickity_pause_on_focus',
      'type' => 'true_false',
      'instructions' => 'Pause Autoplay On Focus',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e84da563e92',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e932dbebe65',
      'label' => 'Pause On Hover',
      'name' => 'slickity_pause_on_hover',
      'type' => 'true_false',
      'instructions' => 'Pause Autoplay On Hover',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e9330cebe66',
      'label' => 'Pause On Dots Hover',
      'name' => 'slickity_pause_on_dots_hover',
      'type' => 'true_false',
      'instructions' => 'Pause Autoplay when a dot is hovered',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e84da563e92',
            'operator' => '==',
            'value' => '1',
          ),
          array (
            'field' => 'field_57e87bc52e871',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e84e1063e94',
      'label' => 'Arrows',
      'name' => 'slickity_arrows',
      'type' => 'true_false',
      'instructions' => 'Prev/next arrows.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e84e3263e95',
      'label' => 'As Nav For',
      'name' => 'slickity_as_nav_for',
      'type' => 'text',
      'instructions' => 'Set the slider to be the navigation of other slider (Class or ID Name).',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e84e7963e96',
      'label' => 'Append Arrows',
      'name' => 'slickity_append_arrows',
      'type' => 'text',
      'instructions' => 'Change where the navigation arrows are attached (Selector, htmlString, Array, Element, jQuery object).',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e84e1063e94',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e869779dcd2',
      'label' => 'Previous Arrow',
      'name' => 'slickity_previous_arrow',
      'type' => 'text',
      'instructions' => 'Allows you to select a node or customize the HTML for the "Previous" arrow.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '<button type="button" class="slick-prev"><i class="slickity-icon-left-open"></i></button>',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e8699b9dcd3',
      'label' => 'Next Arrow',
      'name' => 'slickity_next_arrow',
      'type' => 'text',
      'instructions' => 'Allows you to select a node or customize the HTML for the "Next" arrow.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '<button type="button" class="slick-next"><i class="slickity-icon-right-open"></i></button>',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e87b3e2e86e',
      'label' => 'Center Mode',
      'name' => 'slickity_center_mode',
      'type' => 'true_false',
      'instructions' => 'Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e87b552e86f',
      'label' => 'Center Padding',
      'name' => 'slickity_center_padding',
      'type' => 'text',
      'instructions' => 'Side padding when in center mode (px or %)',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e87b3e2e86e',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '50px',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e93526ebe73',
      'label' => 'Use CSS',
      'name' => 'slickity_use_css',
      'type' => 'true_false',
      'instructions' => 'Enable/Disable CSS Transitions',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e87b8c2e870',
      'label' => 'CSS Ease',
      'name' => 'slickity_css_ease',
      'type' => 'text',
      'instructions' => 'CSS3 Animation Easing',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'ease',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e93557ebe74',
      'label' => 'Use Transform',
      'name' => 'slickity_use_transform',
      'type' => 'true_false',
      'instructions' => 'Enable/Disable CSS Transforms',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e87c2b2e873',
      'label' => 'Draggable',
      'name' => 'slickity_draggable',
      'type' => 'true_false',
      'instructions' => 'Enable mouse dragging',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e87c452e874',
      'label' => 'Fade',
      'name' => 'slickity_fade',
      'type' => 'true_false',
      'instructions' => 'Enable fade',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e87dd32a538',
      'label' => 'Focus On Select',
      'name' => 'slickity_focus_on_select',
      'type' => 'true_false',
      'instructions' => 'Enable focus on selected element (click)',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e87df32a539',
      'label' => 'Easing',
      'name' => 'slickity_easing',
      'type' => 'text',
      'instructions' => 'Add easing for jQuery animate. Use with easing libraries or default easing methods',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'linear',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_57e87e0c2a53a',
      'label' => 'Edge Friction',
      'name' => 'slickity_edge_friction',
      'type' => 'number',
      'instructions' => 'Resistance when swiping edges of non-infinite carousels',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '0.15',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => '',
      'max' => '',
      'step' => '.01',
    ),
    array (
      'key' => 'field_57e87e412a53b',
      'label' => 'Infinite',
      'name' => 'slickity_infinite',
      'type' => 'true_false',
      'instructions' => 'Infinite loop sliding',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e87e642a53c',
      'label' => 'Lazy Load',
      'name' => 'slickity_lazy_load',
      'type' => 'select',
      'instructions' => 'Set lazy loading technique. Accepts \'ondemand\' or \'progressive\'',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'ondemand' => 'On Demand',
        'progressive' => 'Progressive',
      ),
      'default_value' => array (
        0 => 'ondemand',
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'ajax' => 0,
      'return_format' => 'value',
      'placeholder' => '',
    ),
    array (
      'key' => 'field_57e922595dd87',
      'label' => 'Mobile First',
      'name' => 'slickity_mobile_first',
      'type' => 'true_false',
      'instructions' => 'Responsive settings use mobile first calculation',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e93359ebe68',
      'label' => 'Respond To',
      'name' => 'slickity_respond_to',
      'type' => 'select',
      'instructions' => 'Width that responsive object responds to. Can be \'window\', \'slider\' or \'min\' (the smaller of the two)',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'window' => 'Window',
        'slider' => 'Slider',
        'min' => 'Min (the smaller of the two)',
      ),
      'default_value' => array (
        0 => 'window',
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'ajax' => 0,
      'return_format' => 'value',
      'placeholder' => '',
    ),
    array (
      'key' => 'field_57e9339eebe69',
      'label' => 'Rows',
      'name' => 'slickity_rows',
      'type' => 'number',
      'instructions' => 'Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 1,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e933ceebe6a',
      'label' => 'Slides Per Row',
      'name' => 'slickity_slides_per_row',
      'type' => 'number',
      'instructions' => 'With grid mode intialized via the rows option, this sets how many slides are in each grid row.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 1,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e9341bebe6c',
      'label' => 'Slides To Show',
      'name' => 'slickity_slides_to_show',
      'type' => 'number',
      'instructions' => '# of slides to show',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 1,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e93449ebe6d',
      'label' => 'Slides To Scroll',
      'name' => 'slickity_slides_to_scroll',
      'type' => 'number',
      'instructions' => '# of slides to scroll',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 1,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e9346bebe6e',
      'label' => 'Speed',
      'name' => 'slickity_speed',
      'type' => 'number',
      'instructions' => 'Slide/Fade animation speed (ms)',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 300,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e9349bebe6f',
      'label' => 'Swipe',
      'name' => 'slickity_swipe',
      'type' => 'true_false',
      'instructions' => 'Enable swiping',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e934baebe70',
      'label' => 'Swipe To Slide',
      'name' => 'slickity_swipe_to_slide',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e934d5ebe71',
      'label' => 'Touch Move',
      'name' => 'slickity_touch_move',
      'type' => 'true_false',
      'instructions' => 'Enable slide motion with touch',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e934f0ebe72',
      'label' => 'Touch Threshold',
      'name' => 'slickity_touch_threshold',
      'type' => 'number',
      'instructions' => 'To advance slides, the user must swipe a length of (1/touchThreshold) * the width of the slider',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e934d5ebe71',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 5,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => 1,
      'max' => '',
      'step' => 1,
    ),
    array (
      'key' => 'field_57e9359cebe75',
      'label' => 'Variable Width',
      'name' => 'slickity_variable_width',
      'type' => 'true_false',
      'instructions' => 'Variable width slides',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e935b3ebe76',
      'label' => 'Vertical',
      'name' => 'slickity_vertical',
      'type' => 'true_false',
      'instructions' => 'Vertical slide mode',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e935c7ebe77',
      'label' => 'Vertical Swiping',
      'name' => 'slickity_vertical_swiping',
      'type' => 'true_false',
      'instructions' => 'Vertical swipe mode',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_57e935b3ebe76',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e935eeebe78',
      'label' => 'Right-To-Left',
      'name' => 'slickity_right-to-left',
      'type' => 'true_false',
      'instructions' => 'Change the slider\'s direction to become right-to-left',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57e9360aebe79',
      'label' => 'Wait For Animate',
      'name' => 'slickity_wait_for_animate',
      'type' => 'true_false',
      'instructions' => 'Ignores requests to advance the slide while animating',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 1,
    ),
    array (
      'key' => 'field_57e93637ebe7a',
      'label' => 'Z-Index',
      'name' => 'slickity_z-index',
      'type' => 'number',
      'instructions' => 'Set the z-Index values for slides, useful for IE9 and lower',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 1000,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => '',
      'max' => '',
      'step' => 1,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'slickity-slideshow',
      ),
    ),
  ),
  'menu_order' => 2,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;