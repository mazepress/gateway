<?php
/**
 * The BillingAddressTest class file.
 *
 * @package    Mazepress\Gateway
 * @subpackage Tests
 */

declare(strict_types=1);

namespace Mazepress\Gateway\Tests;

use Mazepress\Gateway\BillingAddress;
use WP_Mock\Tools\TestCase;


/**
 * The BillingAddressTest class.
 */
class BillingAddressTest extends TestCase {

	/**
	 * Test class properites.
	 *
	 * @return void
	 */
	public function test_properties(): void {

		$object = new BillingAddress();

		$this->assertInstanceOf( BillingAddress::class, $object->set_first_name( 'fname' ) );
		$this->assertEquals( 'fname', $object->get_first_name() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_last_name( 'lname' ) );
		$this->assertEquals( 'lname', $object->get_last_name() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_email( 'email' ) );
		$this->assertEquals( 'email', $object->get_email() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_phone( 'phone' ) );
		$this->assertEquals( 'phone', $object->get_phone() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_address( 'address' ) );
		$this->assertEquals( 'address', $object->get_address() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_city( 'city' ) );
		$this->assertEquals( 'city', $object->get_city() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_parish( 'parish' ) );
		$this->assertEquals( 'parish', $object->get_parish() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_postal( 'postal' ) );
		$this->assertEquals( 'postal', $object->get_postal() );

		$this->assertInstanceOf( BillingAddress::class, $object->set_country( 'country' ) );
		$this->assertEquals( 'country', $object->get_country() );
	}
}
