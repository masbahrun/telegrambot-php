<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents type of a poll, which is allowed to be created
 * and sent when the corresponding button is pressed.
 * @see https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
class KeyboardButtonPollType extends BaseType
{
    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode.
     * If regular is passed, only regular polls will be allowed.
     * Otherwise, the user will be allowed to create a poll of any type.
     * @var string $type
     */
    public $type;
}
