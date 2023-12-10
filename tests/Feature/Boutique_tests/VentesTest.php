<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Vente;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Tests\TestCase;

class VenteTest extends TestCase
{
    public function test_root_is_index_of_vente()
    {
        $user = User::factory()->create();
        Bouncer::refresh();

        $response = $this
            ->actingAs($user)
            ->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('vente.index');
    }

    public function test_index_method_returns_vente_index_view_for_authenticated_user()
    {
        $this->actingAs($this->user);

        $response = $this->get(route('vente.index'));

        $response->assertStatus(200)
            ->assertViewIs('vente.index');
    }

    public function test_index_method_returns_401_for_unauthenticated_user()
    {
        $response = $this->get(route('vente.index'));

        $response->assertStatus(401);
    }

    
}