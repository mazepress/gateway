<?php
/**
 * The AddressTest class file.
 *
 * @package    Mazepress\Gateway
 * @subpackage Tests
 */

declare(strict_types=1);

namespace Mazepress\Gateway\Tests;

use Mazepress\Gateway\Address;
use WP_Mock\Tools\TestCase;


/**
 * The AddressTest class.
 */
class AddressTest extends TestCase {

	/**
	 * Test class properites.
	 *
	 * @return void
	 */
	public function test_properties(): void {

		$object = new Address();

		$this->assertInstanceOf( Address::class, $object->set_first_name( 'fname' ) );
		$this->assertEquals( 'fname', $object->get_first_name() );

		$this->assertInstanceOf( Address::class, $object->set_last_name( 'lname' ) );
		$this->assertEquals( 'lname', $object->get_last_name() );

		$this->assertInstanceOf( Address::class, $object->set_email( 'email' ) );
		$this->assertEquals( 'email', $object->get_email() );

		$this->assertInstanceOf( Address::class, $object->set_phone( 'phone' ) );
		$this->assertEquals( 'phone', $object->get_phone() );

		$this->assertInstanceOf( Address::class, $object->set_address1( 'address1' ) );
		$this->assertEquals( 'address1', $object->get_address1() );

		$this->assertInstanceOf( Address::class, $object->set_address2( 'address2' ) );
		$this->assertEquals( 'address2', $object->get_address2() );

		$this->assertInstanceOf( Address::class, $object->set_city( 'city' ) );
		$this->assertEquals( 'city', $object->get_city() );

		$this->assertInstanceOf( Address::class, $object->set_state( 'parish' ) );
		$this->assertEquals( 'parish', $object->get_state() );

		$this->assertInstanceOf( Address::class, $object->set_zip( '123' ) );
		$this->assertEquals( '123', $object->get_zip() );

		$this->assertInstanceOf( Address::class, $object->set_country( 'Bermuda' ) );
		$this->assertEquals( 'Bermuda', $object->get_country() );

		$this->assertInstanceOf( Address::class, $object->set_country_code( 'BMU' ) );
		$this->assertEquals( 'BMU', $object->get_country_code() );
	}
}
