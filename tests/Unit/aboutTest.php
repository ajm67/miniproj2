<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class aboutTest extends TestCase
{
    public function testApplication()

    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        return $response;
    }

}
