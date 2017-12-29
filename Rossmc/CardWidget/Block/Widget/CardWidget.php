<?php

namespace Rossmc\CardWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class CardWidget extends Template implements BlockInterface
{
    /**
     * Prepare page Link. Use passed url.
     *
     * @return string
     */
    public function getLink()
    {
        $_link = $this->getData('url');

        if ($_link  && parse_url($_link, PHP_URL_SCHEME)) {
            $_link = '<a href="' . $_link . '" class="link"  target="_blank">';
        } elseif ($_link) {
            $_link = '<a href="' . $this->getUrl() . $_link . '" class="link" >';
        } else {
            $_link = false;
        }

        return $_link;
    }
}