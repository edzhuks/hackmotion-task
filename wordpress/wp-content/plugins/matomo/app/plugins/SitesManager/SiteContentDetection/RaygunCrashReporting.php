<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
declare (strict_types=1);
namespace Piwik\Plugins\SitesManager\SiteContentDetection;

class RaygunCrashReporting extends \Piwik\Plugins\SitesManager\SiteContentDetection\SiteContentDetectionAbstract
{
    public static function getName() : string
    {
        return 'Raygun Crash Reporting';
    }
    public static function getContentType() : int
    {
        return self::TYPE_JS_CRASH_ANALYTICS;
    }
    public function isDetected(?string $data = null, ?array $headers = null) : bool
    {
        return false !== stripos($data, 'raygun.min.js') && 1 === preg_match('/enableCrashReporting["\', ]+true/i', $data);
    }
}
