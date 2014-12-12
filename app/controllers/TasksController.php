<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Task::remember(60)->cacheTags('tasks')->get();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        Cache::tags('tasks')->flush();

        $task = new Task;
        $task->name = Input::get('name');
        $task->save();

        return $task;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $task = Task::findOrFail($id);

        return $task;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        Cache::tags('tasks')->flush();

        $task = Task::findOrFail($id);
        $task->name = Input::get('name');
        $task->completed = Input::get('completed');
        $task->save();

        return $task;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Cache::tags('tasks')->flush();

        $task = Task::findOrFail($id);
        $task->delete();
	}


}
