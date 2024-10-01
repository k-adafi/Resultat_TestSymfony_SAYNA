<?php
namespace Src\Repository;
use Faker\Factory;
use Src\Helper\SingletonTrait;
use Src\Entity\Site;

class SiteRepository implements Repository
{
    use SingletonTrait;

    private $url;

    /**
     * @param int $id
     *
     * @return Site
     */
    public function getById($id)
    {
        $generator = Factory::create();
        $generator->seed($id);

        return new Site($id, $generator->url);
    }
}
