<?php

add_action('admin_head', 'editor_full_width_gutenberg');

function editor_full_width_gutenberg() {
  echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
		max-width: none !important;
	}
    .block-editor__container .wp-block {
        max-width: none !important;
    }
    /*code editor*/
    .edit-post-text-editor__body {
    	max-width: none !important;
    	margin-left: 2%;
    	margin-right: 2%;
    }
  </style>';
}
