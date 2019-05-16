<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductApiTest extends TestCase
{
    /** @test */
    function query_count_for_products_is_below_30()
    {

        factory( App\UserFactory.php::class, 300 )->create();

        \DB::enableQueryLog();

        $response = $this->json('GET', '/products');

        \DB::disableQueryLog();

        $this->assertLessThanOrEqual( 30, \count( \DB::getQueryLog() ) );
    }
}