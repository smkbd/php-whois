<?php

namespace Iodev\Whois;

use Iodev\Whois\Loaders\ILoader;
use Iodev\Whois\Modules\Asn\AsnModule;
use Iodev\Whois\Modules\Tld\TldModule;

interface IFactory
{
    /**
     * @return ILoader
     */
    function createLoader(): ILoader;

    /**
     * @param Whois $whois
     * @return AsnModule
     */
    function createAsnModule(Whois $whois): AsnModule;

    /**
     * @param Whois $whois
     * @return TldModule
     */
    function createTldModule(Whois $whois): TldModule;
}
