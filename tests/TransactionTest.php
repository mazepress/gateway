<?php
/**
 * The TransactionTest class file.
 *
 * @package    Mazepress\Gateway
 * @subpackage Tests
 */

declare(strict_types=1);

namespace Mazepress\Gateway\Tests;

use Mazepress\Gateway\Transaction;
use WP_Mock\Tools\TestCase;


/**
 * The TransactionTest class.
 */
class TransactionTest extends TestCase {

	/**
	 * Test class properites.
	 *
	 * @return void
	 */
	public function test_properties(): void {

		$object = new Transaction();

		$this->assertInstanceOf( Transaction::class, $object->set_transaction_id( 'ASD123' ) );
		$this->assertEquals( 'ASD123', $object->get_transaction_id() );

		$this->assertInstanceOf( Transaction::class, $object->set_reference_id( 'EFG435' ) );
		$this->assertEquals( 'EFG435', $object->get_reference_id() );

		$this->assertInstanceOf( Transaction::class, $object->set_status( 'status' ) );
		$this->assertEquals( 'status', $object->get_status() );

		$this->assertInstanceOf( Transaction::class, $object->set_code( 'code' ) );
		$this->assertEquals( 'code', $object->get_code() );

		$this->assertInstanceOf( Transaction::class, $object->set_message( 'message' ) );
		$this->assertEquals( 'message', $object->get_message() );
	}
}
