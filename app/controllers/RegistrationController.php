<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {
	
	private $commandBus;

	private $registrationForm;

	function __construct(CommandBus $commandBus, RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
		$this->commandBus = $commandBus;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Create a new larabook user
	 *
	 * @return String
	 */
	public function store()
	{
		$this->registrationForm->validate(Input::all());

		extract(Input::only('username','email','password'));

		$command = new RegisterUserCommand($username, $email, $password);
			
		$this->commandBus->execute($command);

		Auth::login($user);
		// 6:24
		return Redirect::home();
	}
}
