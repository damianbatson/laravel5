<?php

class ExampleTest extends TestCase {

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
            ->click('Projects')
            ->andSee('current')
            ->onPage('/projects');
   }



}
