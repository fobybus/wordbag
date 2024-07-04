<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    //get notes
    public function index()
    {
        print("notes page");
    }

    //handle login 
    public function login()
    {

    }

    //create not form 
    public function createform()
    {
        print("create form");
    }

    //create a note 
    public function createnote()
    {

    }

    //update form 
    public function updateform($id)
    {
        
    }

    //update note 
    public function updatenote($id)
    {

    }

    //display note info 
    public function noteinfo($id)
    {

    }

    //delete note
    public function deletenote($id)
    {

    }

    
}
