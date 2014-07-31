<?php namespace Larabook\Users;

class UserRepository {
 	public function save(User $user)
 	{
			/**
			 * Persists a user
			 * @param User $user
			 * @return mixed
			 */
			return $user->save();
	}
}
