<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Creative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreativeController extends Controller
{
    protected $rules = [
        'title_normal_text'             => 'required',
        'title_bold_text'               => 'required',
        'item1_icon'                    => 'required',
        'item1_title'                   => 'required',
        'item1_description'             => 'required',
        'item2_icon'                    => 'required',
        'item2_title'                   => 'required',
        'item2_description'             => 'required',
        'item3_icon'                    => 'required',
        'item3_title'                   => 'required',
        'item3_description'             => 'required',
        'item4_icon'                    => 'required',
        'item4_title'                   => 'required',
        'item4_description'             => 'required',
    ];

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();

        // Handle file Upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/server/creative'),$new_name);
            $input['image'] = $new_name;
        }

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }else{
            $data = Creative::findOrFail($id);
            $data->update($input);
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }
}
