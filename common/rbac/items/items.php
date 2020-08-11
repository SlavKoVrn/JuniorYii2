<?php
return [
    'editTask' => [
        'type' => 2,
        'ruleName' => 'editAdmin',
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'editTask',
        ],
    ],
];
