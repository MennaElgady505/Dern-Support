<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\RepairRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepairRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_repair_request_can_be_created()
    {
        // Create a user using the factory
        $user = User::factory()->create();

        // Create a repair request associated with the user
        $repairRequest = RepairRequest::factory()->create([
            'email' => $user->email, // Ensuring it matches an existing user
        ]);

        // Assert the repair request exists
        $this->assertDatabaseHas('repair_requests', [
            'email' => $repairRequest->email,
        ]);
    }
}
