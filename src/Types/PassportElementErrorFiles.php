<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the
 * scans changes.
 * @see https://core.telegram.org/bots/api#passportelementerrorfiles
 */
class PassportElementErrorFiles extends BaseType
{
    /**
     * Error source, must be files
     * @var string $source
     */
    public $source;
    
    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @var string $type
     */
    public $type;
    
    /**
     * Base64-encoded file hashes
     * @var string $file_hash
     */
    public $file_hash;
    
    /**
     * Error message
     * @var string $message
     */
    public $message;
}
