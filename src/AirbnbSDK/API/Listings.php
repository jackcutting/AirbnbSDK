<?php

namespace AirbnbSDK\API;

use AirbnbSDK\Request\Listing\ListingRequest;
use AirbnbSDK\Request\Listing\UserListingsRequest;
use AirbnbSDK\Request\Search\SearchRequest;
use AirbnbSDK\Response\Listing\ListingResponse;
use AirbnbSDK\Response\Listing\ListingsResponse;
use AirbnbSDK\Response\Search\SearchResponse;

class Listings extends AbstractAPI
{
    const LISTING_RESPONSE_CLASS = ListingResponse::class;
    const LISTINGS_RESPONSE_CLASS = ListingsResponse::class;
    const SEARCH_RESPONSE_CLASS = SearchResponse::class;

    /**
     * @param ListingRequest $request
     * @return ListingResponse
     */
    public function view(ListingRequest $request)
    {
        $parameters = $request->toArray();
        $listingResponse = $this->getRequest('listings/' . $request->getListingId(),
            self::LISTING_RESPONSE_CLASS, $parameters);
        return $listingResponse;
    }

    /**
     * @param UserListingsRequest $request
     * @return ListingsResponse
     */
    public function allForUser(UserListingsRequest $request)
    {
        $parameters = $request->toArray();
        $listingResponse = $this->getRequest('listings/',
            self::LISTINGS_RESPONSE_CLASS, $parameters);
        return $listingResponse;
    }

    /**
     * @param SearchRequest $request
     * @return SearchResponse
     */
    public function search(SearchRequest $request)
    {
        $parameters = $request->toArray();
        $searchResponse = $this->getRequest('search_results/',
            self::SEARCH_RESPONSE_CLASS, $parameters);
        return $searchResponse;
    }
}
