<?php
/**
 * The Transaction class file.
 *
 * @package Mazepress\Gateway
 */

declare(strict_types=1);

namespace Mazepress\Gateway;

/**
 * The Transaction class.
 */
class Transaction {

	/**
	 * The transaction ID.
	 *
	 * @var string $transaction_id
	 */
	private $transaction_id;

	/**
	 * The reference ID.
	 *
	 * @var string $reference_id
	 */
	private $reference_id;

	/**
	 * The status.
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * The response code.
	 *
	 * @var string $code
	 */
	private $code;

	/**
	 * The response message.
	 *
	 * @var string $message
	 */
	private $message;

	/**
	 * Get the transaction ID.
	 *
	 * @return string|null
	 */
	public function get_transaction_id(): ?string {
		return $this->transaction_id;
	}

	/**
	 * Set the transaction ID.
	 *
	 * @param string $transaction_id The transaction ID.
	 *
	 * @return self
	 */
	public function set_transaction_id( string $transaction_id ): self {
		$this->transaction_id = $transaction_id;
		return $this;
	}

	/**
	 * Get the reference ID.
	 *
	 * @return string|null
	 */
	public function get_reference_id(): ?string {
		return $this->reference_id;
	}

	/**
	 * Set the reference ID.
	 *
	 * @param string $reference_id The reference ID.
	 *
	 * @return self
	 */
	public function set_reference_id( string $reference_id ): self {
		$this->reference_id = $reference_id;
		return $this;
	}

	/**
	 * Get the status.
	 *
	 * @return string|null
	 */
	public function get_status(): ?string {
		return $this->status;
	}

	/**
	 * Set the status.
	 *
	 * @param string $status The status.
	 *
	 * @return self
	 */
	public function set_status( string $status ): self {
		$this->status = $status;
		return $this;
	}

	/**
	 * Get the resposnce code.
	 *
	 * @return string|null
	 */
	public function get_code(): ?string {
		return $this->code;
	}

	/**
	 * Set the resposnce code.
	 *
	 * @param string $code The resposnce code.
	 *
	 * @return self
	 */
	public function set_code( string $code ): self {
		$this->code = $code;
		return $this;
	}

	/**
	 * Get the resposnce message.
	 *
	 * @return string|null
	 */
	public function get_message(): ?string {
		return $this->message;
	}

	/**
	 * Set the resposnce message.
	 *
	 * @param string $message The resposnce message.
	 *
	 * @return self
	 */
	public function set_message( string $message ): self {
		$this->message = $message;
		return $this;
	}
}
