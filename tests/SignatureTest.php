<?php

namespace Uzzaircode\Ipay88\Tests;

use Uzzaircode\Ipay88\Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignatureTest extends TestCase
{
   

    public function test_hello()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
