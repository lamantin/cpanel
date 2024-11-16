<?php

namespace CpanelApi;

/**
 * Class CpanelTeam
 *
 * Cpanel team  operations
 *
 * @package CpanelApi
 */
class CpanelTeam extends CpanelBase
{
    const OPERATION = 'Team';

    /**
     * @param string $user
     * @param string $role
     * @return json
     * @throws \Exception
     */
    public function addRoles(string $user,string $role)
    {
        $params = ['user' => $user,'role'=>$role];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $email
     * @return json
     * @throws \Exception
     */
    public function addTeamUser(string $user,string $email)
    {
        $params = ['user' => $user,'email'=>$email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param string $user
     * @return json
     * @throws \Exception
     */
    public function cancelExpire(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $addRole
     * @param string $email1
     * @param string $email2
     * @param string $expireReason
     * @param string $notes
     * @param string $password
     * @param string $removeRole
     * @param string $setExpire
     * @param string $setRole
     * @return json
     * @throws \Exception
     */
    public function editTeamUser(string $user,string $addRole,string $email1,string $email2,string $expireReason,string $notes,string $password,string $removeRole,string $setExpire,string $setRole)
    {

        $params = ['user' => $user,'add_role'=>$addRole,'email1'=>$email1,'email2'=>$email2,'expire_reason'=>$expireReason,'notes'=>$notes,'password'=>$password,'remove_role'=>$removeRole,'set_expire'=>$setExpire,'set_role'=>$setRole];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @return json
     */
    public function listTeam()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $user
     * @return json
     * @throws \Exception
     */
    public function passwordResetRequest(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @return json
     * @throws \Exception
     */
    public function reinstateTeamUser(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $role
     * @return json
     * @throws \Exception
     */
    public function removeRoles(string $user,string $role)
    {
        $params = ['user' => $user,'role'=>$role];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param string $user
     * @return json
     * @throws \Exception
     */
    public function removeTeamUser(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $email1
     * @param string $email2
     * @return json
     * @throws \Exception
     */
    public function setContactEmail(string $user,string $email1,string $email2)
    {
        $params = ['user' => $user,'email1'=>$email1,'email2'=>$email2];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $expire
     * @return json
     * @throws \Exception
     */
    public function setExpire(string $user,string $expire)
    {
        $params = ['user' => $user,'expire'=>$expire];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $locale
     * @return json
     * @throws \Exception
     */
    public function setLocale(string $user,string $locale)
    {
        $params = ['user' => $user,'locale'=>$locale];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);

    }

    /**
     * @param strin $user
     * @param string $notes
     * @return json
     * @throws \Exception
     */
    public function setNotes(strin $user,string $notes)
    {
        $params = ['user' => $user,'notes'=>$notes];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $password
     * @return json
     * @throws \Exception
     */
    public function setPassword(string $user,string $password)
    {
        $params = ['user' => $user,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @param string $roles
     * @return json
     * @throws \Exception
     */
    public function setRoles(string $user,string $roles)
    {
        $params = ['user' => $user,'roles'=>$roles];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $user
     * @return json
     * @throws \Exception
     */
    public function suspendUser(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
