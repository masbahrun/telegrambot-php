<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents a link to a voice message stored on the Telegram servers.
 * By default, this voice message will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the voice
 * message.
 *
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
 */
class InlineQueryResultCachedVoice extends BaseType
{
    /**
     * Type of the result, must be voice
     * @var string $type
     */
    public $type;
    
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string $id
     */
    public $id;
    
    /**
     * A valid file identifier for the voice message
     * @var string $voice_file_id
     */
    public $voice_file_id;
    
    /**
     * Voice message title
     * @var string $title
     */
    public $title;
    
    /**
     * Optional. Caption, 0-1024 characters
     * @var string $caption
     */
    public $caption;
    
    /**
     * Optional. Send {@see https://core.telegram.org/bots/api#markdown-style Markdown} or
     * {@see https://core.telegram.org/bots/api#html-style HTML},
     * if you want Telegram apps to show
     * {@see https://core.telegram.org/bots/api#formatting-options bold, italic, fixed-width text or inline URLs}
     * in your bot's message.
     * @var string $parse_mode
     */
    public $parse_mode;
    
    /**
     * Optional.
     * {@see https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating Inline keyboard}
     * attached to the message
     * @var InlineKeyboardMarkup $reply_markup
     */
    public $reply_markup;
    
    /**
     * Optional. Content of the message to be sent instead of the voice message
     * @var InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent $input_message_content
     */
    public $input_message_content;
}
