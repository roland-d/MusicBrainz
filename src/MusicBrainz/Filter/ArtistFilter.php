<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Value\ArtistType;
use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Gender;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\MBID;

/**
 * A filter for searching artists
 */
class ArtistFilter extends Filter
{
    /**
     * Returns the alias.
     *
     * @return null|string
     */
    public function getAliasName(): ?string
    {
        return $this->offsetGet('alias');
    }

    /**
     * Sets an alias.
     *
     * @param null|string $aliasName An alias
     *
     * @return self
     */
    public function setAliasName(?string $aliasName): self
    {
        return $this->setFilterValue('alias', $aliasName);
    }

    /**
     * Returns the name of the artist's area.
     *
     * @return null|string
     */
    public function getAreaName(): ?string
    {
        return $this->offsetGet('area');
    }

    /**
     * Sets the name of the artist's area.
     *
     * @param null|string $areaName The artist's area
     *
     * @return self
     */
    public function setAreaName(?string $areaName): self
    {
        return $this->setFilterValue('area', $areaName);
    }

    /**
     * Returns the MusicBrainz Identifier (MBID) of the artist.
     *
     * @return null|MBID
     */
    public function getArtistId(): ?MBID
    {
        return $this->offsetGet('arid');
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param null|MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return self
     */
    public function setArtistId(?MBID $artistId): self
    {
        return $this->setFilterValue('arid', $artistId);
    }

    /**
     * Returns the artists name.
     *
     * @return null|string
     */
    public function getArtistName(): ?string
    {
        return $this->offsetGet('artist');
    }

    /**
     * Sets the artist's name.
     *
     * @param null|string $artistName The artist's name
     *
     * @return self
     */
    public function setArtistName(?string $artistName): self
    {
        return $this->setFilterValue('artist', $artistName);
    }

    /**
     * Returns the artist name without accents.
     *
     * @return null|string
     */
    public function getArtistNameWithoutAccent(): ?string
    {
        return $this->offsetGet('artistaccent');
    }

    /**
     * Sets the artist name without accents.
     *
     * @param null|string $artistNameWithoutAccent The artist name without accents
     *
     * @return self
     */
    public function setArtistNameWithoutAccent(?string $artistNameWithoutAccent): self
    {
        return $this->setFilterValue('artistaccent', $artistNameWithoutAccent);
    }

    /**
     * Returns artist birth date/band founding date.
     *
     * @return null|Date
     */
    public function getBegin(): ?Date
    {
        return $this->offsetGet('begin');
    }

    /**
     * Sets artist birth date/band founding date.
     *
     * @param null|Date $begin Artist birth date/band founding date
     *
     * @return self
     */
    public function setBegin(?Date $begin): self
    {
        return $this->setFilterValue('begin', $begin);
    }

    /**
     * Sets the name of the beginning area.
     *
     * @return null|string
     */
    public function getBeginAreaName(): ?string
    {
        return $this->offsetGet('beginarea');
    }

    /**
     * Sets the name of the beginning area.
     *
     * @param null|string $beginAreaName The name of the beginning area
     *
     * @return self
     */
    public function setBeginAreaName(?string $beginAreaName): self
    {
        return $this->setFilterValue('beginarea', $beginAreaName);
    }

    /**
     * Returns the comment to differentiate similar artists.
     *
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->offsetGet('comment');
    }

    /**
     * Sets a comment to differentiate similar artists.
     *
     * @param null|string $comment A comment to differentiate similar artists
     *
     * @return ArtistFilter
     */
    public function setComment(?string $comment): self
    {
        return $this->setFilterValue('comment', $comment);
    }

    /**
     * Returns the country.
     *
     * @return null|Country
     */
    public function getCountry(): ?Country
    {
        return $this->offsetGet('country');
    }

    /**
     * Sets the country.
     *
     * @param null|Country $country A country
     *
     * @return self
     */
    public function setCountry(?Country $country): self
    {
        return $this->setFilterValue('country', $country);
    }

    /**
     * Returns artist death date/band dissolution date.
     *
     * @return null|Date
     */
    public function getEnd(): ?Date
    {
        return $this->offsetGet('end');
    }

    /**
     * Sets artist death date/band dissolution date.
     *
     * @param null|Date $end Artist death date/band dissolution date
     *
     * @return self
     */
    public function setEnd(?Date $end): self
    {
        return $this->setFilterValue('end', $end);
    }

    /**
     * Returns the name of the ending area.
     *
     * @return null|string
     */
    public function getEndAreaName(): ?string
    {
        return $this->offsetGet('endarea');
    }

    /**
     * Sets the name of the ending area.
     *
     * @param null|string $endAreaName The name of the ending area
     *
     * @return self
     */
    public function setEndAreaName(?string $endAreaName): self
    {
        return $this->setFilterValue('endarea', $endAreaName);
    }

    /**
     * Returns true for dissolved bands or dead artists.
     *
     * @return null|bool
     */
    public function getEnded(): ?bool
    {
        return $this->offsetGet('ended');
    }

    /**
     * Sets, whether the is dissolved or the artist is dead.
     *
     * @param null|bool $ended True, if the band is dissolved or the artist is dead.
     *
     * @return self
     */
    public function setEnded(?bool $ended): self
    {
        return $this->setFilterValue('ended', $ended);
    }

    /**
     * Returns the gender.
     *
     * @return null|Gender
     */
    public function getGender(): ?Gender
    {
        return $this->offsetGet('gender');
    }

    /**
     * Sets the gender.
     *
     * @param null|Gender $gender
     *
     * @return self
     */
    public function setGender(?Gender $gender): self
    {
        return $this->setFilterValue('gender', $gender);
    }

    /**
     * Returns the IPI (interested party information) code for the artist.
     *
     * @return null|IPI
     */
    public function getIpiCode(): ?IPI
    {
        return $this->offsetGet('ipi');
    }

    /**
     * Sets the IPI (interested party information) code for the artist.
     *
     * @param IPI|null $ipiCode The IPI (interested party information) code for the artist
     *
     * @return self
     */
    public function setIpiCode(?IPI $ipiCode): self
    {
        return $this->setFilterValue('ipi', $ipiCode);
    }

    /**
     * Returns the sort index.
     *
     * @return null|string
     */
    public function getSortName(): ?string
    {
        return $this->offsetGet('sortname');
    }

    /**
     * Sets the sort index.
     *
     * @param null|string $sortName The sort index
     *
     * @return self
     */
    public function setSortName(?string $sortName): self
    {
        return $this->setFilterValue('sortname', $sortName);
    }

    /**
     * Returns the tag name.
     *
     * @return null|string
     */
    public function getTagName(): ?string
    {
        return $this->offsetGet('tag');
    }

    /**
     * Sets a tag applied to the artist.
     *
     * @param null|string $tagName A tag applied to the artist
     *
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        return $this->setFilterValue('tag', $tagName);
    }

    /**
     * Returns the artist type.
     *
     * @return null|ArtistType
     */
    public function getArtistType(): ?ArtistType
    {
        return $this->offsetGet('type');
    }

    /**
     * Sets the artist type.
     *
     * @param null|ArtistType $artistType An artist type
     *
     * @return self
     */
    public function setArtistType(?ArtistType $artistType): self
    {
        return $this->setFilterValue('type', $artistType);
    }
}