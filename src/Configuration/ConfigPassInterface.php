<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Configuration;

/**
 * The interface that must be implemented by all the classes that normalize,
 * parse, complete or manipulate in any way the original backend configuration
 * in order to generate the final backend configuration. This allows the
 * end-user to use shortcuts and syntactic sugar to define the backend configuration.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @internal
 */
interface ConfigPassInterface
{
    /**
     * This method is given the whole backend config and it must return it
     * with all the changes/processing needed by the implementing class.
     *
     * @return array
     */
    public function process(array $backendConfig);
}
