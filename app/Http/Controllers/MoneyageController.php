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
    private $compare = FALSE;

    //public function index (){
    //    return view('sites.signup');
    //}

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
        if ($table->get('name')[0]['name'] != ""){
            return $table->get('name')[0]['name'];
        }else{
            return "nome da tabela";
        }
    }

    public static function verify_id_tables(){
        $ids = Table::get('id');
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

    public static function drop_i(){
        global $i;
        $i = 0;
    }

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

    protected function delete_account($id)
    {
        $user = User::findOrFail($id);
        $table = Table::where('user_id','=',$id);
        $values = Values::where('user_id','=',$id);
        $table->delete();
        $values->delete();
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
        $i -= 1;
        return redirect('/home') -> with('alert', 'Tabela deletada com sucesso!');
    }

    public static function sum($id){
        $tot = 0;
        for ($i = 1; $i <= 13; $i++) {
            $tot += floatval(Values::where('id', '=', $id)->get('item'. strval($i))[0]["item". strval($i)]);
        }
        return $tot;
    }

    protected function show( $id){
        return view ('sites.show_table', compact('id')); 
        
    }

    protected function edit( $id){
        return view ('sites.edit_table', compact('id')); 
        
    }

    protected function update(Request $request, $id){
        //$value = Values::where('id', '=',1)->get(); 
        //$vl = $request->item1;
        if ($request->item1 != "") {
            Values::where('id', '=', $id)->update([
                'item1' => $request->item1,]);
        }
        if ($request->item2 != "") {
            Values::where('id', '=', $id)->update([
                'item2' => $request->item2,]);
        }
        if ($request->item3 != "") {
            Values::where('id', '=', $id)->update([
                'item3' => $request->item3,]);
        }
        if ($request->item4 != "") {
            Values::where('id', '=', $id)->update([
                'item4' => $request->item4,]);
        }
        if ($request->item5 != "") {
            Values::where('id', '=', $id)->update([
                'item5' => $request->item5,]);
        }
        if ($request->item6 != "") {
            Values::where('id', '=', $id)->update([    
                'item6' => $request->item6,]);
        }
        if ($request->item7 != "") {
            Values::where('id', '=', $id)->update([
                'item7' => $request->item7,]);
        }
        if ($request->item8 != "") {
            Values::where('id', '=', $id)->update([
                'item8' => $request->item8,]);
        }
        if ($request->item9 != "") {
            Values::where('id', '=', $id)->update([    
                'item9' => $request->item9,]);
        }
        if ($request->item10 != "") {
            Values::where('id', '=', $id)->update([
                'item10' => $request->item10,]);
        }
        if ($request->item11 != "") {
            Values::where('id', '=', $id)->update([
                'item11' => $request->item11,]);
        }
        if ($request->item12 != "") {
            Values::where('id', '=', $id)->update([
                'item12' => $request->item12,]);
        }
        if ($request->item13 != "") {
            Values::where('id', '=', $id)->update([
                'item13' => $request->item13,]);
        }
        if ($request->name1 != NULL) {
            Table::where('id', '=', $id)->update([
                'item1' => $request->name1,]);
        }
        if ($request->name2 != NULL) {
            Table::where('id', '=', $id)->update([
                'item2' => $request->name2,]);
        }
        if ($request->name3 != NULL) {
            Table::where('id', '=', $id)->update([
                'item3' => $request->name3,]);
        }
        if ($request->name4 != NULL) {
            Table::where('id', '=', $id)->update([
                'item4' => $request->name4,]);
        }
        if ($request->name5 != NULL) {
            Table::where('id', '=', $id)->update([
                'item5' => $request->name5,]);
        }
        if ($request->name6 != NULL) {
            Table::where('id', '=', $id)->update([    
                'item6' => $request->name6,]);
        }
        if ($request->name7 != NULL) {
            Table::where('id', '=', $id)->update([
                'item7' => $request->name7,]);
        }
        if ($request->name8 != NULL) {
            Table::where('id', '=', $id)->update([
                'item8' => $request->name8,]);
        }
        if ($request->name9 != NULL) {
            Table::where('id', '=', $id)->update([    
                'item9' => $request->name9,]);
        }
        if ($request->name10 != NULL) {
            Table::where('id', '=', $id)->update([
                'item10' => $request->name10,]);
        }
        if ($request->name11 != NULL) {
            Table::where('id', '=', $id)->update([
                'item11' => $request->name11,]);
        }
        if ($request->name12 != NULL) {
            Table::where('id', '=', $id)->update([
                'item12' => $request->name12,]);
        }
        if ($request->name13 != NULL) {
            Table::where('id', '=', $id)->update([
                'item13' => $request->name13,]);
        }
        return view('sites/edit_table', compact('id')); 
        //return print($request);
    }

    public static function balance( $id){
        $blc = floatval(User::where('id', '=', Auth::id())->get('wage')[0]['wage']) - self::sum($id);
        return $blc;
    }

    public static function show_opinion(){
        $op = User::all();
        return $op->get('opinion');
    }

    public static function get_compare(){
        global $compare;
        return $compare;
    }

    public static function false_compare(){
        global $compare;
        $compare = FALSE;
    }    

    protected function compare_values( Request $request){
        $inst = 0;
        $id_table = Values::where('user_id', '=', Auth::id())->get('id');
        $possibility = array( NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        for ($i=0; $i < count($id_table); $i++) { 
            if (self::balance($id_table[$i]['id']) <= 0){
                $possibility[$i] = [FALSE, (Table::where('user_id', '=', Auth::id())->get('name'))[$i]['name'],0, NULL, $inst, NULL];
            }else{
                $installment = 0;
                $j = 1;
                while (TRUE) {
                    $installment = ((self::balance($id_table[$i]['id']))*$j) - ($request -> value);
                    if ($installment >= 0){
                        $inst = ($request -> value)/$j;
                        $inst = round($inst, 3);
                        break;
                    }
                    $j ++;
                }
                
                $possibility[$i] = [TRUE, (Table::where('user_id', '=', Auth::id())->get('name'))[$i]['name'], $j, ($request -> name), $inst, (Table::where('user_id', '=', Auth::id())->get('id'))[$i]['id']];
            }
            
        }
        global $compare;
        $compare = TRUE;
        return view('sites.compare', compact('possibility'));
        
    }

    public static function verify_table(){
        $verify = FALSE;
        $table = (Table::get('user_id'));
        for ($i=0; $i < count($table); $i++) { 
            if ($table[$i]['user_id'] == Auth::id()){
                $verify = TRUE;
                break;
            }
        }
        return $verify;
    }

    protected function update_wage(Request $request){
        User::where('id', '=', Auth::id())->update(['wage' => $request->wage,]);
        return redirect('sites/about');
    }

    public static function add_to_table($id, $name, $value){

        if (((Values::where('id', '=', $id)->get('item11'))[0]['item11'] == NULL)||((Values::where('id', '=', $id)->get('item11'))[0]['item11'] == 0)) {
            Values::where('id', '=', $id)->update([
                'item11' => $value,]);
        }else if (((Values::where('id', '=', $id)->get('item12'))[0]['item12'] == NULL)||((Values::where('id', '=', $id)->get('item12'))[0]['item12'] == 0)) {
            Values::where('id', '=', $id)->update([
                'item12' => $value,]);
        }else if (((Values::where('id', '=', $id)->get('item13'))[0]['item13'] == NULL)||((Values::where('id', '=', $id)->get('item13'))[0]['item13'] == 0)) {
            Values::where('id', '=', $id)->update([
                'item13' => $value,]);
        }
        if ((Table::where('id', '=', $id)->get('item11'))[0]['item11'] == NULL) {
            Table::where('id', '=', $id)->update([
                'item11' => $name,]);
        }else if ((Table::where('id', '=', $id)->get('item12'))[0]['item12'] == NULL) {
            Table::where('id', '=', $id)->update([
                'item12' => $name,]);
        }else if ((Table::where('id', '=', $id)->get('item13'))[0]['item13'] == NULL) {
            Table::where('id', '=', $id)->update([
                'item13' => $name,]);
        }
        return view('sites.show_table', compact('id'));
    }

    public static function eco(){
        $eco = (Values::where('user_id', '=', Auth::id())->get('id'));
        $max = 0;
        for ($i=0; $i < count($eco); $i++) { 
            if (self::balance($eco[$i]['id']) > $max) {
                $max = self::balance($eco[$i]['id']);
            }
        }
        return $max;
    }

    public static function date_format(){
        $date = Auth::user()->date;
        $dt = "";
        for ($i=0; $i < strlen($date); $i++) { 
            $dt .= $date[$i];  
            if($date[$i + 1] == "-"){
                break;
            }
        }
        $date = str_replace($dt, ($date[strlen($date) - 2] . $date[strlen($date) - 1]) , $date);
        $date = str_replace(("-" . $date[strlen($date) - 2] . $date[strlen($date) - 1]), "-" . $dt , $date);
        $date = str_replace("-", "/", $date);
        return $date;
    }
}
