<?php

namespace Doctrine\Tests\Models\Relay;

/**
 * @Entity()
 * @Table(name="relay_proofCopy")
 */
class ProofCopy extends Node
{
    /**
     * @OneToOne(targetEntity="Review", inversedBy="proofCopy")
     */
    protected $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }
}