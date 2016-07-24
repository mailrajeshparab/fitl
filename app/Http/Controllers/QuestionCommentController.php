<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class QuestionCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionId)
    {
        // store function/action is used to create new objects in the database
        // it is going to handle the Create page forms submissions.
       $comment = new Comment;
        
        //set the questions data from the form data
        $comment->question_id = $questionId;
        $comment->comment = $request->comment;
        

        //create the new question in the database using save() function
        if ( !$comment->save() ) {
            // echo '<pre>'; print_r($errors); echo '</pre>'; 
            // redirect back to the create page 
            // and pass along the errors
            // withInput() => Repopulate form values (after displaying validataion error messages)
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors',$comment->getErrors())
                ->withInput();
        }
        // Handle successful object creations 
        // redirect back to index page
        // and pass a success message => views/shared/message.blade.php
        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message',"<div class='alert alert-success'>Comment added successfully!</div>");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionId, $id)
    {
        //retrive the comment using the comment model
        $comment = Comment::find($id);

        $comment->comment = $request->comment;

        if ( !$comment->save() ) {
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors',$comment->getErrors())
                ->withInput();
        }
        // Handle successful object creations 
        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message',"<div class='alert alert-success'>Comment updated successfully!</div>");
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId, $id)
    {
       $comment = Comment::findOrFail($id);

       $comment->delete();

       return redirect()
                ->action('QuestionController@show', $questionId) 
                ->with('message',
                        '<div class="alert alert-info">Comment deleted.</div>');
    }
}
