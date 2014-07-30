<?php namespace Larabook\Registration;

use Laracasts\Commander\CommandHandler;

class RegisterUserCommandHandler implements CommandHandler{
	
	/*
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		$user = User::create(
			Input::only('username','email','password')
		);
	}
}
