<?php
class ExampleTest extends \Illuminate\Foundation\Testing\TestCase {
	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../../../bootstrap/start.php';
	}
	
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testUnavailableDates()
	{
		$crawler = $this->client->request('GET', '/unavailableDates/1');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
	
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testReserveDate()
	{
		$crawler = $this->client->request('POST', '/reserveDate/1/2014-08-01');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testUnreserveDate()
	{
		$crawler = $this->client->request('POST', '/unreserveDate/1/2014-08-01');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
}