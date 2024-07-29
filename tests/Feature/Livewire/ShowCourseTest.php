<?php

use App\Livewire\ShowCourse;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ShowCourse::class)
        ->assertStatus(200);
});
