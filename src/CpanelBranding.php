<?php

namespace CpanelApi;

/**
 * Class CpanelBranding
 *
 * Cpanel branding  operations
 *
 * @package CpanelApi
 */
class CpanelBranding extends CpanelBase
{
    const OPERATION = 'Branding';

    /**
     * @param string $appKey
     * @return json
     * @throws \Exception
     */
    public function getApplicationInformation(string $appKey)
    {
        $params = ['app_key' => $appKey];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function getApplications()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }
    /**
     * @return json
     */
    public function getAvailabeApplications()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $docroot
     * @return json
     * @throws \Exception
     */
    public function getInformationForApplications(string $docroot)
    {
        $params = ['docroot' => $docroot];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getDom(string $pageTitle)
    {
        $params = ['page_title' => $pageTitle];
        $command = ['Chrome', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }


}
