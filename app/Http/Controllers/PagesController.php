<?php
namespace  App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller{

  public function gallery(){
    return view('gallery');
   }

 public function pic(){
   return view('pic');
  }

 public function reading(){
   return view('reading');
  }

public function services(){
  return view('services');
 }

 public function contact(){
   return view('contact');
  }

}
