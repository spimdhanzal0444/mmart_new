<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeCOntactController extends Controller
{

    protected $rules = [
        'address'           => 'required',
        'address_icon'      => 'required',
        'email'             => 'required',
        'email_address'     => 'required',
        'email_icon'        => 'required',
        'call_text'         => 'required',
        'call_icon'         => 'required',
    ];

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }else{
            $data = HomeContact::findOrFail($id);
            $data->update($input);
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }
}
