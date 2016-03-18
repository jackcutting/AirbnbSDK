<?php

namespace AirbnbSDK\Response\Listing;

use AirbnbSDK\Response\Listing\Listing\Listing;
use AirbnbSDK\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

class ListingResponse implements ResponseInterface
{
    /**
     * @JMS\Type("AirbnbSDK\Response\Listing\Listing\Listing")
     *
     * @var Listing $listing
     */
    private $listing;

    /**
     * @return Listing
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * @param Listing $listing
     */
    public function setListing($listing)
    {
        $this->listing = $listing;
    }
}
