<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;
use TelegramBot\Constants\MessageTypes;

/**
 * This object represents a message.
 * @see https://core.telegram.org/bots/api#message
 */
class Message extends BaseType
{
    /**
     * Unique message identifier inside this chat
     * @var int $message_id
     */
    public $message_id;
    
    /**
     * Optional. Sender, can be empty for messages sent to channels
     * @var User $from
     */
    public $from;
    
    /**
     * Date the message was sent in Unix time
     * @var int $date
     */
    public $date;
    
    /**
     * Conversation the message belongs to
     * @var Chat $chat
     */
    public $chat;
    
    /**
     * Optional. For forwarded messages, sender of the original message
     * @var User $forward_from
     */
    public $forward_from;
    
    /**
     * Optional. For messages forwarded from a channel, information about the original channel
     * @var Chat $forward_from_chat
     */
    public $forward_from_chat;
    
    /**
     * Optional. For forwarded channel posts, identifier of the original message in the channel
     * @var int $forward_from_message_id
     */
    public $forward_from_message_id;
    
    /**
     * Optional. Signature of the post author for messages forwarded from channels
     * @var string $forward_signature
     */
    public $forward_signature;
    
    /**
     * Optional. Sender's name for messages forwarded from users who
     * disallow adding a link to their account in forwarded messages
     * @var string $forward_sender_name
     */
    public $forward_sender_name;
    
    /**
     * Optional. Sender's name for messages forwarded from users who disallow
     * adding a link to their account in forwarded messages
     * @var int $forward_date
     */
    public $forward_date;
    
    /**
     * Optional. For replies, the original message.
     * Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     * @var Message $reply_to_message
     */
    public $reply_to_message;
    
    /**
     * Optional. Bot through which the message was sent
     * @var User $via_bot
     */
    public $via_bot;
    
    /**
     * Optional. Date the message was last edited in Unix time
     * @var int $edit_date
     */
    public $edit_date;
    
    /**
     * Optional. The unique identifier of a media message group this message belongs to
     * @var string $media_group_id
     */
    public $media_group_id;
    
    /**
     * Optional. Signature of the post author for messages in channels
     * @var string $author_signature
     */
    public $author_signature;
    
    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     * @var string $text
     */
    public $text;
    
    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @var MessageEntity[] $entities
     */
    public $entities;
    
    /**
     * Optional. For messages with a caption, special entities like
     * usernames, URLs, bot commands, etc. that appear in the caption
     * @var MessageEntity[] $caption_entities
     */
    public $caption_entities;
    
    /**
     * Optional. Message is an audio file, information about the file
     * @var Audio $audio
     */
    public $audio;
    
    /**
     * Optional. Message is a general file, information about the file
     * @var Document $document
     */
    public $document;
    
    /**
     * Optional. Message is an animation, information about the animation.
     * For backward compatibility, when this field is set, the document field will also be set
     * @var Animation $animation
     */
    public $animation;
    
    /**
     * Optional. Message is a game, information about the game.
     * @see https://core.telegram.org/bots/api#games More about games ??
     * @var Game $game
     */
    public $game;
    
    /**
     * Optional. Message is a photo, available sizes of the photo
     * @var PhotoSize[] $photo
     */
    public $photo;
    
    /**
     * Optional. Message is a sticker, information about the sticker
     * @var Sticker $sticker
     */
    public $sticker;
    
    /**
     * Optional. Message is a video, information about the video
     * @var Video $video
     */
    public $video;
    
    /**
     * Optional. Message is a voice message, information about the file
     * @var Voice $voice
     */
    public $voice;
    
    /**
     * Optional. Message is a video note, information about the video message
     * @see https://telegram.org/blog/video-messages-and-telescope video note
     * @var VideoNote $video_note
     */
    public $video_note;
    
    /**
     * Optional. Caption for the document, photo or video, 0-1024 characters
     * @var string $caption
     */
    public $caption;
    
    /**
     * Optional. Message is a shared contact, information about the contact
     * @var Contact $contact
     */
    public $contact;
    
    /**
     * Optional. Message is a shared location, information about the location
     * @var Location $location
     */
    public $location;
    
    /**
     * Optional. Message is a venue, information about the venue
     * @var Venue $venue
     */
    public $venue;
    
    /**
     * Optional. Message is a native poll, information about the poll
     * @var Poll $poll
     */
    public $poll;
    
    /**
     * Optional. Message is a dice with random value from 1 to 6
     * @var Dice $dice
     */
    public $dice;
    
    /**
     * Optional. New members that were added to the group or supergroup
     * and information about them (the bot itself may be one of these members)
     * @var User[] $new_chat_members
     */
    public $new_chat_members;
    
    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @var User $left_chat_member
     */
    public $left_chat_member;
    
    /**
     * Optional. A chat title was changed to this value
     * @var string $new_chat_title
     */
    public $new_chat_title;
    
    /**
     * Optional. A chat photo was change to this value
     * @var PhotoSize[] $new_chat_photo
     */
    public $new_chat_photo;
    
    /**
     * Optional. Service message: the chat photo was deleted
     * @var bool $delete_chat_photo
     */
    public $delete_chat_photo;
    
    /**
     * Optional. Service message: the group has been created
     * @var bool $group_chat_created
     */
    public $group_chat_created;
    
    /**
     * Optional. Service message: the supergroup has been created.
     * This field can???t be received in a message coming through updates,
     * because bot can???t be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a
     * very first message in a directly created supergroup.
     * @var bool $supergroup_chat_created
     */
    public $supergroup_chat_created;
    
    /**
     * Optional. Service message: the channel has been created.
     * This field can???t be received in a message coming through updates,
     * because bot can???t be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @var bool $channel_chat_created
     */
    public $channel_chat_created;
    
    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages
     * may have difficulty/silent defects in interpreting it.
     * But it smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier.
     * @var int $migrate_to_chat_id
     */
    public $migrate_to_chat_id;
    
    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier.
     * This number may be greater than 32 bits and some programming languages
     * may have difficulty/silent defects in interpreting it.
     * But it smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier.
     * @var int $migrate_from_chat_id
     */
    public $migrate_from_chat_id;
    
    /**
     * Optional. Specified message was pinned.
     * Note that the Message object in this field will not contain
     * further reply_to_message fields even if it is itself a reply.
     * @var Message $pinned_message
     */
    public $pinned_message;
    
    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     * @see https://core.telegram.org/bots/api#payments invoice
     * @see https://core.telegram.org/bots/api#payments More about payments
     * @var Invoice $invoice
     */
    public $invoice;
    
    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     * @see https://core.telegram.org/bots/api#payments More about payments
     * @var SuccessfulPayment $successful_payment
     */
    public $successful_payment;
    
    /**
     * Optional. The domain name of the website on which the user has logged in.
     * @see https://core.telegram.org/widgets/login More about Telegram Login
     * @var string $connected_website
     */
    public $connected_website;
    
    /**
     * Optional. Telegram Passport data
     * @var PassportData $passport_data
     */
    public $passport_data;
    
    /**
     * Optional. Optional. Inline keyboard attached to the message.
     * "login_url" buttons are represented as ordinary "url" buttons.
     * @var InlineKeyboardMarkup $reply_markup
     */
    public $reply_markup;
    
    /**
     * Check if the message is a command
     * @return bool
     */
    public function isCommand(): bool
    {
        return $this->getCommand() !== null;
    }
    
    /**
     * Returns only the command string without [at]BotUsername
     * Example:
     * IN: /hello or /hello[at]MyDearBot
     * OUT: /hello
     * @return string
     */
    public function getCommand(): ?string
    {
        if ($this->text !== null) {
            $result = preg_match('/^(\/\w+)(@\w+)?(.+)?$/', $this->text, $matches);
            
            if (!$result) {
                return null;
            }
            
            return $matches[1];
        }
        return null;
    }
    
    /**
     * Returns the args as array or as string
     * @param bool|int $asStringorKey True to get an array of strings;
     *                                False to get a string;
     *                                Integer to get the string at the array index position.
     * @return array|string
     */
    public function getArgs($asStringorKey = false)
    {
        if ($this->text !== null) {
            $commandArray = explode(' ', $this->text);
            array_shift($commandArray);
            
            if ($asStringorKey === true) {
                return implode(' ', $commandArray);
            }
            
            if ($asStringorKey === false) {
                return $commandArray;
            }
            
            if (is_int($asStringorKey)) {
                return $commandArray[$asStringorKey];
            }
        }
        return null;
    }
    
    /**
     * Check if the message is forwarded
     * @return bool
     */
    public function isForwarded(): bool
    {
        return $this->forward_from !== null || $this->forward_from_chat !== null;
    }
    
    /**
     * Return the current message type
     * @return false|string
     */
    public function getType()
    {
        if ($this->text !== null) {
            return MessageTypes::TEXT;
        }
        
        if ($this->audio !== null) {
            return MessageTypes::AUDIO;
        }
        
        if ($this->document !== null) {
            return MessageTypes::DOCUMENT;
        }
        
        if ($this->animation !== null) {
            return MessageTypes::ANIMATION;
        }
        
        if ($this->game !== null) {
            return MessageTypes::GAME;
        }
        
        if ($this->photo !== null) {
            return MessageTypes::PHOTO;
        }
        
        if ($this->sticker !== null) {
            return MessageTypes::STICKER;
        }
        
        if ($this->video !== null) {
            return MessageTypes::VIDEO;
        }
        
        if ($this->voice !== null) {
            return MessageTypes::VOICE;
        }
        
        if ($this->video_note !== null) {
            return MessageTypes::VIDEO_NOTE;
        }
        
        if ($this->contact !== null) {
            return MessageTypes::CONTACT;
        }
        
        if ($this->location !== null) {
            return MessageTypes::LOCATION;
        }
        
        if ($this->venue !== null) {
            return MessageTypes::VENUE;
        }
        
        if ($this->poll !== null) {
            return MessageTypes::POLL;
        }
    
        if ($this->dice !== null) {
            return MessageTypes::DICE;
        }
        
        if ($this->new_chat_members !== null) {
            return MessageTypes::NEW_CHAT_MEMBERS;
        }
        
        if ($this->left_chat_member !== null) {
            return MessageTypes::LEFT_CHAT_MEMBER;
        }
        
        if ($this->new_chat_title !== null) {
            return MessageTypes::NEW_CHAT_TITLE;
        }
        
        if ($this->new_chat_photo !== null) {
            return MessageTypes::NEW_CHAT_PHOTO;
        }
        
        if ($this->delete_chat_photo !== null) {
            return MessageTypes::DELETE_CHAT_PHOTO;
        }
        
        if ($this->group_chat_created !== null) {
            return MessageTypes::GROUP_CHAT_CREATED;
        }
        
        if ($this->supergroup_chat_created !== null) {
            return MessageTypes::SUPERGROUP_CHAT_CREATED;
        }
        
        if ($this->channel_chat_created !== null) {
            return MessageTypes::CHANNEL_CHAT_CREATED;
        }
        
        if ($this->migrate_to_chat_id !== null) {
            return MessageTypes::MIGRATE_TO_CHAT_ID;
        }
        
        if ($this->migrate_from_chat_id !== null) {
            return MessageTypes::MIGRATE_FROM_CHAT_ID;
        }
        
        if ($this->pinned_message !== null) {
            return MessageTypes::PINNED_MESSAGE;
        }
        
        if ($this->invoice !== null) {
            return MessageTypes::INVOICE;
        }
        
        if ($this->successful_payment !== null) {
            return MessageTypes::SUCCESSFUL_PAYMENT;
        }
        
        return false;
    }
    
}
