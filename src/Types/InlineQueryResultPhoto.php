<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 * @see https://core.telegram.org/bots/api#inlinequeryresultphoto
 */
class InlineQueryResultPhoto extends BaseType
{
    /**
     * Type of the result, must be photo
     * @var string $type
     */
    public $type;
    
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string $id
     */
    public $id;
    
    /**
     * A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
     * @var string $photo_url
     */
    public $photo_url;
    
    /**
     * URL of the thumbnail for the photo
     * @var string $thumb_url
     */
    public $thumb_url;
    
    /**
     * Optional. Width of the photo
     * @var int $photo_width
     */
    public $photo_width;
    
    /**
     * Optional. Height of the photo
     * @var int $photo_height
     */
    public $photo_height;
    
    /**
     * Optional. Title for the result
     * @var string $title
     */
    public $title;
    
    /**
     * Optional. Short description of the result
     * @var string $description
     */
    public $description;
    
    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters
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
     * Optional. Content of the message to be sent instead of the photo
     * @var InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent $input_message_content
     */
    public $input_message_content;
}
