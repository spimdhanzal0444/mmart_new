<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RankController extends Controller
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
        $ranks = Rank::orderBy('id', 'DESC')->get();
        return view('admin.general.rank-index', compact('ranks'));
    }

    public function show(){
        $rank = Rank::orderBy('id', 'DESC')->first();
        return view('admin.general.rank-create',compact('rank'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->errors()));
        }else{
            $data = Rank::findOrFail($id);
            $data->fill($input)->save();
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }

}
