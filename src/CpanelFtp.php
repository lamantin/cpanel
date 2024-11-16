<?php

namespace CpanelApi;

/**
 * Class CpanelFtp
 *
 * Cpanel FTP operations
 *
 * @package CpanelApi
 */
class CpanelFtp extends CpanelBase
{
  const OPERATION = 'Ftp';

  /**
   * addFtp
   * Create FTP Account
   * @param $user
   * @param $password
   * @return json
   */
  public function addFtp($user, $password)
  {
    $params = ['user' => $user, 'pass' => $password];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }


  /**
   * allowsAnonymousFtp
   * @return json
   */
  public function allowsAnonymousFtp()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * allowsAnonymousFtpIncoming
   * @return json
   */
  public function allowsAnonymousFtpIncoming()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

    /**
     * deleteFtp
     * @param string $user
     * @param string $destroy
     * @return json
     * @throws \Exception
     */
  public function deleteFtp(stirng $user, string $destroy = '1')
  {
    $params = ['user' => $user, 'destroy' => $destroy];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * ftpExists
   * @param string $user
   * @return json
   */
  public function ftpExists(string $user)
  {
    $params = ['user' => $user];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * getFtpDaemonInfo
   * @return json
   */
  public function getFtpDaemonInfo()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * getPort
   * @return json
   */
  public function getPort()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * getQuota
   * @param string $account
   * @param string $domain
   * @return json
   */
  public function getQuota(string $account, string $domain)
  {
    $params = ['account' => $account, 'domain' => $domain];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * getWelcomeMessage
   * @return json
   */
  public function getWelcomeMessage()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * killSession
   * @param string $login <felhasználó>
   * @return json
   */
  public function killSession(string $login)
  {
    $params = ['login' => $login];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * listFtp
   * @return json
   */
  public function listFtp()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * listFtpWithDisk
   * @return json
   */
  public function listFtpWithDisk()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * listSessions
   */
  public function listSessions()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * passwd
   * @param string $pass
   * @return json
   */
  public function passwd(string $pass)
  {
    $params = ['pass' => $pass];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  public function serverName()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

    /**
     * setAnonymousFtp
     * @param int $set
     * @return json
     * @throws \Exception
     */
  public function setAnonymousFtp(int $set = 0)
  {
    $params = ['set' => $set];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

    /**
     * setAnonymousFtpIncoming
     * @param int $set
     * @return json
     * @throws \Exception
     */
  public function setAnonymousFtpIncoming(int $set = 0)
  {
    $params = ['set' => $set];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * setHomeDir
   * @param string $user
   * @param string $domain
   * @param string $homedir
   */
  public function setHomeDir(string $user, string $domain, string $homedir)
  {
    $params = ['user' => $user, 'domain' => $domain, 'homedir' => $homedir];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * setQuota
   * @param string $set
   * @param int $quota
   */
  public function setQuota(string $user, int $quota)
  {
    $params = ['user' => $user, 'quota' => $quota];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * setWelocmeMessage
   * @param string $message
   */
  public function setWelocmeMessage(string $message)
  {
    $params = ['messaage' => $message];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

}
