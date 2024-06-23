<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.index',compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(ColorFormRequest $request)
    {
        $validateData = $request->validated();
        Color::create($validateData);
        return redirect('admin/colors')->with('message', 'Color Added Successfully');
    }

    public function destroy(int $colors_id)
    {
        $colors = Color::findOrFail($colors_id);
        $colors->delete();
        return redirect('/admin/colors')->with('message','colors  deleted');
    }
}
