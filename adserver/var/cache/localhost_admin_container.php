<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class ReviveAdserverCachedContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'filesystem' => 'getFilesystemService',
            'html5.zip.manager' => 'getHtml5_Zip_ManagerService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'filesystem.adapter.ftp' => true,
            'filesystem.adapter.local' => true,
            'html5.parser.adobe_edge' => true,
            'html5.parser.meta' => true,
        ];
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \League\Flysystem\Filesystem(new \League\Flysystem\Adapter\Local('C:\\xampp\\htdocs\\UNA\\adserver\\www\\images', 0));
    }

    /**
     * Gets the public 'html5.zip.manager' shared service.
     *
     * @return \RV\Manager\Html5ZipManager
     */
    protected function getHtml5_Zip_ManagerService()
    {
        $this->services['html5.zip.manager'] = $instance = new \RV\Manager\Html5ZipManager(($this->services['filesystem'] ?? $this->getFilesystemService()));

        $instance->addParser(new \RV\Parser\Html5\MetaParser(), 0);
        $instance->addParser(new \RV\Parser\Html5\AdobeEdgeParser(), 5);

        return $instance;
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'openads.installed' => '1',
            'openads.requireSSL' => '',
            'openads.sslPort' => '443',
            'ui.enabled' => '1',
            'ui.applicationName' => '',
            'ui.headerFilePath' => '',
            'ui.footerFilePath' => '',
            'ui.logoFilePath' => '',
            'ui.headerForegroundColor' => '',
            'ui.headerBackgroundColor' => '',
            'ui.headerActiveTabColor' => '',
            'ui.headerTextColor' => '',
            'ui.gzipCompression' => '1',
            'ui.supportLink' => '',
            'ui.combineAssets' => '1',
            'ui.dashboardEnabled' => '1',
            'ui.hideNavigator' => '',
            'ui.zoneLinkingStatistics' => '1',
            'ui.disableDirectSelection' => '1',
            'database.type' => 'mysqli',
            'database.host' => 'localhost',
            'database.socket' => '',
            'database.port' => '3306',
            'database.username' => 'root',
            'database.password' => '',
            'database.name' => 'una_db',
            'database.persistent' => '',
            'database.protocol' => 'tcp',
            'database.compress' => '',
            'database.ssl' => '',
            'database.capath' => '',
            'database.ca' => '',
            'databaseCharset.checkComplete' => '1',
            'databaseCharset.clientCharset' => '',
            'databaseMysql.statisticsSortBufferSize' => '',
            'databasePgsql.schema' => '',
            'webpath.admin' => 'localhost/UNA/adserver/www/admin',
            'webpath.delivery' => 'localhost/UNA/adserver/www/delivery',
            'webpath.deliverySSL' => 'localhost/UNA/adserver/www/delivery',
            'webpath.images' => 'localhost/UNA/adserver/www/images',
            'webpath.imagesSSL' => 'localhost/UNA/adserver/www/images',
            'file.asyncjs' => 'asyncjs.php',
            'file.asyncjsjs' => 'async.js',
            'file.asyncspc' => 'asyncspc.php',
            'file.click' => 'ck.php',
            'file.signedClick' => 'cl.php',
            'file.conversionvars' => 'tv.php',
            'file.content' => 'ac.php',
            'file.conversion' => 'ti.php',
            'file.conversionjs' => 'tjs.php',
            'file.frame' => 'afr.php',
            'file.image' => 'ai.php',
            'file.js' => 'ajs.php',
            'file.layer' => 'al.php',
            'file.log' => 'lg.php',
            'file.popup' => 'apu.php',
            'file.view' => 'avw.php',
            'file.xmlrpc' => 'axmlrpc.php',
            'file.local' => 'alocal.php',
            'file.frontcontroller' => 'fc.php',
            'file.singlepagecall' => 'spc.php',
            'file.spcjs' => 'spcjs.php',
            'file.xmlrest' => 'ax.php',
            'store.mode' => '0',
            'store.webDir' => 'C:\\xampp\\htdocs\\UNA\\adserver\\www\\images',
            'store.ftpHost' => '',
            'store.ftpPath' => '',
            'store.ftpUsername' => '',
            'store.ftpPassword' => '',
            'store.ftpPassive' => '',
            'allowedBanners.sql' => '1',
            'allowedBanners.web' => '1',
            'allowedBanners.url' => '1',
            'allowedBanners.html' => '1',
            'allowedBanners.text' => '1',
            'allowedBanners.video' => '1',
            'delivery.cacheExpire' => '1200',
            'delivery.cacheStorePlugin' => 'deliveryCacheStore:oxCacheFile:oxCacheFile',
            'delivery.cachePath' => '',
            'delivery.acls' => '1',
            'delivery.aclsDirectSelection' => '1',
            'delivery.obfuscate' => '',
            'delivery.ctDelimiter' => '__',
            'delivery.chDelimiter' => ',',
            'delivery.keywords' => '',
            'delivery.cgiForceStatusHeader' => '',
            'delivery.clicktracking' => '',
            'delivery.ecpmSelectionRate' => '0.9',
            'delivery.enableControlOnPureCPM' => '1',
            'delivery.assetClientCacheExpire' => '3600',
            'delivery.secret' => 'Zd+9Msxx1C10JJxfTe9dNFPLjaQLWY7Hx7GSXRtHvsU=',
            'delivery.clickUrlValidity' => '0',
            'delivery.relAttribute' => 'noopener nofollow',
            'defaultBanner.invalidZoneHtmlBanner' => '',
            'defaultBanner.suspendedAccountHtmlBanner' => '',
            'defaultBanner.inactiveAccountHtmlBanner' => '',
            'p3p.policies' => '1',
            'p3p.compactPolicy' => 'CUR ADM OUR NOR STA NID',
            'p3p.policyLocation' => '',
            'privacy.disableViewerId' => '1',
            'privacy.anonymiseIp' => '1',
            'graphs.ttfDirectory' => '',
            'graphs.ttfName' => '',
            'logging.adRequests' => '',
            'logging.adImpressions' => '1',
            'logging.adClicks' => '1',
            'logging.trackerImpressions' => '1',
            'logging.reverseLookup' => '',
            'logging.proxyLookup' => '1',
            'logging.defaultImpressionConnectionWindow' => '',
            'logging.defaultClickConnectionWindow' => '',
            'logging.ignoreHosts' => '',
            'logging.ignoreUserAgents' => '',
            'logging.enforceUserAgents' => '',
            'logging.blockAdClicksWindow' => '0',
            'logging.blockInactiveBanners' => '1',
            'maintenance.autoMaintenance' => '1',
            'maintenance.timeLimitScripts' => '1800',
            'maintenance.operationInterval' => '60',
            'maintenance.blockAdImpressions' => '0',
            'maintenance.blockAdClicks' => '0',
            'maintenance.channelForecasting' => '',
            'maintenance.pruneCompletedCampaignsSummaryData' => '',
            'maintenance.pruneDataTables' => '1',
            'maintenance.ecpmCampaignLevels' => '9|8|7|6',
            'priority.instantUpdate' => '1',
            'priority.intentionalOverdelivery' => '0',
            'priority.defaultClickRatio' => '0.005',
            'priority.defaultConversionRatio' => '0.0001',
            'priority.randmax' => '2147483647',
            'performanceStatistics.defaultImpressionsThreshold' => '10000',
            'performanceStatistics.defaultDaysIntervalThreshold' => '30',
            'table.prefix' => 'rv_',
            'table.type' => 'MYISAM',
            'table.account_preference_assoc' => 'account_preference_assoc',
            'table.account_user_assoc' => 'account_user_assoc',
            'table.account_user_permission_assoc' => 'account_user_permission_assoc',
            'table.accounts' => 'accounts',
            'table.acls' => 'acls',
            'table.acls_channel' => 'acls_channel',
            'table.ad_category_assoc' => 'ad_category_assoc',
            'table.ad_zone_assoc' => 'ad_zone_assoc',
            'table.affiliates' => 'affiliates',
            'table.affiliates_extra' => 'affiliates_extra',
            'table.agency' => 'agency',
            'table.application_variable' => 'application_variable',
            'table.audit' => 'audit',
            'table.banners' => 'banners',
            'table.campaigns' => 'campaigns',
            'table.campaigns_trackers' => 'campaigns_trackers',
            'table.category' => 'category',
            'table.channel' => 'channel',
            'table.clients' => 'clients',
            'table.data_intermediate_ad' => 'data_intermediate_ad',
            'table.data_intermediate_ad_connection' => 'data_intermediate_ad_connection',
            'table.data_intermediate_ad_variable_value' => 'data_intermediate_ad_variable_value',
            'table.data_raw_ad_click' => 'data_raw_ad_click',
            'table.data_raw_ad_impression' => 'data_raw_ad_impression',
            'table.data_raw_ad_request' => 'data_raw_ad_request',
            'table.data_raw_tracker_impression' => 'data_raw_tracker_impression',
            'table.data_raw_tracker_variable_value' => 'data_raw_tracker_variable_value',
            'table.data_summary_ad_hourly' => 'data_summary_ad_hourly',
            'table.data_summary_ad_zone_assoc' => 'data_summary_ad_zone_assoc',
            'table.data_summary_channel_daily' => 'data_summary_channel_daily',
            'table.data_summary_zone_impression_history' => 'data_summary_zone_impression_history',
            'table.images' => 'images',
            'table.log_maintenance_forecasting' => 'log_maintenance_forecasting',
            'table.log_maintenance_priority' => 'log_maintenance_priority',
            'table.log_maintenance_statistics' => 'log_maintenance_statistics',
            'table.password_recovery' => 'password_recovery',
            'table.placement_zone_assoc' => 'placement_zone_assoc',
            'table.preferences' => 'preferences',
            'table.session' => 'session',
            'table.targetstats' => 'targetstats',
            'table.trackers' => 'trackers',
            'table.tracker_append' => 'tracker_append',
            'table.userlog' => 'userlog',
            'table.users' => 'users',
            'table.variables' => 'variables',
            'table.variable_publisher' => 'variable_publisher',
            'table.zones' => 'zones',
            'email.logOutgoing' => '1',
            'email.headers' => '',
            'email.qmailPatch' => '',
            'email.fromName' => '',
            'email.fromAddress' => 'hiroakimorimoto0107@gmail.com',
            'email.fromCompany' => '',
            'email.useManagerDetails' => '',
            'log.enabled' => '1',
            'log.methodNames' => '',
            'log.lineNumbers' => '',
            'log.type' => 'file',
            'log.name' => 'debug.log',
            'log.priority' => '6',
            'log.ident' => 'OX',
            'log.paramsUsername' => '',
            'log.paramsPassword' => '',
            'log.fileMode' => '0644',
            'deliveryLog.enabled' => '',
            'deliveryLog.name' => 'delivery.log',
            'deliveryLog.fileMode' => '0644',
            'deliveryLog.priority' => '6',
            'cookie.permCookieSeconds' => '31536000',
            'cookie.maxCookieSize' => '2048',
            'cookie.domain' => '',
            'cookie.viewerIdDomain' => '',
            'debug.logfile' => '',
            'debug.production' => '1',
            'debug.sendErrorEmails' => '',
            'debug.emailSubject' => 'Error from Revive Adserver',
            'debug.email' => 'email@example.com',
            'debug.emailAdminThreshold' => '3',
            'debug.errorOverride' => '1',
            'debug.showBacktrace' => '',
            'debug.disableSendEmails' => '',
            'var.prefix' => 'OA_',
            'var.cookieTest' => 'ct',
            'var.cacheBuster' => 'cb',
            'var.channel' => 'source',
            'var.dest' => 'dest',
            'var.signature' => 'sig',
            'var.timestamp' => 'ts',
            'var.logClick' => 'log',
            'var.n' => 'n',
            'var.params' => 'oaparams',
            'var.viewerId' => 'OAID',
            'var.viewerGeo' => 'OAGEO',
            'var.campaignId' => 'campaignid',
            'var.adId' => 'bannerid',
            'var.creativeId' => 'cid',
            'var.zoneId' => 'zoneid',
            'var.blockAd' => 'OABLOCK',
            'var.capAd' => 'OACAP',
            'var.sessionCapAd' => 'OASCAP',
            'var.blockCampaign' => 'OACBLOCK',
            'var.capCampaign' => 'OACCAP',
            'var.sessionCapCampaign' => 'OASCCAP',
            'var.blockZone' => 'OAZBLOCK',
            'var.capZone' => 'OAZCAP',
            'var.sessionCapZone' => 'OASZCAP',
            'var.vars' => 'OAVARS',
            'var.trackonly' => 'trackonly',
            'var.openads' => 'openads',
            'var.lastView' => 'OXLIA',
            'var.lastClick' => 'OXLCA',
            'var.blockLoggingClick' => 'OXBLC',
            'var.fallBack' => 'oxfb',
            'var.trace' => 'OXTR',
            'var.product' => 'revive',
            'lb.enabled' => '',
            'lb.type' => 'mysql',
            'lb.host' => 'localhost',
            'lb.port' => '3306',
            'lb.username' => '',
            'lb.password' => '',
            'lb.name' => '',
            'lb.persistent' => '',
            'sync.checkForUpdates' => '1',
            'sync.shareStack' => '1',
            'oacSync.protocol' => 'https',
            'oacSync.host' => 'sync.revive-adserver.com',
            'oacSync.path' => '/xmlrpc.php',
            'oacSync.httpPort' => '80',
            'oacSync.httpsPort' => '443',
            'authentication.type' => 'internal',
            'authentication.deleteUnverifiedUsersAfter' => '2419200',
            'geotargeting.type' => '',
            'geotargeting.showUnavailable' => '',
            'pluginPaths.packages' => '/plugins/etc/',
            'pluginPaths.plugins' => '/plugins/',
            'pluginPaths.admin' => '/www/admin/plugins/',
            'pluginPaths.var' => '/var/plugins/',
            'pluginSettings.enableOnInstall' => '1',
            'pluginSettings.useMergedFunctions' => '1',
            'plugins.openXBannerTypes' => '1',
            'plugins.openXDeliveryLimitations' => '1',
            'plugins.openXReports' => '1',
            'plugins.openXDeliveryCacheStore' => '1',
            'plugins.openXInvocationTags' => '1',
            'plugins.openXDeliveryLog' => '1',
            'plugins.openXVideoAds' => '1',
            'plugins.reviveMaxMindGeoIP2' => '1',
            'pluginGroupComponents.oxHtml' => '1',
            'pluginGroupComponents.oxText' => '1',
            'pluginGroupComponents.Client' => '1',
            'pluginGroupComponents.Geo' => '1',
            'pluginGroupComponents.Site' => '1',
            'pluginGroupComponents.Time' => '1',
            'pluginGroupComponents.oxReportsStandard' => '1',
            'pluginGroupComponents.oxReportsAdmin' => '1',
            'pluginGroupComponents.oxCacheFile' => '1',
            'pluginGroupComponents.oxMemcached' => '1',
            'pluginGroupComponents.oxInvocationTags' => '1',
            'pluginGroupComponents.oxDeliveryDataPrepare' => '1',
            'pluginGroupComponents.oxLogClick' => '1',
            'pluginGroupComponents.oxLogConversion' => '1',
            'pluginGroupComponents.oxLogImpression' => '1',
            'pluginGroupComponents.oxLogRequest' => '1',
            'pluginGroupComponents.vastInlineBannerTypeHtml' => '1',
            'pluginGroupComponents.vastOverlayBannerTypeHtml' => '1',
            'pluginGroupComponents.oxLogVast' => '1',
            'pluginGroupComponents.vastServeVideoPlayer' => '1',
            'pluginGroupComponents.videoReport' => '1',
            'pluginGroupComponents.rvMaxMindGeoIP2' => '1',
            'pluginGroupComponents.rvMaxMindGeoIP2Maintenance' => '1',
            'audit.enabled' => '1',
            'audit.enabledForZoneLinking' => '',
            'security.passwordMinLength' => '12',
            'Client.sniff' => '1',
            'deliveryHooks.postInit' => 'deliveryLimitations:Client:initClientData',
            'deliveryHooks.cacheStore' => 'deliveryCacheStore:oxCacheFile:oxCacheFile|deliveryCacheStore:oxMemcached:oxMemcached',
            'deliveryHooks.cacheRetrieve' => 'deliveryCacheStore:oxCacheFile:oxCacheFile|deliveryCacheStore:oxMemcached:oxMemcached',
            'deliveryHooks.preLog' => 'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon|deliveryDataPrepare:oxDeliveryDataPrepare:dataPageInfo|deliveryDataPrepare:oxDeliveryDataPrepare:dataUserAgent',
            'deliveryHooks.logClick' => 'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon|deliveryLog:oxLogClick:logClick',
            'deliveryHooks.logConversion' => 'deliveryLog:oxLogConversion:logConversion',
            'deliveryHooks.logConversionVariable' => 'deliveryLog:oxLogConversion:logConversionVariable',
            'deliveryHooks.logImpression' => 'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon|deliveryLog:oxLogImpression:logImpression',
            'deliveryHooks.logRequest' => 'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon|deliveryLog:oxLogRequest:logRequest',
            'deliveryHooks.logImpressionVast' => 'deliveryLog:oxLogVast:logImpressionVast',
            'oxCacheFile.cachePath' => '',
            'oxMemcached.memcachedServers' => '',
            'oxMemcached.memcachedExpireTime' => '',
            'oxInvocationTags.isAllowedAsync' => '1',
            'oxInvocationTags.isAllowedAdjs' => '1',
            'oxInvocationTags.isAllowedAdframe' => '1',
            'oxInvocationTags.isAllowedAdlayer' => '1',
            'oxInvocationTags.isAllowedAdview' => '0',
            'oxInvocationTags.isAllowedAdviewnocookies' => '1',
            'oxInvocationTags.isAllowedPopup' => '0',
            'vastOverlayBannerTypeHtml.isVastOverlayAsTextEnabled' => '1',
            'vastOverlayBannerTypeHtml.isVastOverlayAsImageEnabled' => '1',
            'vastOverlayBannerTypeHtml.isVastOverlayAsHtmlEnabled' => '1',
            'vastServeVideoPlayer.isAutoPlayOfVideoInOpenXAdminToolEnabled' => '0',
            'rvMaxMindGeoIP2.mmdb_paths' => '',
            'rvMaxMindGeoIP2.license_key' => '',
        ];
    }
}
