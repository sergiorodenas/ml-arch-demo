<?php

return [
    'models' => [
        'products' => [
            'type' => 'clustering',
            'algorithm' => 'kmeans',
            'iterations' => '2',
            'batch_size' => '4',
            'storage' => 'redis' //mysql,aws,google
        ],

        
    ]
];