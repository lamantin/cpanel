<?php

namespace CpanelApi;

/**
 * Class CpanelBackup
 *
 * Cpanel backup  operations
 *
 * @package CpanelApi
 */
class CpanelBackup extends CpanelBase
{
    const OPERATION = 'Backup';

    /**
     * @param string $username
     * @param string $password
     * @param string $host
     * @param string $directory
     * @return json
     * @throws \Exception
     */
    public function fullbackupToFtp(string $username,string $password,string $host,string $directory)
    {
        $params = ['username' => $username,'password'=>$password,'host'=>$host,'directory'=>$directory];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $email
     * @param string $homedir
     * @return json
     * @throws \Exception
     */
    public function fullbackupToHomedir(string $email,string $homedir)
    {
        $params = ['email' => $email,'homedir'=>$homedir];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $host
     * @param string $keyName
     * @param string $keyPassphrase
     * @return json
     * @throws \Exception
     */
    public function fullbackupToScpWithKey(string $host,string $keyName,string $keyPassphrase)
    {
        $params = ['host' => $host,'key_name'=>$keyName,'key_passphrase'=>$keyPassphrase];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param string $host
     * @param string $username
     * @param string $password
     * @return json
     * @throws \Exception
     */
    public function fullbackupToScpWithPassword(string $host,string $username,string $password)
    {
        $params = ['host' => $host,'username'=>$username,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function listBackups()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $backup
     * @param int $timeout
     * @param int $verbose
     * @return json
     * @throws \Exception
     */
    public function restoreDatabases(string $backup,int $timeout,int $verbose)
    {
        $params = ['backup' => $backup,'timeout'=>$timeout,'verbose'=>$verbose];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params,'POST');
    }

    /**
     * @param string $backup
     * @param int $timeout
     * @param int $verbose
     * @return json
     * @throws \Exception
     */
    public function restoreEmailFilters(string $backup,int $timeout,int $verbose)
    {
        $params = ['backup' => $backup,'timeout'=>$timeout,'verbose'=>$verbose];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params,'POST');
    }

    /**
     * @param string $backup
     * @param int $timeout
     * @param int $verbose
     * @return json
     * @throws \Exception
     */
    public function restoreEmailForwarders(string $backup,int $timeout,int $verbose)
    {
        $params = ['backup' => $backup,'timeout'=>$timeout,'verbose'=>$verbose];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params,'POST');
    }

    /**
     * @param string $backup
     * @param string $directory
     * @param int $timeout
     * @param int $verbose
     * @return json
     * @throws \Exception
     */
    public function restoreFiles(string $backup,string $directory,int $timeout,int $verbose)
    {
        $params = ['backup' => $backup,'directory'=>$directory,'timeout'=>$timeout,'verbose'=>$verbose];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params,'POST');
    }

    /**
     * @param string $path
     * @return json
     * @throws \Exception
     */
    public function directoryListing(string $path)
    {
        $params = ['path' => $path];
        $command = ['Restore', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     * @throws \Exception
     */
    public function getUsers()
    {
        $params = ['',''];
        $command = ['Restore', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $path
     * @return json
     * @throws \Exception
     */
    public function queryFileInfo(string $path)
    {
        $params = ['path'=>$path];
        $command = ['Restore', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param int $backupID
     * @param string $path
     * @param int $overite
     * @return json
     * @throws \Exception
     */
    public function restoreFile(int $backupID,string $path,int $overite)
    {
        $params = ['backupID'=>$backupID,'path'=>$path,'overite'=>$overite];
        $command = ['Restore', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
