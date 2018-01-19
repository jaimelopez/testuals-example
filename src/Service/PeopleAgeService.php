<?php

namespace JaimeLopez\Testuals\Example\Service;

use JaimeLopez\Testuals\Example\Model\Person;

class PeopleAgeService
{
    /** @var Person[] */
    private $people;

    /**
     * @param Person[] $people
     */
    public function __construct(Person $person1, Person $person2)
    {
        $this->people = [
            $person1,
            $person2
        ];
    }

    /**
     * Returns the average of
     * @return int
     */
    public function calculateAveragePeopleAge()
    {
        $ages = array_map(function($person) {
            /** @var Person $person */
            return $person->getAge();
        }, $this->people);

        return array_sum($ages) / count($this->people);
    }
}