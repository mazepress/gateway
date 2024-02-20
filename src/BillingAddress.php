<?php
/**
 * The BillingAddress class file.
 *
 * @package Mazepress\Gateway
 */

namespace Mazepress\Gateway;

/**
 * The BillingAddress class.
 */
class BillingAddress {

	/**
	 * The first name.
	 *
	 * @var string $first_name
	 */
	private $first_name;

	/**
	 * The last name.
	 *
	 * @var string $last_name
	 */
	private $last_name;

	/**
	 * The email.
	 *
	 * @var string $email
	 */
	private $email;

	/**
	 * The phone.
	 *
	 * @var string $phone
	 */
	private $phone;

	/**
	 * The address.
	 *
	 * @var string $address
	 */
	private $address;

	/**
	 * The city.
	 *
	 * @var string $city
	 */
	private $city;

	/**
	 * The parish.
	 *
	 * @var string $parish
	 */
	private $parish;

	/**
	 * The postal.
	 *
	 * @var string $postal
	 */
	private $postal;

	/**
	 * The country.
	 *
	 * @var string $country
	 */
	private $country;

	/**
	 * Get the first name.
	 *
	 * @return string|null
	 */
	public function get_first_name(): ?string {
		return $this->first_name;
	}

	/**
	 * Set the first name.
	 *
	 * @param string $first_name The first name.
	 *
	 * @return self
	 */
	public function set_first_name( string $first_name ): self {
		$this->first_name = $first_name;
		return $this;
	}

	/**
	 * Get the last name.
	 *
	 * @return string|null
	 */
	public function get_last_name(): ?string {
		return $this->last_name;
	}

	/**
	 * Set the last name.
	 *
	 * @param string $last_name The last name.
	 *
	 * @return self
	 */
	public function set_last_name( string $last_name ): self {
		$this->last_name = $last_name;
		return $this;
	}

	/**
	 * Get the email.
	 *
	 * @return string|null
	 */
	public function get_email(): ?string {
		return $this->email;
	}

	/**
	 * Set the email.
	 *
	 * @param string $email The email.
	 *
	 * @return self
	 */
	public function set_email( string $email ): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * Get the phone.
	 *
	 * @return string|null
	 */
	public function get_phone(): ?string {
		return $this->phone;
	}

	/**
	 * Set the phone.
	 *
	 * @param string $phone The phone.
	 *
	 * @return self
	 */
	public function set_phone( string $phone ): self {
		$this->phone = $phone;
		return $this;
	}

	/**
	 * Get the address.
	 *
	 * @return string|null
	 */
	public function get_address(): ?string {
		return $this->address;
	}

	/**
	 * Set the address.
	 *
	 * @param string $address The address.
	 *
	 * @return self
	 */
	public function set_address( string $address ): self {
		$this->address = $address;
		return $this;
	}

	/**
	 * Get the city.
	 *
	 * @return string|null
	 */
	public function get_city(): ?string {
		return $this->city;
	}

	/**
	 * Set the city.
	 *
	 * @param string $city The city.
	 *
	 * @return self
	 */
	public function set_city( string $city ): self {
		$this->city = $city;
		return $this;
	}

	/**
	 * Get the parish.
	 *
	 * @return string|null
	 */
	public function get_parish(): ?string {
		return $this->parish;
	}

	/**
	 * Set the parish.
	 *
	 * @param string $parish The parish.
	 *
	 * @return self
	 */
	public function set_parish( string $parish ): self {
		$this->parish = $parish;
		return $this;
	}

	/**
	 * Get the postal.
	 *
	 * @return string|null
	 */
	public function get_postal(): ?string {
		return $this->postal;
	}

	/**
	 * Set the postal.
	 *
	 * @param string $postal The postal.
	 *
	 * @return self
	 */
	public function set_postal( string $postal ): self {
		$this->postal = $postal;
		return $this;
	}

	/**
	 * Get the country.
	 *
	 * @return string|null
	 */
	public function get_country(): ?string {
		return $this->country;
	}

	/**
	 * Set the country.
	 *
	 * @param string $country The country.
	 *
	 * @return self
	 */
	public function set_country( string $country ): self {
		$this->country = $country;
		return $this;
	}
}
