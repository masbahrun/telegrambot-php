<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents the {@see https://core.telegram.org/bots/api#inputmessagecontent content}
 * of a venue message to be sent as the result of an inline query.
 * @see https://core.telegram.org/bots/api#inputvenuemessagecontent
 */
class InputVenueMessageContent extends BaseType
{
    /**
     * Latitude of the venue in degrees
     * @var double $latitude
     */
    public $latitude;
    
    /**
     * Longitude of the venue in degrees
     * @var double $longitude
     */
    public $longitude;
    
    /**
     * Name of the venue
     * @var string $title
     */
    public $title;
    
    /**
     * Address of the venue
     * @var string $address
     */
    public $address;
    
    /**
     * Optional. Foursquare identifier of the venue, if known
     * @var string $foursquare_id
     */
    public $foursquare_id;
    
    /**
     * Optional. Foursquare type of the venue.
     * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @var string $foursquare_type
     */
    public $foursquare_type;
}
