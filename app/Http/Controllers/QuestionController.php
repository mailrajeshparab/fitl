<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        //test print the data from the database//echo '<pre>';print_r($questions);echo '</pre>';
        $data = array();
        $data['objects'] = $questions;
        return view('questions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create an empty object and pass it through to the view
        // use this new empty object to power the form on create page
        $question = new Question;
        $data = array();
        $data['question'] = $question;
        return view('questions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store function/action is used to create new objects in the database
        // it is going to handle the Create page forms submissions.

        $question = new Question;
        
        //set the questions data from the form data
        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;

        //create the new question in the database using save() function
        if ( !$question->save() ) {
            $errors = $question->getErrors();
            // echo '<pre>'; print_r($errors); echo '</pre>'; 
            // redirect back to the create page 
            // and pass along the errors
            // withInput() => Repopulate form values (after displaying validataion error messages)
            return redirect()
                ->action('QuestionController@create')
                ->with('errors',$errors)
                ->withInput();
        }
        // Handle successful object creations 
        // redirect back to index page
        // and pass a success message => views/shared/message.blade.php
        return redirect()
            ->action('QuestionController@index')
            ->with('message',"<div class='alert alert-success'>Question created successfully!</div>");

    }


/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Now Hook up the Model and Controller
        $data = array();
        $question = Question::findOrFail($id);
        //testing // echo $question->title; // exit;
        $data['object'] = $question;

        return view('questions/show', $data); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.edit',['question'=>$question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // update function/action is used to update objects in the database
        // it is going to handle the Edit page forms submissions.
        $question = Question::findOrFail($id);
        // set questions data from form data
        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;

        //update the question in the database using save() function
        if ( !$question->save() ) {
            $errors = $question->getErrors();
            // echo '<pre>'; print_r($errors); echo '</pre>'; 
            // redirect back to the Edit Page 
            // and pass along the errors
            // withInput() => Repopulate form values (after displaying validataion error messages)
            return redirect()
                ->action('QuestionController@edit', $question->id)
                ->with('errors',$errors)
                ->withInput();
        }
        // Handle successful object update 
        // redirect back to index page
        // and pass a success message => views/shared/message.blade.php
        return redirect()
            ->action('QuestionController@index')
            ->with('message',"<div class='alert alert-success'>The Question was updated !!!</div>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()
            ->action('QuestionController@index')
            ->with('message',"<div class='alert alert-info'>The Question was deleted.</div>");
    }
}
