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
    public $i = 0;
    public $opinion = FALSE;

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



    public function create_table(Request $request){
        $userId = Auth::id(); 
                Table::create([
                    'user_id' =>$userId,
                    'name' => $request->name,
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
                    'user_id' =>$userId,
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
                return redirect('home');
            }

    public static function show_table_name(){
        $table = Table::findOrFail(Auth::id());
        //$table = Table::where('name' ,'!=' ,"")->get('id');
        if ($table->get('name')[0]['name'] != ""){
            return $table->get('name')[0]['name'];
        }else{
            return "nome da tabela";
        }
        
//        return $table->get('name')[0]['name'];

    }

    public static function verify_id_tables(){
        $ids = Table::get('id');
        //for ($i = 0; $i <= count($ids); $i++) {
           // if($ids[$i]['id'] == Auth::id('id')){
             //   return TRUE;
           // }else{
         //       return FALSE;
         //   }
        //}

        return $ids;
    }

    public static function verify_foreign_key(){
        $ids = Table::get('user_id');
        return $ids;
    }

    public static function add(){
        global $i;
        $i += 1;
    }

    public static function count(){
        global $i;
        return  $i;
    }

    /*public function edit_name(Request $request){
        $task = Auth::id();
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();

        $task->fill($input)->save();
        return redirect('sites/about');
    }*/

    //public function edit_name(Request $request)
    //{
     //   Auth::with([
      //      'name' => $request->name,
       // ]);
       // return redirect('sites/about');
    //}

    protected function opinion(Request $request)
    {
        global $opinion;
        $opinion = TRUE;
        $user = User::findOrFail(Auth::id());
        $user->opinion = $request->get('opinion');
        $user->save();
        
        return redirect('sites/about');
    }

    public static function get_opinion(){
        global $opinion;
        return $opinion;
    }

    protected function delete_account()
    {
        $user = User::findOrFail(Auth::id());
        $user->delete();
        return redirect('/');
    }

    protected function delete( $id)
    {
        $table = Table::where('id','=',$id);
        $values = Values::where('id','=',$id);
        $table->delete();
        $values->delete();
        global $i;
        $i = 0;
        return redirect('/home');
    }

    public static function sum($id){
        //$tot = 0;
        //for ($i = 1; $i <= 13; $i++) {
        //    $tot += Values::where('id', '=', $id)->get('item'+ strval($i));
        //}
        //return $tot;
    }
}
