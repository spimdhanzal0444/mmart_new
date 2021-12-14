<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Creative;
use App\Models\GeneraleSettings;
use App\Models\HomeContact;
use App\Models\Rank;
use App\Models\WorkProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralSettingController extends Controller
{
    protected $rules = [
        'sitetitle'             => 'required',
        'metatitle'             => 'required',
        'metadescription'       => 'required',
        'metakeyword'           => 'required',
        'metaauthor'            => 'required',
        'banner_normal_text'    => 'required',
        'banner_normal_text2'    => 'required',
        'banner_bold_text'      => 'required',

//        'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
//        'favicon' => 'required|image|mimes:jpeg,png,jpg,gif',
//        'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif',
    ];


    public function index()
    {
        $data = GeneraleSettings::orderBy('id')->get();
        $creative = Creative::orderBy('id')->get();
        $works = WorkProcess::orderBy('id')->get();
        $homeContact = HomeContact::orderBy('id')->get();
        return view('admin.general.index',compact('data', 'creative', 'works', 'homeContact'));
    }

    public function show()
    {
        $data = GeneraleSettings::orderBy('id', 'DESC')->first();
        $creative = Creative::orderBy('id', 'DESC')->first();
        $pricing = Rank::orderBy('id')->first();
        $works = WorkProcess::orderBy('id')->first();
        $hm_contact = HomeContact::orderBy('id')->first();
        return view('admin.general.create',compact('data', 'creative', 'pricing', 'works', 'hm_contact'));
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();

        // Handle file Upload
        if($request->hasFile('banner_image')){
            for ($x = 0; $x < count($request->file()); $x++) {
                $image_arr = ['logo', 'favicon', 'banner_image'];
                $filenameWithExt = $request->file($image_arr[$x])->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file($image_arr[$x])->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.$image_arr[$x].'_'.time().'.'.$extension;
                $path = $request->file($image_arr[$x])->move(public_path('asset/server/general'),$fileNameToStore);
                $input[$image_arr[$x]] = $fileNameToStore;
            }
        }

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
            $data = GeneraleSettings::findOrFail($id);
            $data->update($input);
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }
}
