<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents a link to an animated GIF file.
 * By default, this animated GIF file will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with
 * the specified content instead of the animation.
 * @see https://core.telegram.org/bots/api#inlinequeryresultgif
 */
class InlineQueryResultGif extends BaseType
{
    /**
     * Type of the result, must be gif
     * @var string $type
     */
    public $type;
    
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string $id
     */
    public $id;
    
    /**
     * A valid URL for the GIF file. File size must not exceed 1MB
     * @var string $gif_url
     */
    public $gif_url;
    
    /**
     * Optional. Width of the GIF
     * @var int $gif_width
     */
    public $gif_width;
    
    /**
     * Optional. Height of the GIF
     * @var int $gif_height
     */
    public $gif_height;
    
    /**
     * Optional. Duration of the GIF
     * @var int $gif_duration
     */
    public $gif_duration;
    
    /**
     * URL of the static thumbnail for the result (jpeg or gif)
     * @var string $thumb_url
     */
    public $thumb_url;
    
    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”.
     * Defaults to “image/jpeg”
     * @var string $thumb_mime_type
     */
    public $thumb_mime_type;
    
    /**
     * Optional. Title for the result
     * @var string $title
     */
    public $title;
    
    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters
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
     * Optional. Content of the message to be sent instead of the GIF animation
     * @var InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent $input_message_content
     */
    public $input_message_content;
}
