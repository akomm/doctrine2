<?php

namespace Doctrine\Tests\Models\Relay;

/**
 * @Entity()
 * @Table(name="relay_review")
 */
class Review extends Node
{
    /**
     * @OneToOne(
     *     targetEntity="ProofCopy",
     *     mappedBy="review",
     *     orphanRemoval=true,
     *     cascade={"persist", "remove"}
     * )
     * @JoinColumn(nullable=true, onDelete="SET NULL")
     */
    protected $proofCopy;

    public function assignNewProofCopy()
    {
        $this->proofCopy = new ProofCopy($this);
        return $this->proofCopy;
    }

    public function getProofCopy()
    {
        return $this->proofCopy;
    }
}