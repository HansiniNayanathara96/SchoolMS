<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Event;

use Illuminate\Http\Request;

class CommentsController extends Controller
{





    public function store(Event $event)
    {
        Comment::create([

            'body' => request('body'),
            'event_id' => $event->id,
            'user_id' => $event->user_id

        ]);

        return back()->with('success', "Your comment has been added ");
    }

//    public function destroy($id)
//    {
//        $user = Auth()->user()->id;
//
//        $coms = Comment::find($id);
//
//        $coms->delete();
//
//
//        return back();
//    }
}
