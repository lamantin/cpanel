<?php

namespace CpanelApi;

/**
 * Class CpanelIntegration
 *
 * Cpanel ExternalAuthentication operations
 *
 * @package CpanelApi
 */
class CpanelExternalAuthentication extends CpanelBase
{
    const OPERATION = 'ExternalAuthentication';

    /**
     * @param string $username
     * @param string $providerId
     * @param string $subjectUniqueIdentifier
     * @param $preferredUsername
     * @return json
     * @throws \Exception
     */
    public function addAuthnLink(string $username,string $providerId,string $subjectUniqueIdentifier,$preferredUsername)
    {
        $params = ['username' => $username,'provider_id'=>$providerId,'subject_unique_identifiter'=>$subjectUniqueIdentifier,'preferred_username'=>$preferredUsername];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function configuredModules(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function getAuthnLinks(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @return json
     */
    public function hasExternalAuthModulesConfigured(){
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $provider
     * @param $subjectUniqueIdentifier
     * @return json
     * @throws \Exception
     */
    public function removeAuthnLink(string $provider,$subjectUniqueIdentifier)
    {
        $params = ['provider' => $provider,'subject_unique_identifier'=>$subjectUniqueIdentifier];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

}
