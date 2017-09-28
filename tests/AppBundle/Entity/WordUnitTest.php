<?php

namespace AppBundle\Entity;

use PHPUnit\Framework\TestCase;
use AppBundle\Entity\Word;
use Doctrine\Common\Collections\ArrayCollection;

class WordUnitTest extends TestCase
{
    public function testConstructor()
    {
        $word = new Word();
        $this->assertInstanceOf(ArrayCollection::class, $word->getDefinitions());
        $this->assertEmpty($word->getDefinitions());
    }
}