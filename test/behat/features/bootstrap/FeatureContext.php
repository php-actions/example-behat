<?php
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext {
	/** @beforeSuite */
	public static function setup() {
		die("There should be no deprecations at this point");
	}
}
