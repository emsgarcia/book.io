<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;

class AdminController extends Controller
{
    public function showDashboard(){
    	$categories = Category::all();
    	return view('admin.admindashboard', compact('categories'));
    }

    public function saveBook(Request $request){

    	$rules = array(
    		"title" => "required",
    		"summary" => "required",
    		"category" => "required",
    		"image_cover" => "required|image"
    	);

    	$this->validate($request, $rules);

    	$book = new Book;
    	$book->title = $request->title; //the last "title" pertains to the name attribute of the input field for title
    	$book->summary = $request->summary;
    	$book->category_id = $request->category;

    	//fetch uploaded image 
    	$image = $request->file('image_cover');
    	//create name
    	$image_name = time().".".$image->getClientOriginalExtension();
    	//set destination
    	$destination = "images/";
    	//move file to destination
    	$image->move($destination, $image_name);
    	//create string name to be saved in db
    	$book->image_cover = "/".$destination.$image_name;
    	$book->save();
    	return redirect('/admindashboard');

    }
}
