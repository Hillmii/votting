<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poll;
use App\Models\Vote;
use App\Models\Choices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PollController extends Controller
{
    public function index(){
        $polls = Poll::where('created_by', auth()->user()->id)->get();
        return view('layout.homePoll',[
            'polls' => $polls,
        ]);
    }
    public function create(Poll $poll){
         return view('layout.createPoll');
    }

    public function store(request $request){
        $request->validate([
            'title' => 'required|min:5',
            'desc' => 'required|min:7',
            'deadline' => 'required',
            'choices' => 'required|array|min:2',
        ]);
    
        $timesTemp = strtotime($request->deadline);
    
        $poll = Poll::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'deadline' => $timesTemp,
            'created_by' => Auth::user()->id,
        ]);

        $poll->choices()->createMany($request->choices);
        
        return redirect('poll');
    }

    public function vote($id, Request $request){
        $vote = Vote::where('user_id', auth()->user()->id)->exists() && Vote::where('poll_id', $id)->exists();
        $poll = Poll::where('id', $id)->first();
        // $count = Vote::where('poll_id', $id)->get();
        $diffForHumans = Carbon::createFromTimestamp($poll->deadline)->diffForHumans();
        
        return view('layout.votePoll',[
            'poll' => $poll,
            'diffForHumans' => $diffForHumans,
            'vote' => $vote
        ]);
    }

    public function voteStore($id, Request $request){
        $poll = Poll::where('id', $id)->first();
        $request->validate([
            'choice_id' => 'required',
        ]);

        Vote::create([
            'choice_id' => $request->choice_id,
            'user_id' => auth()->user()->id,
            'poll_id' => $poll->id,
            'hasVoted' => 1,
        ]);
        return back();
    }

    public function delete($id){
        $poll = Poll::find($id);
        
        Choices::where('poll_id', $id)->delete();

        $poll->delete();

        return back();
    }

    public function show($id){
        $poll = Poll::find($id);

        return view('layout.show',[
            'poll' => $poll
        ]);
    }

    public function update($id, Request $request){
        $poll = Poll::find($id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'choices' => 'required|array|min:2',
        ]);

        $poll->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'created_by' => $poll->created_by,
            'deadline' => strtotime($request->deadline),
        ]);

        $poll->choices()->delete();

        $poll->choices()->createMany($request->choices);

        return redirect('poll');
    }

}