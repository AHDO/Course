<?php

/*
 * This file is part of the Beloop package.
 *
 * Copyright (c) 2016 AHDO Studio B.V.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Arkaitz Garro <arkaitz.garro@gmail.com>
 */

namespace Beloop\Component\Course\Factory;

use DateTime;

use Doctrine\Common\Collections\ArrayCollection;

use Beloop\Component\Core\Factory\Abstracts\AbstractFactory;

/**
 * Factory for Course entities.
 */
class CourseFactory extends AbstractFactory
{
    /**
     * Creates an instance of an entity.
     *
     * Queries should be implemented in a repository class
     *
     * This method must always return an empty instance of the related Entity
     * and must initialize it in a consistent state
     *
     * @return object Empty entity
     */
    public function create()
    {
        $now = new DateTime();

        /**
         * @var Course $course
         */
        $classNamespace = $this->getEntityNamespace();
        $course = new $classNamespace();

        $course
            ->setLessons(new ArrayCollection())
            ->setDemo(false)
            ->enable()
            ->setCreatedAt($now);

        return $course;
    }
}
