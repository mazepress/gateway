<?php
/**
 * The CreditCard class file.
 *
 * @package Mazepress\Gateway
 */

declare(strict_types=1);

namespace Mazepress\Gateway;

/**
 * The CreditCard class.
 */
class CreditCard {

	/**
	 * The card type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * The card holder.
	 *
	 * @var string
	 */
	private $card_holder;

	/**
	 * The number.
	 *
	 * @var string
	 */
	private $number;

	/**
	 * The expiry month.
	 *
	 * @var string
	 */
	private $expiry_month;

	/**
	 * The expiry year.
	 *
	 * @var string
	 */
	private $expiry_year;

	/**
	 * The cvv.
	 *
	 * @var string
	 */
	private $cvv;

	/**
	 * Get the card type.
	 *
	 * @return string|null
	 */
	public function get_type(): ?string {
		return $this->type;
	}

	/**
	 * Set the card type.
	 *
	 * @param string $type The card type.
	 *
	 * @return self
	 */
	public function set_type( string $type ): self {
		$this->type = $type;
		return $this;
	}

	/**
	 * Get the card holder.
	 *
	 * @return string|null
	 */
	public function get_card_holder(): ?string {
		return $this->card_holder;
	}

	/**
	 * Set the card holder.
	 *
	 * @param string $card_holder The card holder.
	 *
	 * @return self
	 */
	public function set_card_holder( string $card_holder ): self {
		$this->card_holder = $card_holder;
		return $this;
	}

	/**
	 * Get the number.
	 *
	 * @return string|null
	 */
	public function get_number(): ?string {
		return $this->number;
	}

	/**
	 * Set the number.
	 *
	 * @param string $number The number.
	 *
	 * @return self
	 */
	public function set_number( string $number ): self {
		$this->number = $number;
		return $this;
	}

	/**
	 * Get the cvv.
	 *
	 * @return string|null
	 */
	public function get_cvv(): ?string {
		return $this->cvv;
	}

	/**
	 * Set the cvv.
	 *
	 * @param string $cvv The cvv.
	 *
	 * @return self
	 */
	public function set_cvv( string $cvv ): self {
		$this->cvv = $cvv;
		return $this;
	}

	/**
	 * Get the expiry month.
	 *
	 * @return string|null
	 */
	public function get_expiry_month(): ?string {
		return $this->expiry_month;
	}

	/**
	 * Set the expiry month.
	 *
	 * @param string $expiry_month The expiry month.
	 *
	 * @return self
	 */
	public function set_expiry_month( string $expiry_month ): self {
		$this->expiry_month = $expiry_month;
		return $this;
	}

	/**
	 * Get the expiry year.
	 *
	 * @return string|null
	 */
	public function get_expiry_year(): ?string {
		return $this->expiry_year;
	}

	/**
	 * Set the expiry year.
	 *
	 * @param string $expiry_year The expiry year.
	 *
	 * @return self
	 */
	public function set_expiry_year( string $expiry_year ): self {
		$this->expiry_year = $expiry_year;
		return $this;
	}
}
