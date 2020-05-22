<?php
/**
 * This module creates containers to store CMS Blocks on Cart and Checkout pages for the purposes of trust column
 * content placement.
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Ey_CartCheckout',
    __DIR__
);
