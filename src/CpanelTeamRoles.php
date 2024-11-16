<?php

namespace CpanelApi;

/**
 * Class CpanelTeamRoles
 *
 * Cpanel team roles operations
 *
 * @package CpanelApi
 */
class CpanelTeamRoles extends CpanelBase
{
    const OPERATION = 'TeamRoles';

    /**
     * @return json
     */
    public function listFeatureDescriptions()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
