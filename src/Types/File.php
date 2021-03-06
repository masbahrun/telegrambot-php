<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents a file ready to be downloaded.
 * The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>.
 * It is guaranteed that the link will be valid for at least 1 hour.
 * When the link expires, a new one can be requested by calling {@see https://core.telegram.org/bots/api#getfile getFile}.
 * Maximum file size to download is 20 MB
 * @see https://core.telegram.org/bots/api#file
 */
class File extends BaseType
{
    /**
     * Identifier for this file
     * @var string $file_id
     */
    public $file_id;
    
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @var string $file_unique_id
     */
    public $file_unique_id;
    
    /**
     * Optional. File size, if known
     * @var int $file_size
     */
    public $file_size;
    
    /**
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     * @var string $file_path
     */
    public $file_path;
}
