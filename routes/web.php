<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home');

Route::get('/polling', function () {
    $players = collect([
        'Kazama',
        'Hikaru',
        'Yoru',
        'Reina',
        'Sho',
    ])
        ->map(fn ($player) => [
            'name' => $player,
            'votes' => rand(61, 100),
        ])
        ->sortByDesc('votes')
        ->values();

    return Inertia::render('Polling', [
        'players' => $players,
    ]);
});

Route::inertia('/prefetching', 'Prefetching');

Route::get('/prefetching/users', function () {
    sleep(1);

    $users = collect([
        [
            'id' => 1,
            'name' => 'Kazama',
            'email' => 'kazama123@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Hikaru',
            'email' => 'hikaru456@example.com',
        ],
        [
            'id' => 3,
            'name' => 'Yoru',
            'email' => 'yoru789@example.com',
        ],
        [
            'id' => 4,
            'name' => 'Reina',
            'email' => 'reina101@example.com',
        ],
        [
            'id' => 5,
            'name' => 'Sho',
            'email' => 'sho202@example.com',
        ],
    ])->shuffle()->values();

    return Inertia::render('PrefetchingUsers', [
        'users' => $users,
    ]);
});

Route::inertia('/deferred-props', 'DeferredProps');

Route::inertia('/infinite-scrolling', 'InfiniteScrolling');

Route::inertia('/lazy-loading', 'LazyLoading');
