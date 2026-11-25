<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        return view('topics.show', [
            'topic' => $topic,
            'tickets' => $topic->tickets()->orderBy('id')->get(),
        ]);
    }
}
