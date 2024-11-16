<?php

namespace CpanelApi;

/**
 * Class CpanelWebDisk
 *
 * Cpanel WebDisk operations
 *
 * @package CpanelApi
 */
class CpanelWebDisk extends CpanelBase
{
    const OPERATION = 'WebDisk';

    public function deleteUser(string $user,int $destroy)
    {
        $params = ['user' => $user,'destroy'=>$destroy];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setHomedir(string $homedir,string $user)
    {
        $params = ['homedir' => $homedir,'user'=>$user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setPassword(string $password,string $user)
    {
        $params = ['password' => $password,'user'=>$user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setPermissions(string $perms,string $user)
    {
        $params = ['perms' => $perms,'user'=>$user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
