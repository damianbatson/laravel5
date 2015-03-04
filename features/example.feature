
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Dummy Example
    Given I am on the homepage
    When I follow "Login"
    Then the url should match "/auth/login"

    Then I should see "login"


  Scenario: reg
    Given I am on "/auth/register"
    When I follow "Register"
    Then the url should match "/auth/register"
    When I press "Register"
    Then I should see "register"
    