<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tai_khoan;
use App\Models\nguoidung1;
use App\Models\donvi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class Usercontroller extends Controller
{
    public function login()
    {
           return view("login");
    }

    public function logout()
    {
           Session::put('account',null);
           Session::put('powerful',null);
           
          return redirect("logins");
    }

    public function checkLogin(Request $request){
       $account = $request->account;
       $password = $request->password;
    
       $taikhoan = tai_khoan::where('tentaikhoan', $account)->where('matkhau',$password)->first();
       if($taikhoan)
       { 
          Session::put('account',$taikhoan->tentaikhoan);
          Session::put('powerful', $taikhoan->quyen);
          return redirect('user/list');  
       }
          return redirect('login');

    }

    public function list(){
    
         if(Session::get('account'))
         {
              return view("user.list")->with("nguoidung",nguoidung1::all());   
         }
         
              return redirect('login');
    }


    public function create(){
         return view("user.create")->with("madv",donvi::all());
       }
       
       public function insert(Request $request)
       {
              $nguoidung = new nguoidung1;
              $nguoidung->hoten= $request->hoten;
              $nguoidung->mota=$request->mota;
              $nguoidung->ngaysinh=$request->ngaysinh;
              $nguoidung->ngaytao=$request->ngaytao;
              $nguoidung->diachi=$request->diachi;
              $nguoidung->nguoitao=$request->nguoitao;
              $nguoidung->ngaycapnhat=$request->ngaycapnhat;
              $nguoidung-> nguoicapnhat=$request->nguoicapnhat;
              $nguoidung->donvi=$request->donvi;
              $nguoidung->save();

              return redirect("user/list");
       }    

       public function delete($id)
       {
              nguoidung1::find($id)->delete();

              return redirect("user/list");
       }

       public function edit($id)
       {
             $nguoidung = nguoidung1::where("id",$id)->first();
             $donvi = donvi::all(); 

             return view("user.edit")->with("detail",$nguoidung)->with('category',$donvi);
       }

       public function update(Request $request)
       {
            $id = $request->id;
            $nguoidung = nguoidung1::find($id);
            $nguoidung->hoten= $request->hoten;
            $nguoidung->mota=$request->mota;
            $nguoidung->ngaysinh=$request->ngaysinh;
            $nguoidung->ngaytao=$request->ngaytao;
            $nguoidung->diachi=$request->diachi;
            $nguoidung->nguoitao=$request->nguoitao;
            $nguoidung->ngaycapnhat=$request->ngaycapnhat;
            $nguoidung-> nguoicapnhat=$request->nguoicapnhat;
            $nguoidung->donvi=$request->donvi;
            $nguoidung->save();

            return redirect("user/list");
       }
   
       

}
