<?php

namespace Bantenprov\RasioBankDunia\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RasioBankDunia facade.
 *
 * @package Bantenprov\RasioBankDunia
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioBankDuniaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rasio-grup-kesenian';
    }
}
