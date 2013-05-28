<?php
namespace PayPal\Api;

use PayPal\Rest\IResource;
use PayPal\Rest\Call;
use PayPal\Rest\ApiContext;

class CreditCard extends \PPModel implements IResource {

	private static $credential;

	/**
	 *
	 * @deprected. Pass ApiContext to create/get methods instead
	 */
	public static function setCredential($credential) {
		self::$credential = $credential;
	}

	/**
	 * ID of the credit card being saved for later use.
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * ID of the credit card being saved for later use.
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}


	/**
	 * Card number.
	 * @param string $number
	 */
	public function setNumber($number) {
		$this->number = $number;
		return $this;
	}

	/**
	 * Card number.
	 * @return string
	 */
	public function getNumber() {
		return $this->number;
	}


	/**
	 * Type of the Card (eg. Visa, Mastercard, etc.).
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Type of the Card (eg. Visa, Mastercard, etc.).
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}


	/**
	 * card expiry month with value 1 - 12.
	 * @param integer $expire_month
	 */
	public function setExpireMonth($expire_month) {
		$this->expire_month = $expire_month;
		return $this;
	}

	/**
	 * card expiry month with value 1 - 12.
	 * @return integer
	 */
	public function getExpireMonth() {
		return $this->expire_month;
	}

	/**
	 * Deprecated method
	 */
	public function setExpire_month($expire_month) {
		$this->expire_month = $expire_month;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getExpire_month() {
		return $this->expire_month;
	}

	/**
	 * 4 digit card expiry year
	 * @param integer $expire_year
	 */
	public function setExpireYear($expire_year) {
		$this->expire_year = $expire_year;
		return $this;
	}

	/**
	 * 4 digit card expiry year
	 * @return integer
	 */
	public function getExpireYear() {
		return $this->expire_year;
	}

	/**
	 * Deprecated method
	 */
	public function setExpire_year($expire_year) {
		$this->expire_year = $expire_year;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getExpire_year() {
		return $this->expire_year;
	}

	/**
	 * Card validation code. Only supported when making a Payment but not when saving a credit card for future use.
	 * @param string $cvv2
	 */
	public function setCvv2($cvv2) {
		$this->cvv2 = $cvv2;
		return $this;
	}

	/**
	 * Card validation code. Only supported when making a Payment but not when saving a credit card for future use.
	 * @return string
	 */
	public function getCvv2() {
		return $this->cvv2;
	}


	/**
	 * Card holder's first name.
	 * @param string $first_name
	 */
	public function setFirstName($first_name) {
		$this->first_name = $first_name;
		return $this;
	}

	/**
	 * Card holder's first name.
	 * @return string
	 */
	public function getFirstName() {
		return $this->first_name;
	}

	/**
	 * Deprecated method
	 */
	public function setFirst_name($first_name) {
		$this->first_name = $first_name;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getFirst_name() {
		return $this->first_name;
	}

	/**
	 * Card holder's last name.
	 * @param string $last_name
	 */
	public function setLastName($last_name) {
		$this->last_name = $last_name;
		return $this;
	}

	/**
	 * Card holder's last name.
	 * @return string
	 */
	public function getLastName() {
		return $this->last_name;
	}

	/**
	 * Deprecated method
	 */
	public function setLast_name($last_name) {
		$this->last_name = $last_name;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getLast_name() {
		return $this->last_name;
	}

	/**
	 * Billing Address associated with this card.
	 * @param PayPal\Api\Address $billing_address
	 */
	public function setBillingAddress($billing_address) {
		$this->billing_address = $billing_address;
		return $this;
	}

	/**
	 * Billing Address associated with this card.
	 * @return PayPal\Api\Address
	 */
	public function getBillingAddress() {
		return $this->billing_address;
	}

	/**
	 * Deprecated method
	 */
	public function setBilling_address($billing_address) {
		$this->billing_address = $billing_address;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getBilling_address() {
		return $this->billing_address;
	}

	/**
	 * A unique identifier of the payer generated and provided by the facilitator. This is required when creating or using a tokenized funding instrument.
	 * @param string $payer_id
	 */
	public function setPayerId($payer_id) {
		$this->payer_id = $payer_id;
		return $this;
	}

	/**
	 * A unique identifier of the payer generated and provided by the facilitator. This is required when creating or using a tokenized funding instrument.
	 * @return string
	 */
	public function getPayerId() {
		return $this->payer_id;
	}

	/**
	 * Deprecated method
	 */
	public function setPayer_id($payer_id) {
		$this->payer_id = $payer_id;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getPayer_id() {
		return $this->payer_id;
	}

	/**
	 * State of the funding instrument.
	 * @param string $state
	 */
	public function setState($state) {
		$this->state = $state;
		return $this;
	}

	/**
	 * State of the funding instrument.
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}


	/**
	 * Date/Time until this resource can be used fund a payment.
	 * @param string $valid_until
	 */
	public function setValidUntil($valid_until) {
		$this->valid_until = $valid_until;
		return $this;
	}

	/**
	 * Date/Time until this resource can be used fund a payment.
	 * @return string
	 */
	public function getValidUntil() {
		return $this->valid_until;
	}

	/**
	 * Deprecated method
	 */
	public function setValid_until($valid_until) {
		$this->valid_until = $valid_until;
		return $this;
	}
	/**
	 * Deprecated method
	 */
	public function getValid_until() {
		return $this->valid_until;
	}

	/**
	 * 
	 * @array
	 * @param PayPal\Api\Links $links
	 */
	public function setLinks($links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * 
	 * @return PayPal\Api\Links
	 */
	public function getLinks() {
		return $this->links;
	}



	public function create($apiContext = null) {
		$payLoad = $this->toJSON();
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/vault/credit-card", "POST", $payLoad);
		$this->fromJson($json);
 		return $this;
	}

	public static function get($creditCardId, $apiContext = null) {
		if (($creditCardId == null) || (strlen($creditCardId) <= 0)) {
			throw new \InvalidArgumentException("creditCardId cannot be null or empty");
		}
		$payLoad = "";
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/vault/credit-card/$creditCardId", "GET", $payLoad);
		$ret = new CreditCard();
		$ret->fromJson($json);
		return $ret;
	}

	public function delete($apiContext = null) {
		if ($this->getId() == null) {
			throw new \InvalidArgumentException("Id cannot be null");
		}
		$payLoad = "";
		if ($apiContext == null) {
			$apiContext = new ApiContext(self::$credential);
		}
		$call = new \PPRestCall($apiContext);
		$json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/vault/credit-card/{$this->getId()}", "POST", $payLoad);
    return true;
	}
}
