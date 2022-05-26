<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    */

    'models' => [
        'message' => Shahinur\Messenger\Models\Message::class,
        'thread' => Shahinur\Messenger\Models\MessageThread::class,
        'participant' => Shahinur\Messenger\Models\MessageThreadParticipant::class,
    ],

];
