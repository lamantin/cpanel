<?php

namespace CpanelApi;

/**
 * Class CpanelPersonalization
 *
 * Cpanel personalization operations
 *
 * @package CpanelApi
 */
class CpanelPersonalization extends CpanelBase
{
    const OPERATION = 'Personalization';

    /**
     * @return json
     */
    public function get()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function set(string $names)
    {
        $params = ['names' => $names];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params,'POST');
    }

    /**
     * @return json
     */
    public function getQuotaInfo()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
