<?php

namespace MusicBrainz\Supplement\Browse;

use MusicBrainz\Supplement\Fields;

class RecordingFields extends Fields
{
    use \MusicBrainz\Supplement\Field\AnnotationTrait;
    use \MusicBrainz\Supplement\Field\ArtistCreditsTrait;
    use \MusicBrainz\Supplement\Field\IsrcsTrait;
    use \MusicBrainz\Supplement\Field\RatingsTrait;
    use \MusicBrainz\Supplement\Field\TagsTrait;
    use \MusicBrainz\Supplement\Field\UserRatingsTrait;
    use \MusicBrainz\Supplement\Field\UserTagsTrait;
}
