<?php





it('is a dummy test', function () {
    $post = Post::factory()->create(['title' => 'Hello']);
    expect($post->title)->toBe('Hello');
});
