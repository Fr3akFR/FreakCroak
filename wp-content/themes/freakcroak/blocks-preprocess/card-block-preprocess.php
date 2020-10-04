<?php

/**
 * Register Hero Block.
 */
function freakcroak_register_card_block() {
    // register a Accordion block
    acf_register_block( [
      'name'        => 'card-block',
      'title'        => __( 'Card Block', 'freakcroak' ),
      'description'    => __( 'Card Block.', 'freakcroak' ),
      'render_callback'  => 'card_block_render_callback',
      'mode'        => 'auto',
      'icon'        => 'sort',
      'keywords'      => [ 'card', 'image', 'text', 'block' ],
    ] );
}
add_action('acf/init', 'freakcroak_register_card_block');


/**
* Render the Hero Slider Block template
*/
function card_block_render_callback( $block, $content = '', $is_preview = false ) {
  // Load fields values and assign to variables
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['content'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;

  // Render the block.
  Timber::render('/blocks/card-block/card-block.twig', $context );
}
