<?php

namespace Tests\Feature;

use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_feedback_can_be_added()
    {
        $data = Feedback::factory()->create();
        $this->post('feedback',[$data]);
        $this->assertCount(1,Feedback::all());
    }

    /** @test */
    public function a_feedback_can_be_updated()
    {
        $data = Feedback::factory()->create();
        $this->put('admin/feedback/'.$data->id,[
            'name' => 'new name',
            'description' => 'new desc',
            'designation' => 'new desg',
//            'active' => 0,
        ]);

        $this->assertEquals('new name',Feedback::first()->name);
        $this->assertEquals('new desc',Feedback::first()->description);
        $this->assertEquals('new desg',Feedback::first()->designation);
//        $this->assertEquals('0',Feedback::first()->active);
    }

    /** @test */
    public function a_feedback_can_be_deleted()
    {
        $data = Feedback::factory()->create();
        $this->delete('admin/feedback/'.$data->id);
        $this->assertCount(0,Feedback::all());
    }

    /** @test */
    public function a_name_is_required()
    {
        $response = $this->post('admin/feedback',['name','']);
        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_description_is_required()
    {
        $response = $this->post('admin/feedback',['description','']);
        $response->assertSessionHasErrors('description');
    }


    /** @test */
    public function feedback_index_page_test()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('admin/feedback');
        $response->assertStatus(200);
    }

    /** @test */
    public function feedback_create_page_test()
    {
        $response = $this->get('admin/feedback/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function service_show_page_test()
    {
        $feedback = Feedback::factory()->create();
        $response = $this->get('admin/feedback/'.$feedback->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function feedback_edit_page_test()
    {
        $feedback = Feedback::factory()->create();
        $response = $this->get('admin/feedback/'.$feedback->id.'/edit');
        $response->assertStatus(200);
    }




}
