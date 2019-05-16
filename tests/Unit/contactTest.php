<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class contactTest extends TestCase
{
    public function testApplication()
    {
        $response = $this->get('/Contact');

        $response->assertStatus(404);
        return $response;
    }

}
