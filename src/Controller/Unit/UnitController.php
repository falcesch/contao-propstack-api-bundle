<?php

namespace Oveleon\ContaoPropstackApiBundle\Controller\Unit;

use Oveleon\ContaoPropstackApiBundle\Controller\Options\Options;
use Oveleon\ContaoPropstackApiBundle\Controller\Options\UnitOptions;
use Oveleon\ContaoPropstackApiBundle\Controller\PropstackController;

/**
 * Handle unit calls
 *
 * @link https://docs.propstack.de/reference/objekte
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class UnitController extends PropstackController
{
    protected string $route = 'units';

    /**
     * Read units
     */
    public function read(array $parameters)
    {
        $this->call(
            (new UnitOptions(Options::MODE_READ))
                ->validate($parameters),
            self::METHOD_READ
        );

        return $this->getResponse();
    }

    /**
     * Read a single unit
     */
    public function readOne($id)
    {
        // Add id as a route fragment
        $this->addRoutePath($id);

        return $this->read([]);
    }

    /**
     * Create unit
     */
    public function create(array $parameters)
    {
        $this->call(
            (new UnitOptions(Options::MODE_CREATE))
                ->validate(['property' => $parameters]),
            self::METHOD_CREATE
        );

        return $this->getResponse();
    }
}
