Feature: App should greet the user
	In order to feel welcomed, befriended, warm and fuzzy
	As an eager user of this fabulous application
	I should be greeted by my name

	Scenario: I see a default name
		Given I am on the homepage
		Then I should see "Hello, you NONONONNO!"

	Scenario: I see my own name
		Given I am on the homepage
		When I fill in "your-name" with "Cody"
		And I press "Greet!"
		Then I should see "Hello, Cody!"
