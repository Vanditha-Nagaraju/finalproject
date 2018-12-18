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
//    public function testExample()
//    {
//        $user = factory(\App\User::class)->make();
//        $user->save();
//        $follow = followers()->make();
//        $follow->user()->associate($user);
//        $this->assertTrue($follow->save());
//
//    }

    public function testExample1()
    {
        $user = factory(\App\User::class)->make();
        $user->save();
        $follow = factory(\App\User::class)->make();
        $this->assertTrue($follow->save());
    }
}

//    public function test_follow_and_delete_blog()
//    {
//        if (!is_multisite()) {
//            return;
//        }
//        $u = $this->factory->user->create();
//        $f = bp_follow_start_following(array(user_id => $id));
//        $this->assertTrue($f);
//        wpmu_delete_blog($b);
//        $this->assertEmpty(wp_cache_get($u, 'bp_follow_following_blogs_count'));
//        $this->assertEmpty(wp_cache_get($b, 'bp_follow_followers_blogs_count'));
//        $id =0;
//        $is_following = bp_follow_is_following(array('user_id' => $id));
//        $this->assertSame(0, $is_following);
//    }
//
//
//    public function test_bp_follow_data()
//    {
//        $u1 = $this->factory->user->create();
//        $u2 = $this->factory->user->create();
//        $args = array('user_id' => $u1, 'follower_id' => $u2);
//        bp_follow_start_following($args);
//        bp_follow_is_following($args);
//        $key = "{$u1}:{$u2}:";
//        $cache = wp_cache_get($key, 'bp_follow_data');
//        $this->assertTrue(!empty($cache->id), (bool) $cache->id);
//        bp_follow_stop_following($args);
//        $this->assertEmpty(wp_cache_get($key, 'bp_follow_data'));
//    }
//
//


