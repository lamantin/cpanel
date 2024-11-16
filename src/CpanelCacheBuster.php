<?php

namespace CpanelApi;

/**
 * Class CpanelCacheBuster
 *
 * Cpanel CacheBuster  operations
 *
 * @package CpanelApi
 */
class CpanelCacheBuster extends CpanelBase
{
    const OPERATION = 'CacheBuster';

    /**
     * @return json
     * @throws \Exception
     */
    public function read()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function update()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
