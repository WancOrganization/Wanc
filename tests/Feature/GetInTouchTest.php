<?php

namespace Tests\Feature;

use App\Models\GetInTouch;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetInTouchTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_get_in_touch_can_be_added(): void
    {
        GetInTouch::factory()->create();
        $this->postJson('get-in-touch', [
            'name' => 'Test Name',
            'message' => 'Test Message',
            'mobile_number' => '1234567890',
            'subject' => 'Test Subject',
        ]);
        $this->assertCount(1, GetInTouch::all());
    }

    public function test_a_get_in_touch_can_be_updated(): void
    {
        $user = User::factory()->create();
        $data = GetInTouch::factory()->create();

        $this->actingAs($user)->put('admin/get-in-touch/' . $data->id, [
            'name' => 'new name',
            'message' => 'new message',
            'mobile_number' => '1234',
            'subject' => 'new subject',
        ]);

        $this->assertEquals('new name', GetInTouch::first()->name);
        $this->assertEquals('new message', GetInTouch::first()->message);
        $this->assertEquals('1234', GetInTouch::first()->mobile_number);
        $this->assertEquals('new subject', GetInTouch::first()->subject);
    }

    public function test_a_get_in_touch_can_be_deleted(): void
    {
        $user = User::factory()->create();
        $data = GetInTouch::factory()->create();

        $this->actingAs($user)->delete('admin/get-in-touch/' . $data->id);
        $this->assertCount(0, GetInTouch::all());
    }

    public function test_a_name_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/get-in-touch', ['name' => '']);
        $response->assertSessionHasErrors('name');
    }

    public function test_a_message_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/get-in-touch', ['message' => '']);
        $response->assertSessionHasErrors('message');
    }

    public function test_a_subject_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/get-in-touch', ['subject' => '']);
        $response->assertSessionHasErrors('subject');
    }

    public function test_a_mobile_number_is_required(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('admin/get-in-touch', ['mobile_number' => '']);
        $response->assertSessionHasErrors('mobile_number');
    }
}
