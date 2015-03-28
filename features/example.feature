
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Successful Login
    Given I am on "/auth/login"
    When I follow "Login"
    When I sign in
    Then I should be logged in

  Scenario: Successful Register
    Given I am on "/auth/register"
    When I follow "Register"
    Then I should see "register"

  
  Scenario: Add New Project
    Given I am on "/projects/create"
    When I add new project
    Then I should see "borg"
    