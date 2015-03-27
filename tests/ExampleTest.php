<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;

class ExampleTest extends TestCase {

	use DatabaseTransactions;

    /** @test */
   public function it_verifies_that_pages_load_properly()
   {
       $this->visit('/');
   }

    /** @test */
    public function it_verifies_the_current_page()
    {
        $this->visit('/auth/login')
             ->seePageIs('auth/login');
    }

    /** @test */
   public function it_follows_links()
   {
       $this->visit('/admin')
            ->click('Login')
            ->andSee('Login')
            ->onPage('/auth/login');
   }

       /** @test */
   public function it_submits_forms()
   {
       $this->visit('projects/create')
            ->submitForm('Create Post', ['exercise' => 'press'])
            ->andSee('press')
            ->onPage('projects/create');

        // Another way to write it.
        // $this->visit('page-with-form')
        //      ->type('Foo Title', '#title')
        //      ->press('Submit')
        //      ->see('You Entered Foo Title');
   }

    /** @test */


   /** @test */
function it_shows_posts()
{
  TestDummy::create('App\Projects', ['exercise' => 'Example Post']);

  $this->visit('/')->andSee('Example Post');
}


}
