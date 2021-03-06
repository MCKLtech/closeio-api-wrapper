<?php

/**
 * Close.io Api Wrapper - LLS Internet GmbH - Loopline Systems.
 *
 * @see      https://github.com/loopline-systems/closeio-api-wrapper for the canonical source repository
 *
 * @copyright Copyright (c) 2014 LLS Internet GmbH - Loopline Systems (http://www.loopline-systems.com)
 * @license   https://github.com/loopline-systems/closeio-api-wrapper/blob/master/LICENSE (MIT Licence)
 */

declare(strict_types=1);

namespace LooplineSystems\CloseIoApiWrapper\Exception;

/**
 * This exception is thrown when Close.io throttles the calls to its REST APIs
 * because of exceeding rate-limit.
 *
 * @author Stefano Arlandini <sarlandini@alice.it>
 */
class CloseIoThrottleException extends CloseIoResponseException
{
}
