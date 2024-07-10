<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Services\NoteServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NoteController extends Controller
{

    function __construct(NoteServices $noteServices)
    {
        $this->_noteServices = $noteServices;
    }


    //get notes
    public function index(Request $req)
    {
        $notes = $this->_noteServices->getAll($req->user());
        return (view('Notes.note', ["notes" => $notes]));
    }



    //create not form 
    public function createform()
    {
        return view('Notes.create');
    }


    //create a note 
    public function createnote(Request $req)
    {
        $req->validate([
            "notetitle" => "string|required|min:5",
            "notetext" => "string|required|min:10"
        ]);

        if ($this->_noteServices->create($req)) {
            return redirect()->back()->with(["status" => "successfully created!", "type" => "success"]);
        } else {
            return redirect()->back()->with(["status" => "Error occured!", "type" => "error"]);
        }
    }


    //update form 
    public function updateform(Request $req, $id)
    {
        //author...
        $note = Note::where("id", $id)->first();
        Gate::authorize('viewNote', $note);
        //
        return view('Notes.update', ['note' => $note]);
    }



    //update note 
    public function updatenote(Request $req, $id)
    {
        $req->validate([
            "notetitle" => "string|required|min:5",
            "notetext" => "string|required|min:10"
        ]);

        //author...
        $note = Note::where("id", $id)->first();
        Gate::authorize('viewNote', $note);
        //cont
        $updated=false;
        if($note->content==$req->notetext && $note->title==$req->notetitle)
        {
            return redirect()->back()->with(["status" => "No change!", "type" => "error"]);
        }
        if ($this->_noteServices->update($req, $note)) {
            return redirect()->back()->with(["status" => "successfully updated!", "type" => "success"]);
        } else {
            return redirect()->back()->with(["status" => "Error occured!", "type" => "error"]);
        }
    }

    //display note info 
    public function noteinfo($id)
    {
        //author
        $note = Note::where("id", $id)->first();
        Gate::authorize('viewNote', $note);
        //
        return view('Notes.detail', ['note' => $note]);
    }

    //delete note
    public function deletenote($id)
    {
        //author
        $note = Note::where("id", $id)->first();
        Gate::authorize('viewNote', $note);
        //

        if($this->_noteServices->remove($note))
        {
            return redirect()->back()->with(["status"=>"successfully deleted","type"=>"success"]);
        } else {
            return redirect()->back()->with(["status"=>"unable to deleted","type"=>"error"]);
        }
    }


    //serv
    private NoteServices $_noteServices;
}
