<?php

namespace CpanelApi;

/**
 * Class CpanelResourceUsage
 *
 * Cpanel resource usage operations
 *
 * @package CpanelApi
 */
class CpanelResourceUsage extends CpanelBase
{
    const OPERATION = 'ResourceUsage';

    /**
     * @return json
     */
    public function getUsages()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function getStats(string $display)
    {
        $params = ['display' => $display];
        $command = ['StatsBar', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }



}
