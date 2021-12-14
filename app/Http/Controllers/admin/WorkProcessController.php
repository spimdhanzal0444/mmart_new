<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WorkProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;

class WorkProcessController extends Controller
{
    protected $rules = [
//        'image'                 => 'image|mimes:jpeg,png,jpg,gif',
//        'bg_image'                 => 'image|mimes:jpeg,png,jpg,gif',
//        'video'                 => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
        'section_title_normal'  => 'required',
        'section_title_bold'    => 'required',
        'section_description'   => 'required',
        'work_item_title1'      => 'required',
        'work_item_desc1'       => 'required',
        'work_item_icon1'       => 'required',
        'work_item_title2'      => 'required',
        'work_item_desc2'       => 'required',
        'work_item_icon2'       => 'required',
        'work_item_title3'      => 'required',
        'work_item_desc3'       => 'required',
        'work_item_icon3'       => 'required',
        'work_item_title4'      => 'required',
        'work_item_desc4'       => 'required',
        'work_item_icon4'       => 'required',
    ];

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), $this->rules);
        $input = $request->all();
        $data = WorkProcess::findOrFail($id);

        // Handle file Upload
        if($request->hasFile('image')){
            for ($x = 0; $x < count($request->file()); $x++) {



                $image_arr = ['image', 'bg_image', 'video'];
                $destroyImgIndex = $image_arr[$x];
                if(File::exists(public_path('asset/server/work_and_video/'.$data->$destroyImgIndex))){
                    File::delete(public_path('asset/server/work_and_video/'.$data->$destroyImgIndex));
                    $filenameWithExt = $request->file($image_arr[$x])->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file($image_arr[$x])->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.$image_arr[$x].'_'.time().'.'.$extension;
                    $path = $request->file($image_arr[$x])->move(public_path('asset/server/work_and_video'),$fileNameToStore);
                    $input[$image_arr[$x]] = $fileNameToStore;
                }else{
                    $filenameWithExt = $request->file($image_arr[$x])->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file($image_arr[$x])->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.$image_arr[$x].'_'.time().'.'.$extension;
                    $path = $request->file($image_arr[$x])->move(public_path('asset/server/work_and_video'),$fileNameToStore);
                    $input[$image_arr[$x]] = $fileNameToStore;
                }
            }
        }

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }else{
            $data->update($input);
            return redirect()->back()->with('message', 'Successfully Updated');
        }
    }
}
