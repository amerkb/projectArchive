<?php

namespace App\Repository;

use App\Http\Resources\NoteResource;
use App\Interfaces\NoteInterface;
use App\Models\Note;

class NoteRepository extends BaseRepositoryImplementation implements NoteInterface
{
    public function model()
    {
        return Note::class;
    }

    public function getFilterItems($filter)
    {
        // TODO: Implement getFilterItems() method.
    }

    public function createNote(array $datanote)
    {
        $note = $this->create($datanote);

        return NoteResource::make($note);
    }

    public function updateNote(array $datanote, Note $note)
    {
        $note = $this->updateById($note->id, $datanote);

        return NoteResource::make($note);
    }

    public function deleteNote(Note $note)
    {
        $this->deleteById($note->id);

        return response()->json(['message' => 'delete successfully']);
    }
}
