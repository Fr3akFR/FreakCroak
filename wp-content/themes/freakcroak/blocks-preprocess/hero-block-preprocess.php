<?php

/**
 * Register Hero Block.
 */
function freakcroak_register_hero_block() {
    // register a Accordion block
    acf_register_block( [
      'name'        => 'hero-block',
      'title'        => __( 'Hero Block', 'freakcroak' ),
      'description'    => __( 'Hero Block.', 'freakcroak' ),
      'render_callback'  => 'hero_block_render_callback',
      'mode'        => 'auto',
      'icon'        => 'sort',
      'keywords'      => [ 'hero', 'block' ],
    ] );
}
add_action('acf/init', 'freakcroak_register_hero_block');


/**
* Render the Hero Slider Block template
*/
function hero_block_render_callback( $block, $content = '', $is_preview = false ) {
  // Load fields values and assign to variables
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['content'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;

  // Render the block.
  Timber::render('/blocks/hero-block/hero-block.twig', $context );
}
