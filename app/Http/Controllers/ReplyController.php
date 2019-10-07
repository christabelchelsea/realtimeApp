<?php

namespace App\Http\Controllers;

use App\Model\Reply;
use App\Model\Question;
use App\Http\Resources\ReplyResource;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function __construct()
    { 
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
    }
    
    
    public function store(Question $question, Request $request)
    {
        $question->replies()->create($request->all());
        return response(['reply' => new ReplyResource($reply)], 201);
        // return response('Created', 201);
    } 

    public function show(Question $question, Reply $reply)
    { 
        return new ReplyResource($reply);
    }
    
    public function update(Question $question, Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Updated', 202);
    }
    
    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
        return response(null, 204);
    }
}
