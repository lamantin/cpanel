<?php

namespace CpanelApi;

/**
 * Class CpanelMysql
 *
 * Cpanel MYSQL operations
 *
 * @package CpanelApi
 */
class CpanelMysql extends CpanelBase
{
  const OPERATION = 'Mysql';

  /**
   * checkDatabase
   * @param string $dataBaseName
   * @return json
   */
  public function checkDatabase(string $dataBaseName)
  {
    $params = ['name' => $dataBaseName];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

    return $this->doCommand($command, $params);
  }

  /**
   * createDatabase
   * @param string $dataBaseName
   * @return json
   */
  public function createDatabase(string $dataBaseName)
  {
    /*if ($this->checkDatabase($dataBaseName)) {
      return false;
    }*/
    $params = ['name' => $dataBaseName];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * addHost
   * @param string $host
   * @return json
   */
  public function AddHost(string $host)
  {
    $params = ['host' => $host];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * addHostNote
   * @param string $host
   * @param string $note
   * @return json
   */
  public function addHostNote(string $host, string $note)
  {
    $params = ['host' => $host, 'note' => $note];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * createUser
   * @param string $name
   * @param string $password
   * @return json
   */
  public function createUser(string $name, string $password)
  {
    $params = ['name' => $name, 'password' => $password];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * deleteDataBase
   * @param string $name
   * @return json
   */
  public function deleteDataBase(string $name)
  {
    $params = ['name' => $name];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * deleteHost
   * @param string $host
   * @return json
   */
  public function deleteHost(string $host)
  {
    $params = ['host' => $host];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * deleteUser
   * @param string $name
   * @return json
   */
  public function deleteUser(string $name)
  {
    $params = ['name' => $name];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * dumpDataBaseSchema
   * @param string $dbName
   * @return json
   */
  public function dumpDatabaseSchema(string $dbName)
  {
    $params = ['dbname' => $dbName];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * getHostNotes
   * @return json
   */
  public function getHostNotes()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * getPrivilegesOndatabase
   * @param string $user
   * @param string $database
   * @return json
   */
  public function getPrivilegesOndatabase(string $user, string $database)
  {
    $params = ['user' => $user, 'database' => $database];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  public function listUsers(){
    $params = ['', ''];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * getRestrictions
   * @return json
   */
  public function getRestrictions()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * getServerInformation
   * @return json
   */
  public function getServerInformation()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * listDatabases
   * @return json
   */
  public function listDatabases()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * listRoutines
   * @param string $databaseUser
   * @return json
   */
  public function listRoutines(string $databaseUser)
  {
    $params = ['database_user' => $databaseUser];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * locateServer
   * @return json
   */
  public function locateServer()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  /**
   * renameDatabase
   * @param string $oldName
   * @param string $newName
   * @return json
   */
  public function renameDatabase(string $oldName, string $newName)
  {
    $params = ['oldname' => $oldName, 'newname' => $newName];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * renameUser
   * @param string $oldName
   * @param string $newName
   * @return json
   */
  public function renameUser(string $oldName, string $newName)
  {
    $params = ['oldname' => $oldName, 'newname' => $newName];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * repairDatabase
   * @param string $name
   * @return json
   */
  public function repairDatabase(string $name)
  {
    $params = ['name' => $name];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * revokeAccessToDatabase
   * @param string $user
   * @param string $database
   * @return json
   */
  public function revokeAccessToDatabase(string $user, string $database)
  {
    $params = ['user' => $user, 'database' => $database];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * setPassword
   * @param string $user
   * @param string $password
   * @return json
   */
  public function setPassword(string $user, string $password)
  {
    $params = ['user' => $user, 'password' => $password];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * setPrivilegesOnDatabase
   * @param string $user
   * @param string $database
   * @return json
   */
  public function setPrivilegesOnDatabase(string $user, string $database)
  {
    $params = ['user' => $user, 'database' => $database];
    $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
    return $this->doCommand($command, $params);
  }

  /**
   * updatePrivileges
   * @return json
   */
  public function updatePrivileges()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }
}
