<?php
/**
 * The CreditCardTest class file.
 *
 * @package    Mazepress\Gateway
 * @subpackage Tests
 */

declare(strict_types=1);

namespace Mazepress\Gateway\Tests;

use Mazepress\Gateway\CreditCard;
use WP_Mock\Tools\TestCase;


/**
 * The CreditCardTest class.
 */
class CreditCardTest extends TestCase {

	/**
	 * Test class properites.
	 *
	 * @return void
	 */
	public function test_properties(): void {

		$object = new CreditCard();

		$this->assertInstanceOf( CreditCard::class, $object->set_type( 'visa' ) );
		$this->assertEquals( 'visa', $object->get_type() );

		$this->assertInstanceOf( CreditCard::class, $object->set_name( 'fullname' ) );
		$this->assertEquals( 'fullname', $object->get_name() );

		$this->assertInstanceOf( CreditCard::class, $object->set_number( '4111111111111111' ) );
		$this->assertEquals( '4111111111111111', $object->get_number() );

		$this->assertInstanceOf( CreditCard::class, $object->set_expiry( '01-24' ) );
		$this->assertEquals( '01-24', $object->get_expiry() );

		$this->assertInstanceOf( CreditCard::class, $object->set_cvv( '123' ) );
		$this->assertEquals( '123', $object->get_cvv() );
	}
}
