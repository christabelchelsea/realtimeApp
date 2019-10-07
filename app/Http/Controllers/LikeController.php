<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{ 
    public function likeIt(Reply $reply)
    {
        $user_id = auth()->id();
        $reply->like()->create([
            // 'user_id' => $user_id;
            'user_id' => 1
        ]);
    } 
    public function unlikeIt(Reply $reply)
    {
        $user_id = auth()->id();
        $reply->like()->where([
            // 'user_id' => $user_id;
            'user_id' => 1
        ])->first()->delete();
    } 
}
