
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Dummy Example
    Given I am on the homepage
    When I follow "Login"
    Then the url should match "/auth/login"
    When I sign in
    Then I should see "login"


  Scenario: Successful Register
    Given I am on "/auth/register"
    When I follow "Register"
    Then the url should match "/auth/register"
    When I press "Register"
    Then I should see "register"

    Scenario: Registration
    When I register "Bobby Bouwmann" "bobbybouwmann@gmail.com"
    Then I should have an account
    