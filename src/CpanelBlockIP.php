<?php

namespace CpanelApi;

/**
 * Class CpanelIntegration
 *
 * Cpanel Integration operations
 *
 * @package CpanelApi
 */
class CpanelBlockIP extends CpanelBase
{
    const OPERATION = 'BlockIP';

    /**
     * @param string $ip
     * @return json
     * @throws \Exception
     */
    public function addIp(string $ip)
    {
        $params = ['ip' => $ip];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param string $ip
     * @return json
     * @throws \Exception
     */
    public function removeIp(string $ip)
    {
        $params = ['ip' => $ip];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }



}
