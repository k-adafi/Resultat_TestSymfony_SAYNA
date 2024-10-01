<?php

namespace Src\Repository;
use Faker\Factory;
use Src\Helper\SingletonTrait;
use Src\Entity\Destination;

class DestinationRepository implements Repository
{
    use SingletonTrait;
    /**
     * @param int $id
     *
     * @return Destination
     */
    public function getById($id)
    {
        $generator    = Faker\Factory::create();
        $generator->seed($id);

        return new Destination(
            $id,
            $generator->country,
            'en',
            $generator->slug()
        );
    }
}
