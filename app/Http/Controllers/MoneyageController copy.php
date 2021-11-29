<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Moneyage;
use App\Models\Table;
use App\Models\Values;
use Illuminate\Support\Facades\Auth;

class MoneyageController extends Controller 

    

{
    public function __construct(){
        $this->id = 0;
        $this->isUser = FALSE;
    }

    public function index (){
        return view('sites.signup');
    }

    public function create(Request $request){
        $userId = Auth::id(); 
        Moneyage::create([
            'id' =>$userId,
            'name' => $request->name,
            'date' => $request->date,
            'gender' => $request->gender,
            'opinion' => $request->opinion,
            'wage' => $request->wage,
            
        ]);
        return redirect('sites/about');
    }

    public function new_table(){
        return view('sites/creating_table');
    }

    public function logged($id){
        $user = Moneyage::where('id',$id)->get();
        $this->isUser = TRUE;
        return view('sites/home', compact('user'));
    }

    public function verify(Request $request){
        global $user;
        $email = $request->input('email');
        $password = $request->input('password');
        $email_bd = Moneyage::where('email',$email)->value('email');
        $password_bd = Moneyage::where('password',$password)->value('password');
        $id_email = Moneyage::where('email',$email)->value('id');
        $id_password = Moneyage::where('password',$password)->value('id');
        //$id = $request->id;
        if($email_bd == $email && $password_bd == $password && $id_email == $id_password){
            //$user = Moneyage::where('id',$id)->get();
            $this->id = $id_email;
            return $this->logged($this->id);
            //return redirect('sites/home');
        }else{
            return redirect('sites/denied');
        }
    }

    public function create_table(Request $request){
        $userId = Auth::id(); 
                Table::create([
                    'id' =>$userId,
                    'item1' => $request->name1,
                    'item2' => $request->name2,
                    'item3' => $request->name3,
                    'item4' => $request->name4,
                    'item5' => $request->name5,
                    'item6' => $request->name6,
                    'item7' => $request->name7,
                    'item8' => $request->name8,
                    'item9' => $request->name9,
                    'item10' => $request->name10,
                    'item11' => $request->name11,
                    'item12' => $request->name12,
                    'item13' => $request->name13,
                    
                ]);
                Values::create([
                    'id' =>$userId,
                    'item1' => $request->value1,
                    'item2' => $request->value2,
                    'item3' => $request->value3,
                    'item4' => $request->value4,
                    'item5' => $request->value5,
                    'item6' => $request->value6,
                    'item7' => $request->value7,
                    'item8' => $request->value8,
                    'item9' => $request->value9,
                    'item10' => $request->value10,
                    'item11' => $request->value11,
                    'item12' => $request->value12,
                    'item13' => $request->value13,
                    
                ]);
                return redirect('sites/table');
            }

    public function logoff(){
        $this->isUser = FALSE;
        $this->id = 0;
        return  redirect('sites/index');
    }


    public function verification(){
        $isUser = $this->isUser = FALSE;
        $this->logged($this->id);
    }
}
