<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_payment.php for Datenweitergabe 2022-10-08 18:09:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Checkout - Step 2');
define('NAVBAR_TITLE_2', 'Payment Method - Step 2');

define('HEADING_TITLE', 'Step 2 of 3 - Payment Information');

define('TABLE_HEADING_BILLING_ADDRESS', 'Billing Address');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Your billing address is shown to the left. The billing address should match the address on your credit card statement. You can change the billing address by clicking the <em>Change Address</em> button.');
define('TITLE_BILLING_ADDRESS', 'Billing Address:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Payment Method');
define('TEXT_SELECT_PAYMENT_METHOD', 'Please select a payment method for this order.');
define('TITLE_PLEASE_SELECT', 'Please Select');
define('TABLE_HEADING_COMMENTS', 'Special Instructions or Order Comments');

define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Sorry, we are not accepting payments from your region at this time.</span><br>Please contact us for alternate arrangements.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continue to Step 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- to confirm your order.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Terms and Conditions</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Please acknowledge the terms and conditions bound to this order by ticking the following box. The terms and conditions can be read <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" rel="noopener" target="_blank"><span class="pseudolink">here</span></a>.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">I have read and agreed to the terms and conditions bound to this order.</span>');


define('TEXT_YOUR_TOTAL','Your Total');

define('TABLE_HEADING_CARRIER', '<span class="termsconditions">Email/Phone for delivery service provider</span>');
define('TEXT_CARRIER_DESCRIPTION', '<span class="termsdescription">I agree that my e-mail address or my telephone number will be forwarded to Deutsche Post AG, Charles-de-Gaulle-Strasse 20, 53113 Bonn, so that the parcel service provider can arrange for the delivery of the goods before the delivery date via e-mail or phone or send me status information on the delivery via email. I can revoke my consent in this regard at any time.</span>');
define('TEXT_CARRIER_YES', '<span class="termsiagree">I agree.</span>');
define('TEXT_CARRIER_NO', '<span class="termsiagree">I do not agree.</span>');