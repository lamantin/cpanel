<?php

namespace CpanelApi;

/**
 * Class CpanelQuota
 *
 * Cpanel Disk quota operations
 *
 * @package CpanelApi
 */
class CpanelQuota extends CpanelBase
{
    const OPERATION = 'Quota';

    /**
     * @return json
     */
    public function getLocalQuotaInfo()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function getQuotaInfo()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
