<?php

namespace CpanelApi;

/**
 * Class CpanelUserManager
 *
 * Cpanel user manager operations
 *
 * @package CpanelApi
 */
class CpanelUserManager extends CpanelBase
{
    const OPERATION = 'UserManager';

    /**
     * @param string $fullUsername
     * @return json
     * @throws \Exception
     */
    public function checkAccountConflicts(string $fullUsername)
    {
        $params = ['full_username' => $fullUsername];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $domain
     * @param string $password
     * @param string $username
     * @return json
     * @throws \Exception
     */
    public function createUser(string $domain,string $password,string $username)
    {
        $params = ['domain' => $domain,'password'=>$password,'username'=>$username];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $domain
     * @param string $username
     * @return json
     * @throws \Exception
     */
    public function deleteUser(string $domain,string $username)
    {
        $params = ['domain' => $domain,'username'=>$username];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $username
     * @param string $domain
     * @return json
     * @throws \Exception
     */
    public function dismissMerge(string $username,string $domain)
    {
        $params = ['domain' => $domain,'username'=>$username];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $domain
     * @param string $password
     * @param string $username
     * @param string $alternateEmail
     * @param string $avatarUrl
     * @param string $phoneNumber
     * @param string $realName
     * @return json
     * @throws \Exception
     */
    public function editUser(string $domain,string $password,string $username,string $alternateEmail,string $avatarUrl,string $phoneNumber,string $realName)
    {
        $params = ['domain' => $domain,'password'=>$password,'username'=>$username,'alternate_email'=>$alternateEmail,'avatar_url'=>$avatarUrl,'phone_number'=>$phoneNumber,'real_name'=>$realName];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function listUsers()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $type
     * @param string $fullUsername
     * @return json
     * @throws \Exception
     */
    public function lookupServiceAccount(string $type,string $fullUsername)
    {
        $params=['type'=>$type,'full_username'=>$fullUsername];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $guid
     * @return json
     * @throws \Exception
     */
    public function lookupUser(string $guid)
    {
        $params=['guid'=>$guid];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param string $username
     * @param string $domain
     * @return json
     * @throws \Exception
     */
    public function mergeServiceAccount(string $username,string $domain)
    {
        $params=['username'=>$username,'domain'=>$domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param string $username
     * @param string $domain
     * @param string $service
     * @return json
     * @throws \Exception
     */
    public function unlinkServiceAccount(string $username,string $domain,string $service)
    {
        $params=['username'=>$username,'domain'=>$domain,'service'=>$service];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }



}
