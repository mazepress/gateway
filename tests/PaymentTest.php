<?php
/**
 * The PaymentTest class file.
 *
 * @package    Mazepress\Gateway
 * @subpackage Tests
 */

declare(strict_types=1);

namespace Mazepress\Gateway\Tests;

use Mazepress\Gateway\Payment;
use Mazepress\Gateway\Address;
use Mazepress\Gateway\CreditCard;
use Mazepress\Gateway\Transaction;
use WP_Mock\Tools\TestCase;


/**
 * The PaymentTest class.
 */
class PaymentTest extends TestCase {

	/**
	 * Test class properites.
	 *
	 * @return void
	 */
	public function test_properties(): void {

		// Create a child class object with the abstract class Payment.
		$object = new class() extends Payment {
			/**
			 * Process the payment. If the payment fails,
			 * it should return a WP_Error object.
			 *
			 * @return Transaction|\WP_Error
			 */
			public function process() {
				return ( new Transaction() )->set_status( 'success' );
			}
		};

		$this->assertInstanceOf( Payment::class, $object->set_invoice_id( 'invoice' ) );
		$this->assertEquals( 'invoice', $object->get_invoice_id() );

		$this->assertInstanceOf( Payment::class, $object->set_amount( 100 ) );
		$this->assertEquals( 100, $object->get_amount() );
		$this->assertIsFloat( $object->get_amount() );

		$this->assertInstanceOf( Payment::class, $object->set_currency( 'BMD' ) );
		$this->assertEquals( 'BMD', $object->get_currency() );

		$this->assertInstanceOf( Payment::class, $object->set_currency_code( '388' ) );
		$this->assertEquals( '388', $object->get_currency_code() );

		$this->assertInstanceOf( Payment::class, $object->set_currency_exponent( 4 ) );
		$this->assertEquals( 4, $object->get_currency_exponent() );
		$this->assertIsInt( $object->get_currency_exponent() );

		$address = ( new Address() )->set_first_name( 'fname' );
		$this->assertInstanceOf( Payment::class, $object->set_address( $address ) );
		$this->assertInstanceOf( Address::class, $object->get_address() );
		$this->assertEquals( 'fname', $object->get_address()->get_first_name() );

		$card = ( new CreditCard() )->set_type( 'visa' );
		$this->assertInstanceOf( Payment::class, $object->set_card( $card ) );
		$this->assertInstanceOf( CreditCard::class, $object->get_card() );
		$this->assertEquals( 'visa', $object->get_card()->get_type() );
	}
}
