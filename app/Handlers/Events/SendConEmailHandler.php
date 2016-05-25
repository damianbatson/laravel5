<?php namespace App\Handlers\Events;

use App\Events\PurchaseConfirmation;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendConEmailHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  PurchaseConfirmation  $event
	 * @return void
	 */
	public function handle(PurchaseConfirmation $event)
	{
		// dd($event);
		//send email confirmation
		// $this->$mailer->send;
		$event->podcastId;
	}

}
