<?php namespace App\Handlers\Commands;

use App\Commands\PurchaseCommand;

use Illuminate\Queue\InteractsWithQueue;

class PurchaseCommandHandler {

	/**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the command.
	 *
	 * @param  PurchaseCommand  $command
	 * @return void
	 */
	public function handle(PurchaseCommand $command)
	{
		dd($command);

		// $stripe->processdetails

		// $this->$fire(new PurchaseConfirmation);
	}

}
