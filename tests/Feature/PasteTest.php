<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class PasteTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     *
     */
    public function an_authenticated_user_can_create_a_paste()
    {
        $user = User::factory()->create();
        $this->actingAs($user);


    }
}
