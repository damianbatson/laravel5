<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{

    protected $name;

    protected $email;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    
    public function iAmOnTheProjectspage()
    {
        throw new PendingException();
        
    }

public function iCanDoSomethingWithLaravel()
    {
        PHPUnit::assertEquals('.env.behat', app()->environmentFile());
    }

    /**
     * @When I register :name :email
     */
    public function iRegister($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

        $this->visit('auth/register');

        $this->fillField('name', $name);
        $this->fillField('email', $email);
        $this->fillField('password', 'password');
        // $this->fillField('password_confirmation', 'password');

        $this->pressButton('Register');
    }

    /**
     * @Then I should have an account
     */
    public function iShouldHaveAnAccount()
    {
        // $this->assertSignedIn();

        $this->assertPageAddress('/auth/register');
    }

    /**
     * @Given I have an account :name :email
     */
    public function iHaveAnAccount($name, $email)
    {
        $this->iRegister($name, $email);

        $this->visit('auth/logout');
    }

    /**
     * @When I sign in
     */
    public function iSignIn()
    {
        $this->visit('auth/login');

        $this->fillField('email', $this->email);
        $this->fillField('password', 'password');

        $this->pressButton('Login');
    }

    /**
     * @When I sign in with invalid credentials
     */
    public function iSignInWithInvalidCredentials()
    {
        $this->email = 'invalid@example.com';

        $this->iSignIn();
    }

    /**
     * @Then I should be logged in
     */
    public function iShouldBeLoggedIn()
    {
        $this->assertSignedIn();
    }

    /**
     * @Then I should not be logged in
     */
    public function iShouldNotBeLoggedIn()
    {
        PHPUnit::assertTrue(Auth::guest());

        $this->assertPageAddress('auth/login');

        $this->assertPageContainsText('These credentials do not match our records.');
    }

    private function assertSignedIn()
    {
        PHPUnit::assertTrue(Auth::check());
    }

}
