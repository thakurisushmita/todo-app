<?php

                                                                                                                                                                                                                                                                                       
namespace App\Http\Controllers;                                                                                                                                                                                                                                                                               
use Illuminate\Http\Request;
use App\todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $showTodo = todo::all();
        return view('todo.home',compact('showTodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.addNewTodo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $addTodo            = new todo;
        $addTodo->title     = $request->title;
        $addTodo->content   = $request->content;

        $addTodo->save();
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "xyz";
        exit;
       // $todoList = todo::findOrFail($id);
       //  return view('todo.show')->withTodo($todoList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "abc";
        exit;
        // $todoList = todo::find($id);
        // return $todoList;
        // exit;
        // return view('todo.edit')->withTodo($todoList);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "aaaa";
        exit;
    }
}
