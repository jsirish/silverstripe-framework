<?php

namespace SilverStripe\Core\Injector;

/**
 * A BeforeCallAspect is run before a method is executed.
 *
 * This is a declared interface, but isn't actually required
 * as PHP doesn't really care about types...
 */
interface BeforeCallAspect {

	/**
	 * Call this aspect before a method is executed
	 *
	 * @param object $proxied
	 *				The object having the method called upon it.
	 * @param string $method
	 *				The name of the method being called
	 * @param string $args
	 *				The arguments that were passed to the method call
	 * @param mixed $alternateReturn
	 *				An alternative return value that should be passed
	 *				to the caller. Only has effect of beforeCall returns false
	 */
	public function beforeCall($proxied, $method, $args, &$alternateReturn);
}
