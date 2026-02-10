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
	 * @var string
	 */
	private $invoice_id;

	/**
	 * The amount.
	 *
	 * @var float
	 */
	private $amount = 0;

	/**
	 * The currency.
	 *
	 * @var string
	 */
	private $currency = 'USD';

	/**
	 * The currency code.
	 *
	 * @var string
	 */
	private $currency_code = '840';

	/**
	 * The currency exponent.
	 *
	 * @var int
	 */
	private $currency_exponent = 2;

	/**
	 * The billing address.
	 *
	 * @var Address
	 */
	private $address;

	/**
	 * The credit card.
	 *
	 * @var CreditCard
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
	 * @return static
	 */
	public function set_invoice_id( string $invoice_id ): static {
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
	 * @return static
	 */
	public function set_amount( float $amount ): static {
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
	 * @return static
	 */
	public function set_currency( string $currency ): static {
		$this->currency = $currency;
		return $this;
	}

	/**
	 * Get the currency code.
	 *
	 * @return string
	 */
	public function get_currency_code(): string {
		return $this->currency_code;
	}

	/**
	 * Set the currency code.
	 *
	 * @param string $currency_code The currency code.
	 *
	 * @return static
	 */
	public function set_currency_code( string $currency_code ): static {
		$this->currency_code = $currency_code;
		return $this;
	}

	/**
	 * Get the currency exponent.
	 *
	 * @return int
	 */
	public function get_currency_exponent(): int {
		return $this->currency_exponent;
	}

	/**
	 * Set the currency exponent.
	 *
	 * @param int $currency_exponent The currency exponent.
	 *
	 * @return static
	 */
	public function set_currency_exponent( int $currency_exponent ): static {
		$this->currency_exponent = $currency_exponent;
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
	 * @return static
	 */
	public function set_address( Address $address ): static {
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
	 * @return static
	 */
	public function set_card( CreditCard $card ): static {
		$this->card = $card;
		return $this;
	}
}
