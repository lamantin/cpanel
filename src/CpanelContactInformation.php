<?php

namespace CpanelApi;

/**
 * Class CpanelContactInformation
 *
 * Cpanel ContactInformation operations
 *
 * @package CpanelApi
 */
class CpanelContactInformation extends CpanelBase
{
    const OPERATION = 'ContactInformation';

    /**
     * @param string $address
     * @return json
     * @throws \Exception
     */
    public function setEmailAddresses(string $address)
    {
        $params = ['address' =>$address];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @param string $oldAddress
     * @param string $password
     * @return json
     * @throws \Exception
     */
    public function unsetEmailAddresses(string $oldAddress,string $password)
    {
        $params = ['old_address' =>$oldAddress,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @return json
     * @throws \Exception
     */
    public function isEnabled()
    {
        $params = ['',''];
        $command = ['Contactus', CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

}
