<?php

namespace CpanelApi;

/**
 * Class CpanelTwoFactorAuth
 *
 * Cpanel TwoFactorAuth operations
 *
 * @package CpanelApi
 */
class CpanelTwoFactorAuth extends CpanelBase
{
    const OPERATION = 'TwoFactorAuth';

    /**
     * @return json
     */
    public function generateUserConfiguration(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function getTeamUserConfiguration(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function getUserConfiguration(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function removeUserConfiguration(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param srting $secret
     * @return json
     * @throws \Exception
     */
    public function setUserConfiguration(srting $secret)
    {
        $params = ['secret' => $secret];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }



}
