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

Route::get('/deferred-props', function () {
    return Inertia::render('DeferredProps', [
        'newsItems' => Inertia::defer(function () {
            sleep(1);

            return collect([
                ['id' => 1, 'title' => 'Item 1'],
                ['id' => 2, 'title' => 'Item 2'],
                ['id' => 3, 'title' => 'Item 3'],
                ['id' => 4, 'title' => 'Item 4'],
                ['id' => 5, 'title' => 'Item 5'],
            ]);
        }, 'newsItems'),
        'users' => Inertia::defer(function () {
            sleep(1.5);

            return collect([
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
            ]);
        }),
    ]);
});

Route::inertia('/infinite-scrolling', 'InfiniteScrolling');

Route::inertia('/lazy-loading', 'LazyLoading');
