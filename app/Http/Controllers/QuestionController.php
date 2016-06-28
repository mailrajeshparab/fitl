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
        //test print the data
        // echo '<pre>';
        // print_r($questions);
        // echo '</pre>';
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
        $question = new Question;

        //set the questions data from the form data
        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;

        //create the new question in the database
        //$question->save();        
        if ( !$question->save() ) {
            $errors = $question->getErrors();
            // echo '<pre>';
            // print_r($errors);
            // echo '</pre>'; 
            // redirect back to the create page and pass along the errors
            return redirect()
                ->action('QuestionController@create')
                ->with('errors',$errors)
                ->withInput();
        }
        // success!
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
        //testing
        // echo $question->title;
        // exit;
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
        //
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
        //
    }
}
