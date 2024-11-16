<?php

namespace CpanelApi;

/**
 * Class CpanelcPGreyList
 *
 * Cpanel cPGreyList operations
 *
 * @package CpanelApi
 */
class CpanelPGreyList extends CpanelBase
{
    const OPERATION = 'cPGreyList';


    public function disableAllDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function disableDomains(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function enableAllDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function enableDomains(string $domains)
    {
        $params = ['domains' => $domains];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function hasGreylistingEnabled()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
