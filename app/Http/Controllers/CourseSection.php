<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseSection extends Controller
{
    //
    public function lectures(){
        return $this->hasMany(CourseLecture::class, 'section_id');
    }


}
