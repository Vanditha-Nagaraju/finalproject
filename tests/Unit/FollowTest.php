<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\user;

class FollowTest extends TestCase
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
        $follow = followers()->make();
        $follow->user()->associate($user);
        $this->assertTrue($follow->save());

    }
}
