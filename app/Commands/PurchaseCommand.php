<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class PurchaseCommand extends Command {

	public $userId;
	public $podcastId;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */


    public function __construct($userId, $podcastId)
    {
        $this->userId = $userId;
        $this->podcastId = $podcastId;
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
