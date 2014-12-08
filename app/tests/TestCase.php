<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->migrateDatabase();
        DB::beginTransaction();
    }

    public function tearDown()
    {
        DB::rollBack();
    }



	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

    private function migrateDatabase()
    {
        Artisan::call('migrate');
    }

}
