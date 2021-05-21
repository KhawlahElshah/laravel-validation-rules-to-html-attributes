<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomFormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form', ['attributes' => (new CustomFormRequest)->htmlAttributes()]);
    }
}
