<?php

namespace CpanelApi;

/**
 * Class CpanelDirectory
 *
 * Cpanel Directory  operations
 *
 * @package CpanelApi
 */
class CpanelDirectory extends CpanelBase
{
    const OPERATION = 'Directory';

    /**
     * @param string $dir
     * @return json
     * @throws \Exception
     */
    public function getIndexing(string $dir)
    {
        $params = ['dir' => $dir];
        $command = ['DirectoryIndexes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $dir
     * @return json
     * @throws \Exception
     */
    public function listDirectories(string $dir)
    {
        $params = ['dir' => $dir];
        $command = ['DirectoryIndexes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $dir
     * @param string $type
     * @return json
     * @throws \Exception
     */
    public function setIndexing(string $dir,string $type)
    {
        $params = ['dir' => $dir,'type'=>$type];
        $command = ['DirectoryIndexes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
    /**DIRECTORY PRIVACY**/
    /**
     * @param string $dir
     * @param string $user
     * @param string $password
     * @return json
     * @throws \Exception
     */
    public function addUser(string $dir,string $user,string $password)
    {
        $params = ['dir' => $dir,'user'=>$user,'password'=>$password];
        $command = ['DirectoryPrivacy', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $dir
     * @param int $enabled
     * @param string $authname
     * @return json
     * @throws \Exception
     */
    public function configureDirectoryProtection(string $dir,int $enabled,string $authname)
    {
        $params = ['dir' => $dir,'enabled'=>$enabled,'authname'=>$authname];
        $command = ['DirectoryPrivacy', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteUser(string $dir,string $user)
    {
        $params = ['dir' => $dir,'user'=>$user];
        $command = ['DirectoryPrivacy', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function isDirectoryProtected(string $dir)
    {
        $params = ['dir' => $dir];
        $command = ['DirectoryPrivacy', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listUsers(string $dir)
    {
        $params = ['dir' => $dir];
        $command = ['DirectoryPrivacy', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $dir
     * @return json
     * @throws \Exception
     */
    public function listProtectedDirectories(string $dir)
    {
        $params = ['dir' => $dir];
        $command = ['DirectoryProtection', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }



}
