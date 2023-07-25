<?php

use App\Models\Idea;

test('list of ideas shows on main page', function () {
    $ideaOne = Idea::factory()->create([
        'title' => 'My first Idea',
        'description' => 'Description of my first idea',
    ]);

    $ideaTwo = Idea::factory()->create([
        'title' => 'My second Idea',
        'description' => 'Description of my second idea',
    ]);

    $response = $this->get(route('idea.index'));

    $response->assertSuccessful();
    $response->assertSee($ideaOne->title);
    $response->assertSee($ideaOne->description);
    $response->assertSee($ideaTwo->title);
    $response->assertSee($ideaTwo->description);
});


