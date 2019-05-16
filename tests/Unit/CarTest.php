<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NormalTest extends TestCase
{
    public function testApplication()
    {
        $response = $this->get('/register');



        $response->assertStatus(200);
        return $response;
    }

}
