<?php namespace App\Http\Controllers;

//coreファイル
use Illuminate\Auth\Guard;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use App\Todo;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\createRequest;
use App\Http\Requests\editRequest;

class TodoController extends Controller
{
    protected $auth;
    protected $todo;

    public function __construct(Guard $auth, Todo $todos){
        $this->auth = $auth;
        $this->todo = $todos;
    }

    public function index(){
        $ret = $this->todo->paginate();
        return view('todo.index')->with(compact('ret'));
    }

    public function create(){
        return view('todo.create');
    }

    public function store(createRequest $request){
        $params = $request->all();
        $this->todo->insert($params);
        return redirect(route('todo.index'));
    }

    public function edit($id){
        $ret = $this->todo->get($id);
        return view('todo.edit')->with('ret', $ret);
    }

    public function update(editRequest $request){
        $params = $request->all();

        return redirect(route('todo.index'));
    }

    public function destroy($id){
        $this->todo->drop($id);
        return redirect(route('todo.index'));
    }
}
