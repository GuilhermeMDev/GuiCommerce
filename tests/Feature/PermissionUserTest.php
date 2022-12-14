<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class PermissionUserTest extends TestCase
{
    /** @test */
    public function it_should_be_able_to_give_a_permission_to_an_user()
    {
        /**@var User $user */
        $user = User::factory()->createOne();

        $user->givePermissionTo('edit-products');
        $this->assertTrue($user->hasPermissionTo('edit-products'));
        $this->assertDatabaseHas('permissions', [
            'permission' => 'edit-products'
        ]);
    }

    /** @test */
    public function it_should_be_able_to_authorize_access_to_a_route_based_on_the_permission()
    {
        Route::get('test-something-weird', function() {
            return 'test';
        })->middleware('permission:edit-products');

        /** @var $user */
        $user = User::factory()->createOne();

        $this->actingAs($user)
            ->get('test-something-weird')
            ->assertForbidden();

        $user->givePermissionTo('edit-products');
        $this->actingAs($user)
            ->get('test-something-weird')
            ->assertSuccessful();
    }

}
