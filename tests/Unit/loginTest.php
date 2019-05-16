<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginTest extends TestCase
{
    public function testApplication()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        return $response;
    }

}
