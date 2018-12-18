<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnfollowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(\App\User::class)->make();
        $user->save();
        $unfollow = factory(\App\User::class)->make();
        $this->assertTrue($unfollow->save());
    }
}
