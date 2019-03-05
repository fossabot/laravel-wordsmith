<?php

namespace App\Repositories\Site;

use App\Models\Role as Model;

class RoleRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * RoleRepository constructor.
	 */
	public function __construct()
	{
		$this->model = new Model();
	}

	/**
	 * @return Model[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	/**
	 * @return mixed
	 */
	public function getRoleUser()
	{
		return $this->model->where('id', 1)->first();
	}

	/**
	 * @return mixed
	 */
	public function getRoleAuthor()
	{
		return $this->model->where('id', 2)->first();
	}

	/**
	 * @return mixed
	 */
	public function getRoleModerator()
	{
		return $this->model->where('id', 3)->first();
	}

	/**
	 * @return mixed
	 */
	public function getRoleAdmin()
	{
		return $this->model->where('id', 4)->first();
	}
}