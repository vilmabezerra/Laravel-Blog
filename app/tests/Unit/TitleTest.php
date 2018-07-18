<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * Title with more than 20 characters are not created.
     *
     * @return void
     */
    public function tryToAddBigTitleTest()
    {
    	$response = $this->call('POST', '/post/create', ['title' => 'Sally is a crazy girl', 'description' => 'But everybody likes her']);
        
        $this->assertNotEquals(302, $response->getStatusCode());
    }
}
