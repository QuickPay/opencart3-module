<?php

use QuickPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentQuickPayViabill
 */
class ModelExtensionPaymentQuickPayViabill extends \Model {

	use Model;

	public function getMethod( $address, $total ) {
		return $this->getMethodData( $address, $total, '_viabill'  );
	}

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_viabill';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'viabill',
		];
	}

	/**
	 * Returns gateway specific payment data
	 *
	 * @return array
	 */
	public function getPaymentData() {
		return [
		];
	}
}
