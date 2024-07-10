<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_show_event_page()
    {
        $this->get('')->assertOk();
    }

    public function test_can_show_create_event_page()
    {
        $this->get('events/create')->assertOk()
        ->assertSee('start_date')
        ->assertSee('title')
        ->assertSee('category')
        ->assertSee('end_date');
    }

}
