<?php
/**
 * Search Icon Extension for Magento 2
 * Copyright Chris Nelson 2019
 *
 * DESCRIPTION:
 * The intention of this extension is to facilitate a "Search" icon in the siteframe of an M2 site. It will create
 * a container named "search.wrapper" in the default "header-wrapper" container. This module's layout file will then
 * move the top.search form into this "search.wrapper" container and a template file named
 * Ey_SearchIcon::searchicon.phtml
 * The searchicon.phtml template file will create a DIV into which an icon can be placed using CSS. This template will
 * also load the default Magento 2 dropdownDialog jQuery UI widget.
 * This module does very little by default. It is intended that the developer will extend this module to do whatever
 * the client's theme demands.
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Ey_SearchIcon',
    __DIR__
);
