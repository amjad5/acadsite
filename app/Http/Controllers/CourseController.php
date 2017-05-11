<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecture;
use App\Section;
use App\Category;
use App\SubCategory;

class CourseController extends Controller
{
  public function courseRegister(Request $request){

    $this->validate($request, [
     'category' => 'required',
     'subcategory' => 'required',
     'course' => 'required',
     'section' => 'required',
     'lecture' => 'required',
     ''
     ]);

    //return $request::get()
    $sections = $_POST['section'];

    $course = new Course;
    $course->course_name = $_POST['course'];
    $course->category = $_POST['category'];
    $course->subcategory = $_POST['subcategory'];
    $course->save();

    for ($i = 1; $i < count($sections)+1; $i++)
    {
      $section = new Section;
      $counter = (string)$i;
      $section->sec_title = $sections[$counter];
      $section->course_fk = $course->course_id;
      $section->save();

     foreach ($_POST['lecture'][$counter] as $lecture) {
       $lect = new Lecture;
       $lect->lec_title = $lecture;
       $lect->sec_fk = $section->sec_id;
       $lect->save();
     }
    }

    return ("Data Inserted Successfully");

  }
}
