<?php

namespace CpanelApi;

/**
 * Class CpanelWebVhosts
 *
 * Cpanel WebVhosts  operations
 *
 * @package CpanelApi
 */
class CpanelWebVhosts extends CpanelBase
{
    const OPERATION = 'WebVhosts';

    public function listDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listSslCapableDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }
}
