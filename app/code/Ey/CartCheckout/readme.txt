This module requires an additional frontend file to be created outside of the module.
Create app/design/frontend/CompanyName/ThemeName/Magento_Checkout/web/template/sidebar.html with the following content:

<div id="opc-sidebar"
     data-bind="afterRender:setModalElement, mageInit: {
   'Magento_Ui/js/modal/modal':{
       'type': 'custom',
       'modalClass': 'opc-sidebar opc-summary-wrapper',
       'wrapperClass': 'checkout-container',
       'parentModalClass': '_has-modal-custom',
       'responsive': true,
       'responsiveClass': 'custom-slide',
       'overlayClass': 'modal-custom-overlay',
       'buttons': []
   }}">

    <!-- ko foreach: getRegion('summary') -->
    <!-- ko template: getTemplate() --><!-- /ko -->
    <!--/ko-->

    <div data-bind="html: window.checkoutConfig.cms_block"></div>

    <div class="opc-block-shipping-information">
        <!-- ko foreach: getRegion('shipping-information') -->
        <!-- ko template: getTemplate() --><!-- /ko -->
        <!--/ko-->
    </div>
</div>
