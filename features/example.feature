
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Dummy Example
    Given I am on the homepage
    When I follow "Login"
    Then the url should match "/auth/login"
    When I press "Login"
    Then I should see "Login"
    Then I should not see "Admin"

  Scenario: Dummy Example
    Given I am on "/auth/register"
    When I follow "Register"

    When I press "Register"
    Then I should not see "dashboard
    

