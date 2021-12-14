<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RankWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RankWebController extends Controller
{
    protected $rules = [
        'rank_section_normal_title'     => 'required',
        'rank_section_bold_title'       => 'required',
        'rank1_circle_text'             => 'required',
        'rank2_circle_text'             => 'required',
        'rank3_circle_text'             => 'required',
        'rank4_circle_text'             => 'required',
    ];

    public function index()
    {
        $ranks = RankWeb::orderBy('id', 'DESC')->get();
        return view('admin.general.rank-index', compact('ranks'));
    }

    public function show(){
        $rank = RankWeb::orderBy('id', 'DESC')->first();
        return view('admin.general.rank-create',compact('rank'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->errors()));
        }else{
            $data = RankWeb::findOrFail($id);
            $data->fill($input)->save();
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }

}
