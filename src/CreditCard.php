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
	 * @var string $type
	 */
	private $type;

	/**
	 * The name.
	 *
	 * @var string $name
	 */
	private $name;

	/**
	 * The number.
	 *
	 * @var string $number
	 */
	private $number;

	/**
	 * The expiry.
	 *
	 * @var string $expiry
	 */
	private $expiry;

	/**
	 * The cvv.
	 *
	 * @var string $cvv
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
	 * Get the name.
	 *
	 * @return string|null
	 */
	public function get_name(): ?string {
		return $this->name;
	}

	/**
	 * Set the name.
	 *
	 * @param string $name The name.
	 *
	 * @return self
	 */
	public function set_name( string $name ): self {
		$this->name = $name;
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
	 * Get the expiry.
	 *
	 * @return string|null
	 */
	public function get_expiry(): ?string {
		return $this->expiry;
	}

	/**
	 * Set the expiry.
	 *
	 * @param string $expiry The expiry.
	 *
	 * @return self
	 */
	public function set_expiry( string $expiry ): self {
		$this->expiry = $expiry;
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
}
