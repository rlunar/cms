<?php namespace Pongo\Cms\Repositories;

interface UserDetailRepositoryInterface {

	/**
	 * Custom methods for UserDetail
	 */

	public function createUserDetails($user_id);
	public function deleteUserDetails($user_id);
	
}