
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Dummy Example
    Given I am on the homepage
    When I follow "Login"
    Then the url should match "/auth/login"
    When I sign in
    Then I should be logged in

  Scenario: Successful Register
    Given I am on "/auth/register"
    When I follow "Register"
    Then I should see "register"
    When I register new user "Bobby Bouwmann" "bobbybouwmann@gmail.com"
    Then I should have an account
  
  Scenario: Add New Project
    Given I am on "/projects/create"
    When I add new project
    Then I should see "borg"
    