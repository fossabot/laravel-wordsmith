<?php

namespace App\Repositories\Site;

use App\Models\Sociallink as Model;
use App\Repositories\RepositoryInterface;

class SociallinkRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	public $model;

	/**
	 * SociallinkRepository constructor.
	 * @param Model $model
	 */
	public function __construct()
	{
		$this->model = new Model();
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get task by id.
	 *
	 * @param integer $id
	 * @return App\Task
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * Create a new task.
	 *
	 * @param array $attributes
	 * @return App\Task
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a task.
	 *
	 * @param integer $id
	 * @param array $attributes
	 * @return App\Task
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a task.
	 *
	 * @param integer $id
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	public function getStatusAll()
	{
		return $this->model->where('status', 1)->get();
	}
}