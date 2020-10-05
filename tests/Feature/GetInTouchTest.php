<?php

namespace Tests\Feature;

use App\Models\GetInTouch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetInTouchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_get_in_touch_can_be_added()
    {
        $data = GetInTouch::factory()->create();
        $this->post('get-in-touch',[$data]);
        $this->assertCount(1,GetInTouch::all());
    }

    /** @test */
    public function a_get_in_touch_can_be_updated()
    {
        $data = GetInTouch::factory()->create();
        $this->put('admin/get-in-touch/'.$data->id,[
            'name' => 'new name',
            'message' => 'new message',
            'mobile_number' => '1234',
            'subject' => 'new subject',
        ]);

        $this->assertEquals('new name',GetInTouch::first()->name);
        $this->assertEquals('new message',GetInTouch::first()->message);
        $this->assertEquals('1234',GetInTouch::first()->mobile_number);
        $this->assertEquals('new subject',GetInTouch::first()->subject);
    }

    /** @test */
    public function a_get_in_touch_can_be_deleted()
    {
        $data = GetInTouch::factory()->create();
        $this->delete('admin/get-in-touch/'.$data->id);
        $this->assertCount(0,GetInTouch::all());
    }

    /** @test */
    public function a_name_is_required()
    {
        $response = $this->post('admin/get-in-touch',['name','']);
        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_message_is_required()
    {
        $response = $this->post('admin/get-in-touch',['message','']);
        $response->assertSessionHasErrors('message');
    }



    /** @test */
    public function a_subject_is_required()
    {
        $response = $this->post('admin/get-in-touch',['subject','']);
        $response->assertSessionHasErrors('subject');
    }

    /** @test */
    public function a_mobile_number_is_required()
    {
        $response = $this->post('admin/get-in-touch',['mobile_number','']);
        $response->assertSessionHasErrors('mobile_number');
    }


}
