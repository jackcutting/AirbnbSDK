<?php

namespace AirbnbSDK\Response\User\Review;

use JMS\Serializer\Annotation as JMS;

class RecentReview
{
    /**
     * @JMS\Type("AirbnbSDK\Response\User\Review\Review")
     *
     * @var Review $review
     */
    private $review;

    /**
     * @return Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param Review $review
     */
    public function setReview($review)
    {
        $this->review = $review;
    }
}
