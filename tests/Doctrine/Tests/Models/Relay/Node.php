<?php

namespace Doctrine\Tests\Models\Relay;

/**
 * @Entity()
 * @Table(name="relay_nodes")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *   "ProofCopy" = "ProofCopy",
 *   "Review" = "Review"
 * })
 */
abstract class Node
{
    /**
     * @Id()
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }
}