<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class notepolicy
{
     /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    // view note policy 
    public function viewNote(User $user, Note $note)
    {
        return $user->id === $note->user_id;
    }
}
