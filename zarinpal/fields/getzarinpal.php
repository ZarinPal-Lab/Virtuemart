<?php
/**
 *
 * Realex payment plugin
 *
 * @author Valerie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * Copyright (C) 2004-2014 Virtuemart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
defined('JPATH_BASE') or die();

jimport('joomla.form.formfield');
class JFormFieldGetzarinpal extends JFormField {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $type = 'getzarinpal';

	protected function getInput() {

		JHtml::_('behavior.colorpicker');

		vmJsApi::addJScript( '/plugins/vmpayment/zarinpal/zarinpal/assets/js/admin.js');
		vmJsApi::css('zarinpal', 'plugins/vmpayment/zarinpal/zarinpal/assets/css/');

		$url = "https://www.zarinpal.com/us/webapps/mpp/referral/zarinpal-payments-standard?partner_id=83EP5DJG9FU6L";
		$logo = '<img src="https://www.zarinpalobjects.com/en_US/i/logo/zarinpal_mark_60x38.gif" />';
		$html = '<p><a target="_blank" href="' . $url . '"  >' . $logo . '</a></p>';
		$html .= '<p><a target="_blank" href="' . $url . '" class="signin-button-link">' . vmText::_('VMPAYMENT_zarinpal_REGISTER') . '</a>';
		$html .= ' <a target="_blank" href="http://docs.virtuemart.net/manual/shop-menu/payment-methods/zarinpal.html" class="signin-button-link">' . vmText::_('VMPAYMENT_zarinpal_DOCUMENTATION') . '</a></p>';

		return $html;
	}

}