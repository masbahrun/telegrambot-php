<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 * @see https://core.telegram.org/bots/api#passportdata
 */
class PassportData extends BaseType
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @var EncryptedPassportElement[] $data
     */
    public $data;
    
    /**
     * Encrypted credentials required to decrypt the data
     * @var EncryptedCredentials $credentials
     */
    public $credentials;
}
