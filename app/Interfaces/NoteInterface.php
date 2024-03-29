<?php

namespace App\Interfaces;

use App\Models\Note;

interface NoteInterface
{
    public function createNote(array $datanote);

    public function updateNote(array $datanote, Note $note);

    public function deleteNote(Note $note);
}
