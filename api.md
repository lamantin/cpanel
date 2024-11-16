## Table of contents

- [\CpanelApi\CpanelException](#class-cpanelapicpanelexception)
- [\CpanelApi\CpanelPersonalization](#class-cpanelapicpanelpersonalization)
- [\CpanelApi\CpanelTeamRoles](#class-cpanelapicpanelteamroles)
- [\CpanelApi\CpanelUserManager](#class-cpanelapicpanelusermanager)
- [\CpanelApi\CpanelToken](#class-cpanelapicpaneltoken)
- [\CpanelApi\CpanelImageManager](#class-cpanelapicpanelimagemanager)
- [\CpanelApi\CpanelFileman](#class-cpanelapicpanelfileman)
- [\CpanelApi\CpanelBlockIP](#class-cpanelapicpanelblockip)
- [\CpanelApi\CpanelEmail](#class-cpanelapicpanelemail)
- [\CpanelApi\CpanelMarket](#class-cpanelapicpanelmarket)
- [\CpanelApi\CpanelDirectory](#class-cpanelapicpaneldirectory)
- [\CpanelApi\CpanelContactInformation](#class-cpanelapicpanelcontactinformation)
- [\CpanelApi\CpanelWebVhosts](#class-cpanelapicpanelwebvhosts)
- [\CpanelApi\CpanelDNS](#class-cpanelapicpaneldns)
- [\CpanelApi\CpanelUserTasks](#class-cpanelapicpanelusertasks)
- [\CpanelApi\CpanelResourceUsage](#class-cpanelapicpanelresourceusage)
- [\CpanelApi\CpanelMime](#class-cpanelapicpanelmime)
- [\CpanelApi\CpanelGPG](#class-cpanelapicpanelgpg)
- [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)
- [\CpanelApi\CpanelLocale](#class-cpanelapicpanellocale)
- [\CpanelApi\CpanelWebDisk](#class-cpanelapicpanelwebdisk)
- [\CpanelApi\CpanelVersionControlDeployment](#class-cpanelapicpanelversioncontroldeployment)
- [\CpanelApi\CpanelDomainInfo](#class-cpanelapicpaneldomaininfo)
- [\CpanelApi\CpanelQuota](#class-cpanelapicpanelquota)
- [\CpanelApi\CpanelMysql](#class-cpanelapicpanelmysql)
- [\CpanelApi\CpanelIntegration](#class-cpanelapicpanelintegration)
- [\CpanelApi\CpanelFtp](#class-cpanelapicpanelftp)
- [\CpanelApi\CpanelUser](#class-cpanelapicpaneluser)
- [\CpanelApi\CpanelTwoFactorAuth](#class-cpanelapicpaneltwofactorauth)
- [\CpanelApi\CpanelCacheBuster](#class-cpanelapicpanelcachebuster)
- [\CpanelApi\CpanelTeam](#class-cpanelapicpanelteam)
- [\CpanelApi\CpanelBackup](#class-cpanelapicpanelbackup)
- [\CpanelApi\CpanelExternalAuthentication](#class-cpanelapicpanelexternalauthentication)
- [\CpanelApi\CpanelBranding](#class-cpanelapicpanelbranding)
- [\CpanelApi\CpanelBoxTrapper](#class-cpanelapicpanelboxtrapper)

<hr />

### Class: \CpanelApi\CpanelException

> Class CpanelException

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \CpanelApi\CpanelPersonalization

> Class CpanelPersonalization Cpanel personalization operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>get()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getQuotaInfo()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>set(</strong><em>\string</em> <strong>$names</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelTeamRoles

> Class CpanelTeamRoles Cpanel team roles operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>listFeatureDescriptions()</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelUserManager

> Class CpanelUserManager Cpanel user manager operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>checkAccountConflicts(</strong><em>\string</em> <strong>$fullUsername</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>createUser(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$username</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>deleteUser(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$username</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>dismissMerge(</strong><em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>editUser(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$alternateEmail</strong>, <em>\string</em> <strong>$avatarUrl</strong>, <em>\string</em> <strong>$phoneNumber</strong>, <em>\string</em> <strong>$realName</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listUsers()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>lookupServiceAccount(</strong><em>\string</em> <strong>$type</strong>, <em>\string</em> <strong>$fullUsername</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>lookupUser(</strong><em>\string</em> <strong>$guid</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>mergeServiceAccount(</strong><em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>unlinkServiceAccount(</strong><em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$service</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelToken

> Class CpanelMysql Cpanel Token operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>createFullAccess(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>create full access token</em> |
| public | <strong>rename(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$newname</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>revoke(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>tokens()</strong> : <em>\CpanelApi\json</em><br /><em>List of tokens</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelImageManager

> Class CpanelImageManager Cpanel ImageManager operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>convertFile(</strong><em>\string</em> <strong>$imageFile</strong>, <em>\string</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>createThumbnails(</strong><em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$widthPercentage</strong>, <em>\string</em> <strong>$heightPercentage</strong>)</strong> : <em>mixed</em> |
| public | <strong>getDimensions(</strong><em>\string</em> <strong>$imageFile</strong>)</strong> : <em>mixed</em> |
| public | <strong>resizeImage(</strong><em>\string</em> <strong>$imageFile</strong>, <em>\string</em> <strong>$width</strong>, <em>\CpanelApi\srting</em> <strong>$height</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelFileman

> Class CpanelFileman Cpanel Fileman operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>autocompletedir(</strong><em>\string</em> <strong>$path</strong>, <em>\int</em> <strong>$dirsonly</strong>, <em>\int</em> <strong>$html</strong>, <em>\int</em> <strong>$listAll</strong>)</strong> : <em>void</em> |
| public | <strong>convertFile(</strong><em>\string</em> <strong>$imageFile</strong>, <em>\string</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>emptyTrash()</strong> : <em>void</em> |
| public | <strong>getFileContent(</strong><em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$file</strong>)</strong> : <em>mixed</em> |
| public | <strong>getFileInformation(</strong><em>\string</em> <strong>$path</strong>, <em>\int</em> <strong>$checkForLeafDirectories</strong>, <em>\int</em> <strong>$includeHash</strong>, <em>\int</em> <strong>$includeMime</strong>, <em>\int</em> <strong>$includePermissions</strong>, <em>mixed</em> <strong>$showHidden</strong>)</strong> : <em>mixed</em> |
| public | <strong>listFiles(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>void</em> |
| public | <strong>saveFileContent(</strong><em>\string</em> <strong>$file</strong>, <em>\string</em> <strong>$content</strong>, <em>\string</em> <strong>$dir</strong>, <em>\int</em> <strong>$fallback</strong>, <em>\string</em> <strong>$fromCharset</strong>, <em>\string</em> <strong>$toCharset</strong>)</strong> : <em>void</em> |
| public | <strong>transcode(</strong><em>\CpanelApi\srting</em> <strong>$content</strong>, <em>\int</em> <strong>$discardIllegal</strong>, <em>\string</em> <strong>$fromCharset</strong>, <em>\string</em> <strong>$toCharset</strong>, <em>\int</em> <strong>$transliterate</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelBlockIP

> Class CpanelIntegration Cpanel Integration operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addIp(</strong><em>\string</em> <strong>$ip</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>removeIp(</strong><em>\string</em> <strong>$ip</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelEmail

> Class CpanelEmail Cpanel email operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>accountName()</strong> : <em>void</em> |
| public | <strong>addAutoResponder(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$from</strong>, <em>\string</em> <strong>$subject</strong>, <em>\string</em> <strong>$body</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$isHtml</strong>, <em>\int</em> <strong>$interval</strong>, <em>\string</em> <strong>$start</strong>, <em>\string</em> <strong>$stop</strong>)</strong> : <em>void</em> |
| public | <strong>addDomainForwarder(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$destdomain</strong>)</strong> : <em>void</em> |
| public | <strong>addForwarder(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$fwdopt</strong>)</strong> : <em>void</em> |
| public | <strong>addList(</strong><em>\string</em> <strong>$list</strong>, <em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>addMailmanDelegates(</strong><em>\string</em> <strong>$list</strong>, <em>\string</em> <strong>$delegates</strong>)</strong> : <em>void</em> |
| public | <strong>addMx(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$exchanger</strong>, <em>\int</em> <strong>$priority</strong>)</strong> : <em>void</em> |
| public | <strong>addPop(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>addPop POP Email account create</em> |
| public | <strong>addSpamFilter(</strong><em>\string</em> <strong>$account</strong>, <em>\int</em> <strong>$requiredScore</strong>)</strong> : <em>void</em> |
| public | <strong>browseMailbox(</strong><em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$showdotfiles</strong>)</strong> : <em>void</em> |
| public | <strong>changeMx(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$exchanger</strong>, <em>\string</em> <strong>$oldExchanger</strong>, <em>\int</em> <strong>$priority</strong>)</strong> : <em>void</em> |
| public | <strong>checkFastMail()</strong> : <em>void</em> |
| public | <strong>countAutoresponders()</strong> : <em>void</em> |
| public | <strong>countFilters()</strong> : <em>void</em> |
| public | <strong>countForwarders()</strong> : <em>void</em> |
| public | <strong>countList()</strong> : <em>void</em> |
| public | <strong>countPops()</strong> : <em>void</em> |
| public | <strong>createTempUser()</strong> : <em>mixed</em> |
| public | <strong>createWebmailSessionForMailUser(</strong><em>\string</em> <strong>$login</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>createWebmailSessionForMailUserCheckPassword(</strong><em>\string</em> <strong>$login</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>mixed</em> |
| public | <strong>createWebmailSessionForSelf(</strong><em>\string</em> <strong>$locale</strong>, <em>\string</em> <strong>$remoteAddress</strong>)</strong> : <em>mixed</em> |
| public | <strong>deleteAutoresponder(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>deleteDomainForwarder(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>deleteFilter(</strong><em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$filterName</strong>)</strong> : <em>void</em> |
| public | <strong>deleteForwarder(</strong><em>\string</em> <strong>$address</strong>, <em>\string</em> <strong>$forwarder</strong>)</strong> : <em>void</em> |
| public | <strong>deleteHeldMessagages(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>deleteList(</strong><em>\string</em> <strong>$list</strong>)</strong> : <em>void</em> |
| public | <strong>deleteMx(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$exchanger</strong>, <em>\int</em> <strong>$priority</strong>)</strong> : <em>void</em> |
| public | <strong>deletePop(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>deleteSpamBox()</strong> : <em>void</em> |
| public | <strong>disableDkim(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>disableFilter(</strong><em>\CpanelApi\tring</em> <strong>$account</strong>, <em>\string</em> <strong>$filterName</strong>)</strong> : <em>void</em> |
| public | <strong>disableMailboxAutocreate(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>disableSpamAssasin()</strong> : <em>void</em> |
| public | <strong>disableSpamAutodelete()</strong> : <em>void</em> |
| public | <strong>disableSpamBox()</strong> : <em>void</em> |
| public | <strong>dispatchClientSettings(</strong><em>\string</em> <strong>$to</strong>, <em>\string</em> <strong>$account</strong>)</strong> : <em>void</em> |
| public | <strong>editPopQuota(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$quota</strong>)</strong> : <em>void</em> |
| public | <strong>enableDkim(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>enableMailboxAutocreate(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>enableSpamAssasin()</strong> : <em>void</em> |
| public | <strong>enableSpamBox()</strong> : <em>void</em> |
| public | <strong>ensureDkimKeyExists(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>exportLists()</strong> : <em>void</em> |
| public | <strong>expungeMailboxMessages(</strong><em>\string</em> <strong>$account</strong>)</strong> : <em>void</em> |
| public | <strong>expungeMessagesForMailboxGuid(</strong><em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$mailboxGuid</strong>)</strong> : <em>void</em> |
| public | <strong>fetchCharmaps()</strong> : <em>mixed</em> |
| public | <strong>fetchDkimPrivateKeys(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>ftsRescanMailbox(</strong><em>\string</em> <strong>$account</strong>)</strong> : <em>void</em> |
| public | <strong>generateMailmanOtp(</strong><em>\string</em> <strong>$list</strong>)</strong> : <em>void</em> |
| public | <strong>getAutoresponder(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getCharsets()</strong> : <em>mixed</em> |
| public | <strong>getClientSettings(</strong><em>\string</em> <strong>$account</strong>)</strong> : <em>mixed</em> |
| public | <strong>getDefaultemailQuota()</strong> : <em>mixed</em> |
| public | <strong>getDefaultemailQuotaMib()</strong> : <em>mixed</em> |
| public | <strong>getDiskIUsage(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>getEmailMaxQuota()</strong> : <em>mixed</em> |
| public | <strong>getEmailMaxQuotaMib()</strong> : <em>mixed</em> |
| public | <strong>getEximPorts()</strong> : <em>mixed</em><br /><em>MAIL SERVERINFO</em> |
| public | <strong>getEximPortsSsl()</strong> : <em>mixed</em> |
| public | <strong>getFilter(</strong><em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$filtername</strong>)</strong> : <em>mixed</em> |
| public | <strong>getHeldMessageCount()</strong> : <em>mixed</em> |
| public | <strong>getListsTotalDiskUsage()</strong> : <em>mixed</em> |
| public | <strong>getMailboxAutocreate(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getMailboxStatusList(</strong><em>\CpanelApi\stirng</em> <strong>$account</strong>)</strong> : <em>mixed</em> |
| public | <strong>getMailmanDelegates(</strong><em>\string</em> <strong>$list</strong>)</strong> : <em>mixed</em> |
| public | <strong>getMainAccountDiskUsage()</strong> : <em>mixed</em> |
| public | <strong>getMainAccountDiskUsageBytes()</strong> : <em>mixed</em> |
| public | <strong>getPopQuota(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getSpamSettings()</strong> : <em>mixed</em> |
| public | <strong>getSymbolicTestNames()</strong> : <em>mixed</em> |
| public | <strong>getUserPreferences()</strong> : <em>mixed</em> |
| public | <strong>getWebMailSettings()</strong> : <em>mixed</em> |
| public | <strong>hasDelegatedMailmanLists(</strong><em>\string</em> <strong>$delegate</strong>)</strong> : <em>bool</em> |
| public | <strong>hasPlaintextAuthentication()</strong> : <em>bool</em> |
| public | <strong>hasUtf8MailboxNames()</strong> : <em>bool</em> |
| public | <strong>holdOutgoing(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>importCsvEmails(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$type</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>installDkimPrivateKeys(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$key</strong>)</strong> : <em>void</em> |
| public | <strong>installSpfRecords(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$record</strong>)</strong> : <em>void</em> |
| public | <strong>listAutoResponders(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>listDefaultAddress(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>listDomainForwarders(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>listFilters()</strong> : <em>void</em> |
| public | <strong>listFiltersBackup()</strong> : <em>void</em> |
| public | <strong>listForwarders(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$regex</strong>)</strong> : <em>void</em> |
| public | <strong>listForwardersBackups()</strong> : <em>void</em> |
| public | <strong>listLists()</strong> : <em>void</em> |
| public | <strong>listMailDomains()</strong> : <em>void</em> |
| public | <strong>listMxs()</strong> : <em>void</em> |
| public | <strong>listPops()</strong> : <em>void</em> |
| public | <strong>listPopsWithDisk()</strong> : <em>void</em> |
| public | <strong>listSystemFilterInfo()</strong> : <em>void</em> |
| public | <strong>listWebmailApps(</strong><em>\string</em> <strong>$theme</strong>)</strong> : <em>void</em> |
| public | <strong>passwdList(</strong><em>\string</em> <strong>$list</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>void</em> |
| public | <strong>passwdPop(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>void</em> |
| public | <strong>releaseOutgoing(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>removeMailmanDelegates(</strong><em>\string</em> <strong>$list</strong>, <em>\string</em> <strong>$delegates</strong>)</strong> : <em>void</em> |
| public | <strong>reorderFilters(</strong><em>\string</em> <strong>$mailbox</strong>, <em>\string</em> <strong>$filter</strong>)</strong> : <em>void</em> |
| public | <strong>setAlwaysAccept(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>setDefaultAddress(</strong><em>\string</em> <strong>$fwdopt</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$failmsgs</strong>, <em>\string</em> <strong>$fwdemail</strong>, <em>\string</em> <strong>$pipefwd</strong>)</strong> : <em>void</em> |
| public | <strong>setListPrivacyOptions(</strong><em>\string</em> <strong>$list</strong>, <em>\int</em> <strong>$advertised</strong>, <em>\int</em> <strong>$archivePrivate</strong>, <em>\int</em> <strong>$subscribePolicy</strong>)</strong> : <em>void</em> |
| public | <strong>setManualMxRedirects(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$mxHost</strong>)</strong> : <em>void</em> |
| public | <strong>setUtf8MailboxNames(</strong><em>\string</em> <strong>$enabled</strong>)</strong> : <em>void</em> |
| public | <strong>statsDbStatus()</strong> : <em>void</em> |
| public | <strong>storeFilter(</strong><em>\string</em> <strong>$action</strong>, <em>\string</em> <strong>$filtername</strong>, <em>\string</em> <strong>$match</strong>, <em>\string</em> <strong>$part</strong>, <em>\string</em> <strong>$val</strong>, <em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$dest</strong>, <em>\string</em> <strong>$oldfiltername</strong>, <em>\CpanelApi\stting</em> <strong>$opt</strong>)</strong> : <em>void</em> |
| public | <strong>suspendIncoming()</strong> : <em>void</em> |
| public | <strong>suspendLogin(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>suspendOutgoing(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>terminateMailboxSessions()</strong> : <em>void</em> |
| public | <strong>traceDelivery(</strong><em>\string</em> <strong>$recipient</strong>)</strong> : <em>void</em> |
| public | <strong>traceFilter(</strong><em>\string</em> <strong>$msg</strong>)</strong> : <em>void</em> |
| public | <strong>unsetManualMxRedirects(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>unsuspendIncoming()</strong> : <em>void</em> |
| public | <strong>unsuspendLogin(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>unsuspendOutgoing(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>updateUserPreference(</strong><em>\string</em> <strong>$score</strong>)</strong> : <em>void</em> |
| public | <strong>valiadateCurrentPtrs(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>validateCurrentDkims(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>validateCurrentSpfs(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>verifyPassword(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelMarket

> Class CpanelMarket Cpanel Market operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>cancelPendingSslCertificate(</strong><em>\string</em> <strong>$provider</strong>, <em>\int</em> <strong>$orderItemId</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>createShoppingCart(</strong><em>\string</em> <strong>$provider</strong>, <em>\string</em> <strong>$accessToken</strong>, <em>mixed</em> <strong>$urlAfterCheckOut</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getAllProducts()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getCertificateStatusDetails(</strong><em>\int</em> <strong>$orderItemId</strong>, <em>\string</em> <strong>$provider</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getLoginUrl(</strong><em>\string</em> <strong>$provider</strong>, <em>mixed</em> <strong>$urlAfterCheckOut</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getPendingSslCertificates(</strong><em>\string</em> <strong>$provider</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getProviderList()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getProviderSpecificDcvConstraints(</strong><em>\string</em> <strong>$provider</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getSslCertificateIfAvailable(</strong><em>\string</em> <strong>$provider</strong>, <em>\int</em> <strong>$orderItemId</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>processSslPendingQueue()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>requestSslCertificates(</strong><em>\string</em> <strong>$accessToken</strong>, <em>\string</em> <strong>$certificate</strong>, <em>\string</em> <strong>$provider</strong>, <em>\string</em> <strong>$identifyVerification</strong>, <em>\string</em> <strong>$urlAfterCheckOut</strong>)</strong> : <em>void</em> |
| public | <strong>setStatusOfPendingQueueItems(</strong><em>\string</em> <strong>$provider</strong>, <em>\int</em> <strong>$orderItemId</strong>, <em>\string</em> <strong>$status</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setUrlAfterCheckout(</strong><em>\string</em> <strong>$provider</strong>, <em>\string</em> <strong>$accessToken</strong>, <em>\int</em> <strong>$orderId</strong>, <em>\string</em> <strong>$urlAfterCheckout</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>validateLoginToken(</strong><em>\string</em> <strong>$provider</strong>, <em>\string</em> <strong>$loginToken</strong>, <em>\string</em> <strong>$urlAfterLogin</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelDirectory

> Class CpanelDirectory Cpanel Directory  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addUser(</strong><em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>configureDirectoryProtection(</strong><em>\string</em> <strong>$dir</strong>, <em>\int</em> <strong>$enabled</strong>, <em>\string</em> <strong>$authname</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>deleteUser(</strong><em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>getIndexing(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>isDirectoryProtected(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>bool</em> |
| public | <strong>listDirectories(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listProtectedDirectories(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listUsers(</strong><em>\string</em> <strong>$dir</strong>)</strong> : <em>void</em> |
| public | <strong>setIndexing(</strong><em>\string</em> <strong>$dir</strong>, <em>\string</em> <strong>$type</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelContactInformation

> Class CpanelContactInformation Cpanel ContactInformation operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>isEnabled()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setEmailAddresses(</strong><em>\string</em> <strong>$address</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>unsetEmailAddresses(</strong><em>\string</em> <strong>$oldAddress</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelWebVhosts

> Class CpanelWebVhosts Cpanel WebVhosts  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>listDomains()</strong> : <em>void</em> |
| public | <strong>listSslCapableDomains()</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelDNS

> Class CpanelDNS Cpanel DNS  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>activateZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$keyId</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>addZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$algoNum</strong>, <em>mixed</em> <strong>$keyType</strong>)</strong> : <em>void</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>deactivateZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>void</em> |
| public | <strong>disableDnssec(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>enableDnssec(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>ensureDomainsResideOnlyLocally(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>exportZoneDnskey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>exportZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>fetchDsRecords(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>hasLocalAuthority(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>importZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$keyType</strong>, <em>\string</em> <strong>$keyData</strong>)</strong> : <em>void</em> |
| public | <strong>listDynamicDomains()</strong> : <em>void</em> |
| public | <strong>lookup(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>massEditZone(</strong><em>\string</em> <strong>$zone</strong>, <em>\string</em> <strong>$serial</strong>)</strong> : <em>void</em> |
| public | <strong>parseZone(</strong><em>\string</em> <strong>$zone</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>recreate(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>void</em> |
| public | <strong>removeZoneKey(</strong><em>\string</em> <strong>$domain</strong>, <em>\int</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>setDescription(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$description</strong>)</strong> : <em>void</em> |
| public | <strong>setNsec3(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$nsec3OptOut</strong>, <em>\int</em> <strong>$nsec3Iterations</strong>, <em>\string</em> <strong>$nsec3Narrow</strong>, <em>\string</em> <strong>$nsec3Salt</strong>)</strong> : <em>void</em> |
| public | <strong>swapIpInZones(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$sourceIp</strong>, <em>\string</em> <strong>$destIp</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>unsetNsec3(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelUserTasks

> Class CpanelUserTasks Cpanel Token operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delete(</strong><em>\string</em> <strong>$taskId</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>Remove items from tasks quene</em> |
| public | <strong>retrieve()</strong> : <em>\CpanelApi\json</em><br /><em>Retrive a list of tasks</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelResourceUsage

> Class CpanelResourceUsage Cpanel resource usage operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getStats(</strong><em>\string</em> <strong>$display</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getUsages()</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelMime

> Class CpanelMime Cpanel Mime  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addHotlink(</strong><em>\string</em> <strong>$urls</strong>, <em>\string</em> <strong>$extensions</strong>, <em>\string</em> <strong>$redirectUrl</strong>, <em>\int</em> <strong>$allowNull</strong>)</strong> : <em>void</em> |
| public | <strong>addRedirect(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$redirect</strong>)</strong> : <em>void</em> |
| public | <strong>deleteHotlink()</strong> : <em>void</em> |
| public | <strong>deleteRedirect(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |
| public | <strong>getRedirect(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>mixed</em> |
| public | <strong>listHotlinks()</strong> : <em>void</em> |
| public | <strong>listRedirects(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelGPG

> Class CpanelGPG Cpanel FTP operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>deleteKeypair(</strong><em>\string</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>exportPublicKey(</strong><em>\string</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>exportSecretKey(</strong><em>\string</em> <strong>$keyId</strong>)</strong> : <em>void</em> |
| public | <strong>generateKey(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>importKey(</strong><em>\string</em> <strong>$keyData</strong>)</strong> : <em>void</em> |
| public | <strong>listPublicKeys()</strong> : <em>void</em> |
| public | <strong>listSecretKeys()</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelBase

> Class CpanelBase Cpanel parent class

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/mixed</em> <strong>$cpanelUser=false</strong>, <em>bool/string</em> <strong>$apiToken=false</strong>, <em>bool/string</em> <strong>$hostUrl=false</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>doEmptyCommand(</strong><em>string</em> <strong>$functionName=`'doEmptyCommand'`</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>Command executer Curl without params</em> |
| public static | <strong>nameResolver(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>string</em><br /><em>Convert Function Camel Case  to underscore-separated</em> |
| protected | <strong>doCommand(</strong><em>array</em> <strong>$command</strong>, <em>array</em> <strong>$params</strong>, <em>string</em> <strong>$method=`'GET'`</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>Command executer Curl</em> |

<hr />

### Class: \CpanelApi\CpanelLocale

> Class CpanelLocale Cpanel Locale  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAttributes()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listLocales()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setLocale(</strong><em>\string</em> <strong>$locale</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelWebDisk

> Class CpanelWebDisk Cpanel WebDisk operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>deleteUser(</strong><em>\string</em> <strong>$user</strong>, <em>\int</em> <strong>$destroy</strong>)</strong> : <em>void</em> |
| public | <strong>setHomedir(</strong><em>\string</em> <strong>$homedir</strong>, <em>\string</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>setPassword(</strong><em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>setPermissions(</strong><em>\string</em> <strong>$perms</strong>, <em>\string</em> <strong>$user</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelVersionControlDeployment

> Class CpanelVersionControlDeployment Cpanel VersionControlDeployment operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>create(</strong><em>\string</em> <strong>$repositoryRoot</strong>)</strong> : <em>mixed</em> |
| public | <strong>createGitRepo(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$repositoryRoot</strong>, <em>\string</em> <strong>$type</strong>)</strong> : <em>mixed</em><br /><em>VersionControl</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$deployId</strong>)</strong> : <em>void</em> |
| public | <strong>deleteGitRepo(</strong><em>\string</em> <strong>$reposotoryRoot</strong>)</strong> : <em>void</em> |
| public | <strong>retrieve()</strong> : <em>void</em> |
| public | <strong>retrieveGitrepos()</strong> : <em>void</em> |
| public | <strong>updateGitRepo(</strong><em>\string</em> <strong>$repositoryRoot</strong>, <em>\string</em> <strong>$branch</strong>, <em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$sourceRepository</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelDomainInfo

> Class CpanelDomainInfo Cpanel domain operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addSubdomain(</strong><em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$rootDomain</strong>)</strong> : <em>void</em> |
| public | <strong>domainData()</strong> : <em>void</em> |
| public | <strong>listDomains()</strong> : <em>\CpanelApi\json</em><br /><em>listDomains List of domains in Cpanel</em> |
| public | <strong>mainDomainBuiltinSubdomainAliases()</strong> : <em>void</em> |
| public | <strong>singleDomainData(</strong><em>\string</em> <strong>$domain</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelQuota

> Class CpanelQuota Cpanel Disk quota operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLocalQuotaInfo()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getQuotaInfo()</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelMysql

> Class CpanelMysql Cpanel MYSQL operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>AddHost(</strong><em>\string</em> <strong>$host</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>addHost</em> |
| public | <strong>addHostNote(</strong><em>\string</em> <strong>$host</strong>, <em>\string</em> <strong>$note</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>addHostNote</em> |
| public | <strong>checkDatabase(</strong><em>\string</em> <strong>$dataBaseName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>checkDatabase</em> |
| public | <strong>createDatabase(</strong><em>\string</em> <strong>$dataBaseName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>createDatabase</em> |
| public | <strong>createUser(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>createUser</em> |
| public | <strong>deleteDataBase(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>deleteDataBase</em> |
| public | <strong>deleteHost(</strong><em>\string</em> <strong>$host</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>deleteHost</em> |
| public | <strong>deleteUser(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>deleteUser</em> |
| public | <strong>dumpDatabaseSchema(</strong><em>\string</em> <strong>$dbName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>dumpDataBaseSchema</em> |
| public | <strong>getHostNotes()</strong> : <em>\CpanelApi\json</em><br /><em>getHostNotes</em> |
| public | <strong>getPrivilegesOndatabase(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$database</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>getPrivilegesOndatabase</em> |
| public | <strong>getRestrictions()</strong> : <em>\CpanelApi\json</em><br /><em>getRestrictions</em> |
| public | <strong>getServerInformation()</strong> : <em>\CpanelApi\json</em><br /><em>getServerInformation</em> |
| public | <strong>listDatabases()</strong> : <em>\CpanelApi\json</em><br /><em>listDatabases</em> |
| public | <strong>listRoutines(</strong><em>\string</em> <strong>$databaseUser</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>listRoutines</em> |
| public | <strong>listUsers()</strong> : <em>void</em> |
| public | <strong>locateServer()</strong> : <em>\CpanelApi\json</em><br /><em>locateServer</em> |
| public | <strong>renameDatabase(</strong><em>\string</em> <strong>$oldName</strong>, <em>\string</em> <strong>$newName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>renameDatabase</em> |
| public | <strong>renameUser(</strong><em>\string</em> <strong>$oldName</strong>, <em>\string</em> <strong>$newName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>renameUser</em> |
| public | <strong>repairDatabase(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>repairDatabase</em> |
| public | <strong>revokeAccessToDatabase(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$database</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>revokeAccessToDatabase</em> |
| public | <strong>setPassword(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>setPassword</em> |
| public | <strong>setPrivilegesOnDatabase(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$database</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>setPrivilegesOnDatabase</em> |
| public | <strong>updatePrivileges()</strong> : <em>\CpanelApi\json</em><br /><em>updatePrivileges</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelIntegration

> Class CpanelIntegration Cpanel Integration operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>fetchUrl(</strong><em>\string</em> <strong>$appName</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>This function returns the URL for an integrated application.</em> |
| public | <strong>parserApi()</strong> : <em>void</em><br /><em>This function reports the first file's URI, relative to the cPanel base directory.</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelFtp

> Class CpanelFtp Cpanel FTP operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addFtp(</strong><em>mixed</em> <strong>$user</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>addFtp Create FTP Account</em> |
| public | <strong>allowsAnonymousFtp()</strong> : <em>\CpanelApi\json</em><br /><em>allowsAnonymousFtp</em> |
| public | <strong>allowsAnonymousFtpIncoming()</strong> : <em>\CpanelApi\json</em><br /><em>allowsAnonymousFtpIncoming</em> |
| public | <strong>deleteFtp(</strong><em>string/\CpanelApi\stirng</em> <strong>$user</strong>, <em>\string</em> <strong>$destroy=`'1'`</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>deleteFtp</em> |
| public | <strong>ftpExists(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>ftpExists</em> |
| public | <strong>getFtpDaemonInfo()</strong> : <em>\CpanelApi\json</em><br /><em>getFtpDaemonInfo</em> |
| public | <strong>getPort()</strong> : <em>\CpanelApi\json</em><br /><em>getPort</em> |
| public | <strong>getQuota(</strong><em>\string</em> <strong>$account</strong>, <em>\string</em> <strong>$domain</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>getQuota</em> |
| public | <strong>getWelcomeMessage()</strong> : <em>\CpanelApi\json</em><br /><em>getWelcomeMessage</em> |
| public | <strong>killSession(</strong><em>\string</em> <strong>$login</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>killSession</em> |
| public | <strong>listFtp()</strong> : <em>\CpanelApi\json</em><br /><em>listFtp</em> |
| public | <strong>listFtpWithDisk()</strong> : <em>\CpanelApi\json</em><br /><em>listFtpWithDisk</em> |
| public | <strong>listSessions()</strong> : <em>void</em><br /><em>listSessions</em> |
| public | <strong>passwd(</strong><em>\string</em> <strong>$pass</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>passwd</em> |
| public | <strong>serverName()</strong> : <em>void</em> |
| public | <strong>setAnonymousFtp(</strong><em>\int</em> <strong>$set</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>setAnonymousFtp</em> |
| public | <strong>setAnonymousFtpIncoming(</strong><em>\int</em> <strong>$set</strong>)</strong> : <em>\CpanelApi\json</em><br /><em>setAnonymousFtpIncoming</em> |
| public | <strong>setHomeDir(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$domain</strong>, <em>\string</em> <strong>$homedir</strong>)</strong> : <em>void</em><br /><em>setHomeDir</em> |
| public | <strong>setQuota(</strong><em>\string</em> <strong>$user</strong>, <em>\int</em> <strong>$quota</strong>)</strong> : <em>void</em><br /><em>setQuota</em> |
| public | <strong>setWelocmeMessage(</strong><em>\string</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>setWelocmeMessage</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelUser

> Class CpanelUser Cpanel User operations

| Visibility | Function |
|:-----------|:---------|

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelTwoFactorAuth

> Class CpanelTwoFactorAuth Cpanel TwoFactorAuth operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>generateUserConfiguration()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getTeamUserConfiguration()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getUserConfiguration()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>removeUserConfiguration()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setUserConfiguration(</strong><em>\CpanelApi\srting</em> <strong>$secret</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelCacheBuster

> Class CpanelCacheBuster Cpanel CacheBuster  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>read()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>update()</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelTeam

> Class CpanelTeam Cpanel team  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addRoles(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$role</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>addTeamUser(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$email</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>cancelExpire(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>editTeamUser(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$addRole</strong>, <em>\string</em> <strong>$email1</strong>, <em>\string</em> <strong>$email2</strong>, <em>\string</em> <strong>$expireReason</strong>, <em>\string</em> <strong>$notes</strong>, <em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$removeRole</strong>, <em>\string</em> <strong>$setExpire</strong>, <em>\string</em> <strong>$setRole</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listTeam()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>passwordResetRequest(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>reinstateTeamUser(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>removeRoles(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$role</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>removeTeamUser(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setContactEmail(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$email1</strong>, <em>\string</em> <strong>$email2</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setExpire(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$expire</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setLocale(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$locale</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setNotes(</strong><em>\CpanelApi\strin</em> <strong>$user</strong>, <em>\string</em> <strong>$notes</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setPassword(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>setRoles(</strong><em>\string</em> <strong>$user</strong>, <em>\string</em> <strong>$roles</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>suspendUser(</strong><em>\string</em> <strong>$user</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelBackup

> Class CpanelBackup Cpanel backup  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>directoryListing(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>fullbackupToFtp(</strong><em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$password</strong>, <em>\string</em> <strong>$host</strong>, <em>\string</em> <strong>$directory</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>fullbackupToHomedir(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$homedir</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>fullbackupToScpWithKey(</strong><em>\string</em> <strong>$host</strong>, <em>\string</em> <strong>$keyName</strong>, <em>\string</em> <strong>$keyPassphrase</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>fullbackupToScpWithPassword(</strong><em>\string</em> <strong>$host</strong>, <em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getUsers()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>listBackups()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>queryFileInfo(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>restoreDatabases(</strong><em>\string</em> <strong>$backup</strong>, <em>\int</em> <strong>$timeout</strong>, <em>\int</em> <strong>$verbose</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>restoreEmailFilters(</strong><em>\string</em> <strong>$backup</strong>, <em>\int</em> <strong>$timeout</strong>, <em>\int</em> <strong>$verbose</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>restoreEmailForwarders(</strong><em>\string</em> <strong>$backup</strong>, <em>\int</em> <strong>$timeout</strong>, <em>\int</em> <strong>$verbose</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>restoreFile(</strong><em>\int</em> <strong>$backupID</strong>, <em>\string</em> <strong>$path</strong>, <em>\int</em> <strong>$overite</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>restoreFiles(</strong><em>\string</em> <strong>$backup</strong>, <em>\string</em> <strong>$directory</strong>, <em>\int</em> <strong>$timeout</strong>, <em>\int</em> <strong>$verbose</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelExternalAuthentication

> Class CpanelIntegration Cpanel ExternalAuthentication operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addAuthnLink(</strong><em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$providerId</strong>, <em>\string</em> <strong>$subjectUniqueIdentifier</strong>, <em>mixed</em> <strong>$preferredUsername</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>configuredModules()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getAuthnLinks()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>hasExternalAuthModulesConfigured()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>removeAuthnLink(</strong><em>\string</em> <strong>$provider</strong>, <em>mixed</em> <strong>$subjectUniqueIdentifier</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelBranding

> Class CpanelBranding Cpanel branding  operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getApplicationInformation(</strong><em>\string</em> <strong>$appKey</strong>)</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getApplications()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getAvailabeApplications()</strong> : <em>\CpanelApi\json</em> |
| public | <strong>getDom(</strong><em>\string</em> <strong>$pageTitle</strong>)</strong> : <em>mixed</em> |
| public | <strong>getInformationForApplications(</strong><em>\string</em> <strong>$docroot</strong>)</strong> : <em>\CpanelApi\json</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

<hr />

### Class: \CpanelApi\CpanelBoxTrapper

> Class CpanelBoxTrapper Cpanel BoxTrapper operations

| Visibility | Function |
|:-----------|:---------|
| public | <strong>blacklistMessages(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$quenefile</strong>)</strong> : <em>void</em> |
| public | <strong>deleteMessages(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$quenefile</strong>)</strong> : <em>void</em> |
| public | <strong>deliverMessages(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$quenefile</strong>)</strong> : <em>void</em> |
| public | <strong>getAllowlist(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getBlocklist(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getConfiguration(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getEmailTemplate(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$template</strong>)</strong> : <em>mixed</em> |
| public | <strong>getForwarders(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getIgnorelist(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>getLog(</strong><em>\string</em> <strong>$email</strong>, <em>\int</em> <strong>$date</strong>)</strong> : <em>mixed</em> |
| public | <strong>getMessage(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$quenefile</strong>)</strong> : <em>mixed</em> |
| public | <strong>getStatus(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>mixed</em> |
| public | <strong>ignoreMessages(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$quenefile</strong>)</strong> : <em>void</em> |
| public | <strong>listEmailTemplates()</strong> : <em>void</em> |
| public | <strong>listQuenedMessages(</strong><em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>processMessages(</strong><em>\string</em> <strong>$quenefile</strong>, <em>\string</em> <strong>$action</strong>)</strong> : <em>void</em> |
| public | <strong>resetEmailTemplate(</strong><em>\string</em> <strong>$template</strong>, <em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |
| public | <strong>saveConfiguration(</strong><em>\string</em> <strong>$email</strong>, <em>\int</em> <strong>$enableAutoWhitelist</strong>, <em>\string</em> <strong>$fromAddresses</strong>, <em>\int</em> <strong>$queneDays</strong>, <em>\int</em> <strong>$whitelistByAssociation</strong>, <em>\string</em> <strong>$fromName</strong>, <em>\int</em> <strong>$spamScore</strong>)</strong> : <em>void</em> |
| public | <strong>saveEmailTemplate(</strong><em>\string</em> <strong>$contents</strong>, <em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$template</strong>)</strong> : <em>void</em> |
| public | <strong>setAllowlist(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$rules</strong>)</strong> : <em>void</em> |
| public | <strong>setBlocklist(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$rules</strong>)</strong> : <em>void</em> |
| public | <strong>setForwarders(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$forwarder</strong>)</strong> : <em>void</em> |
| public | <strong>setIgnorelist(</strong><em>\string</em> <strong>$email</strong>, <em>\string</em> <strong>$rules</strong>)</strong> : <em>void</em> |
| public | <strong>setStatus(</strong><em>\string</em> <strong>$email</strong>, <em>\int</em> <strong>$enabled</strong>)</strong> : <em>void</em> |
| public | <strong>whitelistMessages(</strong><em>\string</em> <strong>$quenefile</strong>, <em>\string</em> <strong>$email</strong>)</strong> : <em>void</em> |

*This class extends [\CpanelApi\CpanelBase](#class-cpanelapicpanelbase)*

