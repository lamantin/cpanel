<?php

namespace CpanelApi;

/**
 * Class CpanelFeatures
 *
 * Cpanel Features operations
 *
 * @package CpanelApi
 */
class CpanelFeature extends CpanelBase
{
    const OPERATION = 'Features';

    /**
     * @param string $address
     * @return json
     * @throws \Exception
     */
    public function getFeatureMetadata()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $name
     * @return json
     * @throws \Exception
     */
    public function hasFeature(string $name)
    {
        $params = ['name' => $name];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function listFeatures()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }



}
