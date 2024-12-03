<?php
/**
 * The Address class file.
 *
 * @package Mazepress\Gateway
 */

declare(strict_types=1);

namespace Mazepress\Gateway;

/**
 * The Address class.
 */
class Address {

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
	 * The street address.
	 *
	 * @var string $address1
	 */
	private $address1;

	/**
	 * The address line 2.
	 *
	 * @var string $address2
	 */
	private $address2;

	/**
	 * The city.
	 *
	 * @var string $city
	 */
	private $city;

	/**
	 * The state.
	 *
	 * @var string $state
	 */
	private $state;

	/**
	 * The zip.
	 *
	 * @var string $zip
	 */
	private $zip;

	/**
	 * The country.
	 *
	 * @var string $country
	 */
	private $country;

	/**
	 * The country code.
	 *
	 * @var string $country_code
	 */
	private $country_code;

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
	 * Get the address1.
	 *
	 * @return string|null
	 */
	public function get_address1(): ?string {
		return $this->address1;
	}

	/**
	 * Set the address1.
	 *
	 * @param string $address The address.
	 *
	 * @return self
	 */
	public function set_address1( string $address ): self {
		$this->address1 = $address;
		return $this;
	}

	/**
	 * Get the address2.
	 *
	 * @return string|null
	 */
	public function get_address2(): ?string {
		return $this->address2;
	}

	/**
	 * Set the address2.
	 *
	 * @param string $address The address.
	 *
	 * @return self
	 */
	public function set_address2( string $address ): self {
		$this->address2 = $address;
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
	 * Get the state.
	 *
	 * @return string|null
	 */
	public function get_state(): ?string {
		return $this->state;
	}

	/**
	 * Set the state.
	 *
	 * @param string $state The state.
	 *
	 * @return self
	 */
	public function set_state( string $state ): self {
		$this->state = $state;
		return $this;
	}

	/**
	 * Get the zip.
	 *
	 * @return string|null
	 */
	public function get_zip(): ?string {
		return $this->zip;
	}

	/**
	 * Set the zip.
	 *
	 * @param string $zip The zip.
	 *
	 * @return self
	 */
	public function set_zip( string $zip ): self {
		$this->zip = $zip;
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

	/**
	 * Get the country code.
	 *
	 * @return string|null
	 */
	public function get_country_code(): ?string {
		return $this->country_code;
	}

	/**
	 * Set the country code.
	 *
	 * @param string $country_code The country code.
	 *
	 * @return self
	 */
	public function set_country_code( string $country_code ): self {
		$this->country_code = $country_code;
		return $this;
	}
}
