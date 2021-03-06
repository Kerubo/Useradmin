<?php

class TodosController extends \BaseController {
     Protected $todo;
	public function __construct(Todo $todo)
	{
		$this->todo = $todo;
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todos = Todo::all();
		return View::make('todos.index', compact('todos'));
	}

	public function search()
	{
		$search = Input::get('search');
		$todos = Todo::where('todo', 'LIKE', "%$search%")->get();
		return View::make('todos.index', compact('todos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('todos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $data = ['todo' => Input::get('todo')];
		// $validation = Validator::make($data, ['todo' => 'required']);
		// if($validation->passes())
		// {
		// 	$todo        = new Todo($data);
		// 	$user        = Auth::user();
		// 	$createdtodo = $user->todo()->save($todo);

		// 	if($createdtodo){
		// 		return Redirect::route('todos.index')->with('message', 'Todo created.');
		// 	}
		// }
		$data = ['todo' => Input::get('todo')];
		$data['user_id'] = 1;
		$validation = Validator::make($data, ['todo' => 'required']);
		if($validation->passes())
		{   
			$this->todo->create($data);
			// $user        = Auth::user();
			// $todo        = new Todo($data);
			// $user        = Auth::user();
			// $createdtodo = $user->todo()->save($todo);

			// if($createdtodo){
				return Redirect::route('todos.index')->with('message', 'Todo created.');
			// }
		}

		return Redirect::back()->withErrors($validation);
	}
}
