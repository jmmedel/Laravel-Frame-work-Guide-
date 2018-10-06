<?php


namespace App\Http\Controllers\PageController;
use App\Http\Controllers\Controller;
use App\Question;
class PageController extends Controller
{

    public function about()
    {

        return "about us Page";

    }

    public function contact()

    {
        return "Contact Page";
    }


    public function submitContact()
    {

        return "Submit Contact";

    }


    public function index()
    {
         //
        // go to the model and get a group of records
        $questions = Question::orderBy('id','desc')->paginate(5);
       // return the view, and pass in the group of records to loop through
       return view('welcome') ->with('questions', $questions);
    }

}
