<?php

namespace Tests\Feature;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_feedback_can_be_added(): void
    {
        Feedback::factory()->create();
        $this->post('feedback', [
            'name' => 'Test Name',
            'description' => 'Test Description',
            'designation' => 'Test Designation',
        ]);
        $this->assertCount(1, Feedback::all());
    }

    public function test_a_feedback_can_be_updated(): void
    {
        $user = User::factory()->create();
        $data = Feedback::factory()->create();

        $this->actingAs($user)->put('admin/feedback/' . $data->id, [
            'name' => 'new name',
            'description' => 'new desc',
            'designation' => 'new desg',
        ]);

        $this->assertEquals('new name', Feedback::first()->name);
        $this->assertEquals('new desc', Feedback::first()->description);
        $this->assertEquals('new desg', Feedback::first()->designation);
    }

    public function test_a_feedback_can_be_deleted(): void
    {
        $user = User::factory()->create();
        $data = Feedback::factory()->create();

        $this->actingAs($user)->delete('admin/feedback/' . $data->id);
        $this->assertCount(0, Feedback::all());
    }

    public function test_a_name_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/feedback', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }

    public function test_a_description_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/feedback', ['description' => '']);
        $response->assertSessionHasErrors('description');
    }

    public function test_feedback_index_page(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('admin/feedback');
        $response->assertStatus(200);
    }

    public function test_feedback_create_page(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('admin/feedback/create');
        $response->assertStatus(200);
    }

    public function test_feedback_show_page(): void
    {
        $user = User::factory()->create();
        $feedback = Feedback::factory()->create();
        $response = $this->actingAs($user)->get('admin/feedback/' . $feedback->id);
        $response->assertStatus(200);
    }

    public function test_feedback_edit_page(): void
    {
        $user = User::factory()->create();
        $feedback = Feedback::factory()->create();
        $response = $this->actingAs($user)->get('admin/feedback/' . $feedback->id . '/edit');
        $response->assertStatus(200);
    }
}
