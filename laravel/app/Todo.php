<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    protected $perPage = 4;

    public function pagenate(){
        return \DB::table('todos')->paginate($this->perPage);
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

    public function drop($id){
        return \DB::table('todos')->where('id', $id)->delete();
    }
}
