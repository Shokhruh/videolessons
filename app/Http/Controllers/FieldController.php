<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;
use Illuminate\Support\Facades\Auth;

class FieldController extends Controller
{
    public function index()
    {
        if (Auth::user()->role->position === 'developer') {
            $fields = Field::all();
            return view('backend.field.index', [
                'fields' => $fields,
            ]);
        }
    }

    public function create()
    {
        $this->authorize('create', Field::class);

        return view('backend.field.create');
    }

    public function store(StoreFieldRequest $request)
    {
        $this->authorize('create', Field::class);

        Field::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('fields.index')->with('message', "Siz soxani muvaffaqqiyatli tarzda qo'shdingiz!");
    }

    public function show(Field $field)
    {
        $this->authorize('view', $field);

        return view('backend.field.show', [
            'field' => $field,
        ]);
    }

    public function edit(Field $field)
    {
        $this->authorize('update', $field);

        return view('backend.field.edit', [
            'field' => $field,
        ]);
    }

    public function update(UpdateFieldRequest $request, Field $field)
    {
        $this->authorize('update', $field);

        $field->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('fields.index')->with('message', "Siz soxani muvaffaqqiyatli tarzda tahrirladingiz!");
    }

    public function destroy(Field $field)
    {
        $this->authorize('delete', $field);

        $field->delete();
        return redirect()->route('fields.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda o'chirdingiz!");
    }
}
