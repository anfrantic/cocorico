<?php

namespace Cocorico\CoreBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture as Base;
use Faker\Factory as Faker;

abstract class AbstractFixture extends Base
{
    /**
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * AbstractFixture constructor.
     */
    public function __construct()
    {
        $this->faker = Faker::create();
    }
}