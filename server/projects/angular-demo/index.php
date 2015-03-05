<?php
$result = [
    'success' => TRUE,
    'data' => [
        [
            'id' => 1,
            'action' => 'Buy Flowers',
            'done' => false,
        ], [
            'id' => 2,
            'action' => 'Buy Shoes',
            'done' => false,
        ], [
            'id' => 3,
            'action' => 'Collect Tickets',
            'done' => true,
        ], [
            'id' => 4,
            'action' => 'Call Joe',
            'done' => false,
        ]
    ]
];
echo json_encode($result);