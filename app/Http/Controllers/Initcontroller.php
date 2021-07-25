<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tai_khoan;
use App\Models\nguoidung1;
use App\Models\donvi;
use Session;
use Auth;

class Initcontroller extends Controller
{
    public function list()
    {
        $list_init = donvi::all();
        return view('init.list')->with("list_init",$list_init);
    }

    public function create()
    {
        return view('init.create');
    }
    
    public function insert(Request $request)
    {     
       
            $request->validate([
            'tendonvi' => 'required|min:6',
            'madonvi' => 'required|unique:donvi',
        ],
        [
            'tendonvi.required' => 'Trường tên đơn vị không được để trống',
            'tendonvi.min' => 'Trường nầy ít nhất 6 kí tự',
             'madonvi.unique' => 'Mã đơn vị này đã tồn tại yêu cầu nhập mã khác',
             'madonvi.required'=>'Trường mã đoen vị không được để trống'
        ]
       );
       
         $init=donvi::create($request->all());
          return redirect("init/list");
    
    }
    
    public function delete($id)
    {
 
        $init=donvi::where('madonvi',$id)->delete();
         return redirect("init/list");
    }
    public function edit($id)
    {
     
        $list_init=donvi::where("madonvi",$id)->first();  
        return view('init.edit')->with("detail",$list_init);
    }

    public function update(Request $request)
    {
        $id = $request->madonvi;
         donvi::where('madonvi', $id)
        ->update([
            'tendonvi' =>$request->tendonvi,
        'donvicha'=>$request->donvicha,
        'mota'=>$request->mota,
         'ngaytao'=>$request->ngaytao,
         'nguoitao'=>$request->nguoitao,
         'ngaycapnhat'=>$request->ngaycapnhat,
         'nguoicapnhat'=>$request->nguoicapnhat
       ]);

         return redirect("init/list");
    }
}
