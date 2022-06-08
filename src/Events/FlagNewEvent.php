<?php
/*
* File:     FlagNewEvent.php
* Category: Event
* Author:   M. Goldenbaum
* Created:  25.11.20 22:21
* Updated:  -
*
* Description:
*  -
*/

namespace ricard0d\PHPIMAP\Events;

use ricard0d\PHPIMAP\Message;

/**
 * Class FlagNewEvent
 *
 * @package ricard0d\PHPIMAP\Events
 */
class FlagNewEvent extends Event {

    /** @var Message $message */
    public $message;

    /** @var string $flag */
    public $flag;

    /**
     * Create a new event instance.
     * @var mixed[] $arguments
     * @return void
     */
    public function __construct($arguments) {
        $this->message = $arguments[0];
        $this->flag = $arguments[1];
    }
}
