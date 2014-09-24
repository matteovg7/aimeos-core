<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2011
 * @license LGPLv3, http://www.arcavias.com/en/license
 */


/**
 * Test class for MShop_Customer_Manager_Factory.
 */
class MShop_Customer_Manager_FactoryTest extends MW_Unittest_Testcase
{
	public function testCreateManager()
	{
		$manager = MShop_Customer_Manager_Factory::createManager(TestHelper::getContext());
		$this->assertInstanceOf('MShop_Common_Manager_Interface', $manager);

	}


	public function testCreateManagerName()
	{
		$manager = MShop_Customer_Manager_Factory::createManager(TestHelper::getContext(), 'Default');
		$this->assertInstanceOf('MShop_Common_Manager_Interface', $manager);
	}


	public function testCreateManagerInvalidName()
	{
		$this->setExpectedException('MShop_Customer_Exception');
		$manager = MShop_Customer_Manager_Factory::createManager(TestHelper::getContext(), '%$@');
	}


	public function testCreateManagerNotExisting()
	{
		$this->setExpectedException('MShop_Exception');
		$manager = MShop_Customer_Manager_Factory::createManager( TestHelper::getContext(), 'unknown' );
	}

}