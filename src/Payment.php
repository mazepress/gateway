<?php
/**
 * The Payment class file.
 *
 * @package Mazepress\Gateway
 */

declare(strict_types=1);

namespace Mazepress\Gateway;

use Mazepress\Gateway\Address;
use Mazepress\Gateway\CreditCard;
use Mazepress\Gateway\Transaction;

/**
 * The Payment abstract class.
 */
abstract class Payment {

	/**
	 * The invoice ID.
	 *
	 * @var string $invoice_id
	 */
	private $invoice_id;

	/**
	 * The amount.
	 *
	 * @var float $amount
	 */
	private $amount = 0;

	/**
	 * The currency.
	 *
	 * @var string $currency
	 */
	private $currency = 'USD';

	/**
	 * The billing address.
	 *
	 * @var Address $address
	 */
	private $address;

	/**
	 * The credit card.
	 *
	 * @var CreditCard $card
	 */
	private $card;

	/**
	 * Process the payment. If the payment fails,
	 * it should return a WP_Error object.
	 *
	 * @return Transaction|\WP_Error
	 */
	abstract public function process();

	/**
	 * Get the invoice ID.
	 *
	 * @return string|null
	 */
	public function get_invoice_id(): ?string {
		return $this->invoice_id;
	}

	/**
	 * Set the invoice ID.
	 *
	 * @param string $invoice_id The invoice ID.
	 *
	 * @return self
	 */
	public function set_invoice_id( string $invoice_id ): self {
		$this->invoice_id = $invoice_id;
		return $this;
	}

	/**
	 * Get the amount.
	 *
	 * @return float
	 */
	public function get_amount(): float {
		return $this->amount;
	}

	/**
	 * Set the amount.
	 *
	 * @param float $amount The amount.
	 *
	 * @return self
	 */
	public function set_amount( float $amount ): self {
		$this->amount = $amount;
		return $this;
	}

	/**
	 * Get the currency.
	 *
	 * @return string
	 */
	public function get_currency(): string {
		return $this->currency;
	}

	/**
	 * Set the currency.
	 *
	 * @param string $currency The currency.
	 *
	 * @return self
	 */
	public function set_currency( string $currency ): self {
		$this->currency = $currency;
		return $this;
	}

	/**
	 * Get the billing address.
	 *
	 * @return Address|null
	 */
	public function get_address(): ?Address {
		return $this->address;
	}

	/**
	 * Set the billing address.
	 *
	 * @param Address $address The billing address.
	 *
	 * @return self
	 */
	public function set_address( Address $address ): self {
		$this->address = $address;
		return $this;
	}

	/**
	 * Get the credit card.
	 *
	 * @return CreditCard|null
	 */
	public function get_card(): ?CreditCard {
		return $this->card;
	}

	/**
	 * Set the credit card.
	 *
	 * @param CreditCard $card The credit card.
	 *
	 * @return self
	 */
	public function set_card( CreditCard $card ): self {
		$this->card = $card;
		return $this;
	}
}
