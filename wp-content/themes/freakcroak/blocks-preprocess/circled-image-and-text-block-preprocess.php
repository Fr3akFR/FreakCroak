<?php

/**
 * Register Hero Block.
 */
function freakcroak_register_circled_image_and_text_block() {
    // register a Accordion block
    acf_register_block( [
      'name'        => 'circled-image-and-text-block',
      'title'        => __( 'Circled Image And Text Block', 'freakcroak' ),
      'description'    => __( 'Circled Image And Text Block.', 'freakcroak' ),
      'render_callback'  => 'circled_image_and_text_block_render_callback',
      'mode'        => 'auto',
      'icon'        => 'sort',
      'keywords'      => [ 'circle', 'image', 'text', 'block' ],
    ] );
}
add_action('acf/init', 'freakcroak_register_circled_image_and_text_block');


/**
* Render the Hero Slider Block template
*/
function circled_image_and_text_block_render_callback( $block, $content = '', $is_preview = false ) {
  // Load fields values and assign to variables
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['content'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;

  // Render the block.
  Timber::render('/blocks/circled-image-and-text-block/circled-image-and-text-block.twig', $context );
}
