<?php

namespace MusicBrainz\Test\Api\Browse;

use MusicBrainz\Filter\Browse\Relation\Entity\AreaRelation;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\Supplement\Browse\AreaFields;
use MusicBrainz\Test\Api\ApiTestCase;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\Page\AreaListPage;

/**
 * Unit tests for the browse area request
 */
class AreaTest extends ApiTestCase
{
    /**
     * Test instance of the artist list
     *
     * @var Area[]|AreaListPage
     */
    private static AreaListPage $areaListPage;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        if (isset(self::$areaListPage)) {
            return;
        }

        parent::setUp();

        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'area/',
            [
                'fmt'        => 'json',
                'limit'      => 25,
                'offset'     => 0,
                'collection' => 'dce472b5-dcea-4ad6-9c51-d16703aa0c82',
                'inc'        => 'aliases+annotation+ratings+tags+user-ratings+user-tags'
            ],
            'Browse/Area.json'
        );

        /** Performing the test */
        $areaRelation = new AreaRelation;
        $areaRelation->collection(new MBID('dce472b5-dcea-4ad6-9c51-d16703aa0c82'));

        $areaFields = (new AreaFields)
            ->includeAliases()
            ->includeAnnotation()
            ->includeRatings()
            ->includeTags()
            ->includeUserRatings()
            ->includeUserTags();

        self::$areaListPage = $this->musicBrainz->api()->browse()->area($areaRelation, $areaFields, new PageFilter);
    }

    /**
     * Checks the artist list.
     *
     * @return void
     */
    public function testArea(): void
    {
        $areaListPage = self::$areaListPage;

        $this->assertInstanceOf(AreaListPage::class, $areaListPage);
        $this->assertSame(1, count($areaListPage));

        $area = $areaListPage[0];

        $this->assertInstanceOf(Area::class, $area);
    }
}
