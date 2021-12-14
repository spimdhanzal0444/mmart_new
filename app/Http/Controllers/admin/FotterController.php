<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FotterController extends Controller
{
    protected $rules = [
        'copyright'  => 'required',
    ];

    public function index(){
        $footer = Footer::orderBy('id', 'DESC')->first();
        return view('admin.general.footer', compact('footer'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();
        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
            $data = Footer::findOrFail($id);
            $data->fill($input)->save();
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }
}
