<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents a bot command.
 * @see https://core.telegram.org/bots/api#botcommand
 */
class BotCommand extends BaseType
{
    /**
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @var string $command
     */
    public $command;
    
    /**
     * Description of the command, 3-256 characters.
     * @var string $description
     */
    public $description;
}
