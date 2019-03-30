<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\RoleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\RoleUpdateRequest;

class RoleController extends BaseController
{
	/**
	 * @var RoleRepository
	 */
	protected $roleRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * RoleController constructor.
	 * @param RoleRepository $roleRepository
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(RoleRepository $roleRepository, SettingRepository $settingRepository)
	{
		$this->roleRepository = $roleRepository;
		$this->settingRepository = $settingRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index()
    {
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->roleRepository->getRoleAdminAll($paginate);

        return view('admin.roles.index', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show($id)
    {
        $main = $this->roleRepository->getById($id);

        return view('admin.roles.show', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function edit($id)
    {
        $main = $this->roleRepository->getById($id);

        return view('admin.roles.edit', compact('main'));
    }

	/**
	 * @param RoleUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(RoleUpdateRequest $request, $id)
    {
        $this->roleRepository->update($id, $request->all());

        return redirect()->route('roles.index')->with('success', __('admin.updated-success'));
    }
}
