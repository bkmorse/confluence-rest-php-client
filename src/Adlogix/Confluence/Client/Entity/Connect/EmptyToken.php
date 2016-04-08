<?php
/*
 * This file is part of the Adlogix package.
 *
 * (c) Allan Segebarth <allan@adlogix.eu>
 * (c) Jean-Jacques Courtens <jjc@adlogix.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Adlogix\Confluence\Client\Entity\Connect;


class EmptyToken implements TokenInterface
{

    public function setQueryString($method, $uri)
    {
        // TODO: Implement setQueryString() method.
    }

    public function sign($encode = true)
    {
        // TODO: Implement sign() method.
    }
}