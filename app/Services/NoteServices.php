<?php

namespace App\Services;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Models\User;

class NoteServices
{

    //getall 
    function getAll(User $user)
    {
        return ($user->Notes);
    }

    //create note 
    function create(Request $req)
    {
        $not = new Note();
        $userid = $req->user()->id;
        $not->title = ($req->input('notetitle'));
        $not->content = ($req->input('notetext'));
        $not->user_id = ($userid);
        return $not->save();
    }

    //update 
    function update(Request $req, Note $note)
    {
        $note->title = $req->input('notetitle');
        $note->content = $req->input('notetext');
        return $note->save();
    }

    //remove 
    function remove(Note $note)
    {
        return $note->delete();
    }
}


//last updated 7/204 