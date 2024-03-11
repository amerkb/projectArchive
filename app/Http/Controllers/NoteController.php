<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest\CreateNoteRequest;
use App\Http\Requests\NoteRequest\UpdateNoteRequest;
use App\Interfaces\NoteInterface;
use App\Models\Note;
use App\Models\Update;

class NoteController extends Controller
{
    public function __construct(private NoteInterface $note)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateNoteRequest $request)
    {
        return $this->note->createNote($request->validated());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        return $this->note->updateNote($request->validated(), $note);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return $this->note->deleteNote($note);

    }
}
