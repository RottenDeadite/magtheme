<?php
/**
 * Dropdown Wrapper for Magento 2
 * Copyright Chris Nelson 2019
 *
 * DESCRIPTION:
 * The intention of this extension is to facilitate a "User Menu" icon in the siteframe of an M2 site. This module does
 * very little by default, other than loading in the dropdownDialog jQuery UI object and initiating it on the relevant
 * container. It is intended that the developer will extend this module to do whatever the client's theme demands.
 *
 * The dropdown-wrapper.phtml template file will create a DIV into which an icon can be placed using CSS. This template
 * will also load the built-in Magento 2 dropdownDialog jQuery UI widget.
 * In short, MOVE anything you want to appear in the drop-down into (for example) destination="userloginicon".
 *
 * Because the template accepts a variable from Layout "block-name", this module's block can be used in many places on
 * a website as long as the Layout settings do not conflict, and each instance gets a unique "block-name" argument.
 *
 * In our example, using $blockName = "userloginicon" creates the DIV.userloginicon-wrapper and DIV.userlogin-icon, the
 * latter of which is where the developer would presumably place the relevant icon using CSS.
 *
 * An example of the layout you should add to any given layout file:
 * <container name="user.login.wrapper" htmlClass="userloginwrapper" htmlTag="div" before="minicart">
 *  <block class="Magento\Framework\View\Element\Template" name="userloginicon" template="Ey_UserMenu::dropdown-wrapper.phtml">
 *      <arguments>
 *          <argument name="block-name" xsi:type="string">userloginicon</argument>
 *      </arguments>
 *  </block>
 * </container>
 * <move element="top.links" destination="userloginicon" after="-"/>
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Ey_UserMenu',
    __DIR__
);
