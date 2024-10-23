<?php
namespace EssentialBlocks\Blocks;

use EssentialBlocks\Core\Block;

class Icon extends Block {
    protected $frontend_styles = array(
        'essential-blocks-frontend-style',
        'essential-blocks-fontawesome'
    );

    /**
     * Unique name of the block.
     * @return string
     */
    public function get_name() {
        return 'icon';
    }
}