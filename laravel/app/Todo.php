<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    public function getall(){
        return \DB::table('todos')->get();
    }

    public function insert(array $params){
        return \DB::table('todos')
        ->insert(['title' => $params['title'], 'comment' => $params['comment'], 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')]);
    }

    public function get($id){
        return \DB::table('todos')
        ->where('id', $id)->first();
    }

    public function renewal($params){
        return \DB::table('todos')
        ->where('id',$params['id'])->update(['title' => $params['title'],'comment' => $params['comment']]);
    }

    // public funciton delete($id){
    //     return \DB::table('todo')->
    // }
}