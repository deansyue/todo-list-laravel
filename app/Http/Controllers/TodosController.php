<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);

        Todo::create($validated);

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = (int) $id;
        $todo = Todo::find($id);

        if (is_null($todo)) {
            return redirect('/todos')->withErrors('找不到該todo的資料，請重新嘗試!');
        }

        return view('detail', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = (int) $id;
        $todo = Todo::find($id);

        if (is_null($todo)) {
            return redirect('/todos')->withErrors('找不到該todo的資料，請重新嘗試!');
        }

        return view('edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        $isDone = $request->input('isDone') === 'on' ? true : false;
        $validated['is_done'] = $isDone;

        $todoObject = Todo::where('id', $id);
        $todo = $todoObject->first();

        if (is_null($todo)) {
            return redirect('/todos')->withErrors('找不到該todo的資料，請重新嘗試!');
        }

        $todoObject->update($validated);
        return redirect("/todos/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = (int) $id;
        $errors = [];
        $todoDataObject = Todo::where('id', $id);
        $todo = $todoDataObject->first();

        if (is_null($todo)) {
            array_push($errors, '找不到該todo的資料，請重新嘗試!');
        } else {
            $todoDataObject->delete();
        }

        return redirect('/todos')->withErrors($errors);
    }
}
