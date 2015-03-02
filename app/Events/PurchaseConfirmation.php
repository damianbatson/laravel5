<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class PurchaseConfirmation extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
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
	}

}
