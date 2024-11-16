<?php

namespace CpanelApi;

/**
 * Class CpanelEmail
 *
 * Cpanel email operations
 *
 * @package CpanelApi
 */
class CpanelEmail extends CpanelBase
{
    const OPERATION = 'Email';

    /**
     * addPop
     * POP Email account create
     * @param $email <email>
     * @param $password <jelszó>
     * @return json
     */
    public function addPop($email, $password)
    {
        $params = ['email' => $email, 'password' => $password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addMx(string $domain, string $exchanger, int $priority)
    {
        $params = ['domain' => $domain, 'exchanger' => $exchanger, 'priority' => $priority];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function accountName()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function importCsvEmails(string $id, string $type, string $domain)
    {
        $params = ['id' => $id, 'type' => $type, 'domain' => $domain];
        $command = ['CSVImport', 'doimport'];
        return $this->doCommand($command, $params);
    }

    public function addAutoResponder(string $email, string $from, string $subject, string $body, string $domain, string $isHtml, int $interval, string $start, string $stop)
    {
        $params = [
            'email' => $email,
            'from' => $from,
            'subject' => $subject,
            'body' => $body,
            'domain' => $domain,
            'is_html' => $isHtml,
            'interval' => $interval,
            'start' => $start,
            'stop' => $stop
        ];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function browseMailbox(string $account, string $dir, string $showdotfiles)
    {
        $params = ['account' => $account, 'dir' => $dir, 'showdotfiles' => $showdotfiles];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function countAutoresponders()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function countPops()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function deleteAutoresponder(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteHeldMessagages(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deletePop(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function dispatchClientSettings(string $to, string $account)
    {
        $params = ['to' => $to, 'account' => $account];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function editPopQuota(string $email, string $domain, string $quota)
    {
        $params = ['email' => $email, 'domain' => $domain, 'quota' => $quota];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getAutoresponder(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getClientSettings(string $account)
    {
        $params = ['account' => $account];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getDefaultemailQuota()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getDefaultemailQuotaMib()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getDiskIUsage(string $user,string $domain)
    {
        $params = ['user' => $user,'domain'=>$domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getHeldMessageCount()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getMainAccountDiskUsage()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getMainAccountDiskUsageBytes()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getEmailMaxQuota()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getEmailMaxQuotaMib()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getPopQuota(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getWebMailSettings()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function holdOutgoing(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listAutoResponders(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listDefaultAddress(string $user)
    {
        $params = ['user' => $user];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listMailDomains()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listPops()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listPopsWithDisk()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function passwdPop(string $email,string $password)
    {
        $params = ['email' => $email,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function releaseOutgoing(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setDefaultAddress(string $fwdopt,string $domain,string $failmsgs,string $fwdemail,string $pipefwd)
    {
        $params = ['fwdopt' => $fwdopt,'domain'=>$domain,'failmsgs'=>$failmsgs,'fwdemail'=>$fwdemail,'pipefwd'=>$pipefwd];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setManualMxRedirects(string $domain,string $mxHost)
    {
        $params = ['domain' => $domain,'mx_host'=>$mxHost];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function terminateMailboxSessions()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function traceDelivery(string $recipient)
    {
        $params = ['recipient' => $recipient];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function unsetManualMxRedirects(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function verifyPassword(string $email,string $password)
    {
        $params = ['email' => $email,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function countFilters()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function deleteFilter(string $account,string $filterName)
    {
        $params = ['account' => $account,'filter_name'=>$filterName];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function disableFilter(tring $account,string $filterName)
    {
        $params = ['account' => $account,'filter_name'=>$filterName];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getFilter(string $account,string $filtername)
    {
        $params = ['account' => $account,'filter_name'=>$filterName];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listFilters()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listFiltersBackup()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listSystemFilterInfo()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function reorderFilters(string $mailbox,string $filter)
    {
        $params = ['mailbox' => $mailbox,'filter'=>$filter];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function storeFilter(string $action,string $filtername,string $match,string $part,string $val,string $account,string $dest,string $oldfiltername,stting $opt)
    {
        $params = ['action' => $action,'filtername'=>$filtername,'match'=>$match,'part'=>$part,'val'=>$val,'account'=>$account,'deast'=>$dest,'oldfiltername'=>$oldfiltername,'opt'=>$opt];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function traceFilter(string $msg)
    {
        $params = ['msg' => $msg];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addDomainForwarder(string $domain,string $destdomain)
    {
        $params = ['domain' => $domain,'destdomain'=>$destdomain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addForwarder(string $domain,string $email,string $fwdopt)
    {
        $params = ['domain' => $domain,'email'=>$email,'fwdopt'=>$fwdopt];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function countForwarders()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function deleteDomainForwarder(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteForwarder(string $address,string $forwarder)
    {
        $params = ['address' => $address,'forwarder'=>$forwarder];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listDomainForwarders(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listForwarders(string $domain,string $regex)
    {
        $params = ['domain' => $domain,'regex'=>$regex];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listForwardersBackups()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function checkFastMail()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function disableMailboxAutocreate(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function enableMailboxAutocreate(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function fetchCharmaps()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function ftsRescanMailbox(string $account)
    {
        $params = ['account' => $account];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getCharsets()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getMailboxAutocreate(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function hasPlaintextAuthentication()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function setAlwaysAccept(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function statsDbStatus()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function suspendIncoming()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function suspendLogin(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
    public function suspendOutgoing(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function unsuspendIncoming()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function unsuspendOutgoing(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function unsuspendLogin(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /** MAIL SERVERINFO */
     public function getEximPorts()
     {
         $params = ['' ,''];
         $command = ['Chkservd', CpanelBase::nameResolver(__FUNCTION__)];
         return $this->doCommand($command, $params);
     }

     public function getEximPortsSsl()
     {
         $params = ['' ,''];
         $command = ['Chkservd', CpanelBase::nameResolver(__FUNCTION__)];
         return $this->doCommand($command, $params);
     }

     /**MAILBOX MANAGEMENT*/
    public function expungeMailboxMessages(string $account)
    {
        $params = ['account'=>$account];
        $command = ['Mailboxes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function expungeMessagesForMailboxGuid(string $account,string $mailboxGuid)
    {
        $params = ['account'=>$account,'mailbox_guid'=>$mailboxGuid];
        $command = ['Mailboxes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getMailboxStatusList(stirng $account)
    {
        $params = ['account'=>$account];
        $command = ['Mailboxes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function hasUtf8MailboxNames()
    {
        $params = ['',''];
        $command = ['Mailboxes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setUtf8MailboxNames(string $enabled)
    {
        $params = ['enabled'=>$enabled];
        $command = ['Mailboxes', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
    /**MAILING LIST FUNCTIONS */

    public function addList(string $list,string $password,string $domain)
    {
        $params = ['list'=>$list,'password'=>$password,'domain'=>$domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addMailmanDelegates(string $list,string $delegates)
    {
        $params = ['list'=>$list,'delegates'=>$delegates];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
    public function countList()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function deleteList(string $list)
    {
        $params = ['list'=>$list];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function exportLists()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function generateMailmanOtp(string $list)
    {
        $params = ['list'=>$list];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getListsTotalDiskUsage()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getMailmanDelegates(string $list)
    {
        $params = ['list'=>$list];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function hasDelegatedMailmanLists(string $delegate)
    {
        $params = ['delegate'=>$delegate];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listLists()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function passwdList(string $list,string $password)
    {
        $params = ['list'=>$list,'password'=>$password];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function removeMailmanDelegates(string $list,string $delegates)
    {
        $params = ['list'=>$list,'delegates'=>$delegates];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setListPrivacyOptions(string $list,int $advertised,int $archivePrivate,int $subscribePolicy)
    {
        $params = ['list'=>$list,'advertised'=>$advertised,'archive_private'=>$archivePrivate,'subsrcibe_policy'=>$subscribePolicy];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addSpamFilter(string $account,int $requiredScore)
    {
        $params = ['account' => $account, 'required_score' => $requiredScore];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function disableSpamAssasin()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function disableSpamAutodelete()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function disableSpamBox()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function enableSpamAssasin()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function enableSpamBox()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getSpamSettings()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function deleteSpamBox()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getSymbolicTestNames()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function getUserPreferences()
    {
        $params = ['',''];
        $command = ['SpamAssassin', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function updateUserPreference(string $score)
    {
        $params = ['score'=>$score];
        $command = ['SpamAssassin', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
    /**WEBMAIL */

    public function listWebmailApps(string $theme)
    {
        $params = ['theme'=>$theme];
        $command = ['WebmailApps', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function createTempUser()
    {
        $params = ['',''];
        $command = ['Session', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function createWebmailSessionForMailUser(string $login,string $domain)
    {
        $params = ['login'=>$login,'domain'=>$domain];
        $command = ['Session', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function createWebmailSessionForMailUserCheckPassword(string $login,string $domain,string $password)
    {
        $params = ['login'=>$login,'domain'=>$domain,'password'=>$password];
        $command = ['Session', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function createWebmailSessionForSelf(string $locale,string $remoteAddress)
    {
        $params = ['login'=>$locale,'remote_address'=>$remoteAddress];
        $command = ['Session', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function changeMx(string $domain, string $exchanger, string $oldExchanger, int $priority)
    {
        $params = [
            'domain' => $domain,
            'exchanger' => $exchanger,
            'old_exchanger' => $oldExchanger,
            'priority' => $priority
        ];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteMx(string $domain, string $exchanger, int $priority)
    {
        $params = ['domain' => $domain, 'exchanger' => $exchanger, 'priority' => $priority];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listMxs()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**EMAIL AUTH **/

    public function disableDkim(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function enableDkim(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function ensureDkimKeyExists(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function fetchDkimPrivateKeys(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function installDkimPrivateKeys(string $domain, string $key)
    {
        $params = ['domain' => $domain, 'key' => $key];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function installSpfRecords(string $domain, string $record)
    {
        $params = ['domain' => $domain, 'record' => $record];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function validateCurrentDkims(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function valiadateCurrentPtrs(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function validateCurrentSpfs(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['EmailAuth', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
