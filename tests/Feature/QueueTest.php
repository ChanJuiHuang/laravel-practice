<?php

namespace Tests\Feature;

use App\Jobs\TestJob;
use Tests\TestCase;

class QueueTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        TestJob::dispatch();
        $this->assertTrue(true);
    }
}
