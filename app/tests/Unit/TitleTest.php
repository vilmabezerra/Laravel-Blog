<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestResponse;

class TitleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * Title with more than 20 characters are not created.
     *
     * @return void
     */
    public function testAddingBigTitleTest()
    {

    	$response = $this->call('POST', '/post/create', ['title' => 'Sally is a crazy girl', 'description' => 'But everybody likes her']);
        
        //$this->assertViewHas('Falha');
        //$response->assertSessionHasErrors();
        //$this->assertNotEquals(302, $response->getStatusCode());

        //$errors = session('error');
        $response->assertSessionMissing('success');
        //$response->assertSessionHas('error');
        //$this->assertEquals($errors->get('name')[0],"Falha ao criar postagem");
    }
    
    public function testWelcomeView()
    {
        $response = $this->call('GET', '/');
        $response->assertViewHas('paginator');
    }

    
}
