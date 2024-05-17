<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba8cd9875988ddc0f8426e609db814f8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'ICal' => 
            array (
                0 => __DIR__ . '/..' . '/johngrogg/ics-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Calendar_Plus' => __DIR__ . '/../..' . '/includes/class-calendar-plus.php',
        'Calendar_Plus_Accessible_Calendar' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-accessible-calendar.php',
        'Calendar_Plus_Activator' => __DIR__ . '/../..' . '/includes/class-calendar-plus-activator.php',
        'Calendar_Plus_Admin' => __DIR__ . '/../..' . '/admin/class-calendar-plus-admin.php',
        'Calendar_Plus_Admin_Calendar_Page' => __DIR__ . '/../..' . '/admin/pages/class-calendar-page.php',
        'Calendar_Plus_Admin_Importer_Page' => __DIR__ . '/../..' . '/admin/pages/class-importer-page.php',
        'Calendar_Plus_Admin_Importers' => __DIR__ . '/../..' . '/admin/class-calendar-plus-admin-importers.php',
        'Calendar_Plus_Admin_Settings_Page' => __DIR__ . '/../..' . '/admin/pages/class-settings-page.php',
        'Calendar_Plus_Blocks' => __DIR__ . '/../..' . '/includes/class-calendar-plus-blocks.php',
        'Calendar_Plus_Cache' => __DIR__ . '/../..' . '/includes/class-calendar-plus-cache.php',
        'Calendar_Plus_Calendar' => __DIR__ . '/../..' . '/includes/calendar/class-calendar-plus-calendar.php',
        'Calendar_Plus_Calendar_Button' => __DIR__ . '/../..' . '/includes/calendar-buttons/abstract-calendar-plus-calendar-button.php',
        'Calendar_Plus_Calendar_Cell' => __DIR__ . '/../..' . '/includes/calendar/class-calendar-plus-calendar.php',
        'Calendar_Plus_Calendar_Renderer' => __DIR__ . '/../..' . '/includes/calendar/class-calendar-plus-calendar-renderer.php',
        'Calendar_Plus_Calendar_Shortcode' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-calendar-shortcode.php',
        'Calendar_Plus_Calendar_Shortcode_Old' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-calendar-shortcode-old.php',
        'Calendar_Plus_Calendar_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-calendar-widget.php',
        'Calendar_Plus_Date_Shortcode' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-date-shortcode.php',
        'Calendar_Plus_Dates_Generator' => __DIR__ . '/../..' . '/includes/class-calendar-plus-dates-generator.php',
        'Calendar_Plus_Deactivator' => __DIR__ . '/../..' . '/includes/class-calendar-plus-deactivator.php',
        'Calendar_Plus_Event' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event.php',
        'Calendar_Plus_Event_Categories_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-event-categories-widget.php',
        'Calendar_Plus_Event_Color_Metabox' => __DIR__ . '/../..' . '/admin/meta-boxes/event/class-event-color-meta-box.php',
        'Calendar_Plus_Event_Details_Metabox' => __DIR__ . '/../..' . '/admin/meta-boxes/event/class-event-details-meta-box.php',
        'Calendar_Plus_Event_Location_Metabox' => __DIR__ . '/../..' . '/admin/meta-boxes/event/class-event-location-meta-box.php',
        'Calendar_Plus_Event_Rules_Dates_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Datespan_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Every_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Exclusions_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Formatter_Interface' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Standard_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Rules_Times_Formatter' => __DIR__ . '/../..' . '/includes/class-calendar-plus-event-rules-formatter.php',
        'Calendar_Plus_Event_Shortcode' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-event-shortcode.php',
        'Calendar_Plus_Event_Status_Metabox' => __DIR__ . '/../..' . '/admin/meta-boxes/event/class-event-status-meta-box.php',
        'Calendar_Plus_Events_By_Category_Shortcode' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-events-by-cat-shortcode.php',
        'Calendar_Plus_Events_List_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-events-list-widget.php',
        'Calendar_Plus_Export_CSV' => __DIR__ . '/../..' . '/includes/class-calendar-plus-export-csv.php',
        'Calendar_Plus_External_Calendar_Button' => __DIR__ . '/../..' . '/includes/calendar-buttons/interface-calendar-plus-external-calendar-button.php',
        'Calendar_Plus_GCal_Calendar_Button' => __DIR__ . '/../..' . '/includes/calendar-buttons/class-calendar-plus-gcal-calendar-button.php',
        'Calendar_Plus_Google_Calendar' => __DIR__ . '/../..' . '/includes/class-calendar-plus-gcal.php',
        'Calendar_Plus_Google_Calendar_API_Calendars_Endpoint' => __DIR__ . '/../..' . '/includes/gcal/endpoints/class-calendar-plus-gcal-api-calendars-endpoint.php',
        'Calendar_Plus_Google_Calendar_API_Endpoint' => __DIR__ . '/../..' . '/includes/gcal/class-calendar-plus-gcal-api-endpoint.php',
        'Calendar_Plus_Google_Calendar_API_Events_Endpoint' => __DIR__ . '/../..' . '/includes/gcal/endpoints/class-calendar-plus-gcal-api-events-endpoint.php',
        'Calendar_Plus_Google_Calendar_API_Manager' => __DIR__ . '/../..' . '/includes/gcal/class-calendar-plus-gcal-api-manager.php',
        'Calendar_Plus_Google_Calendar_Logger' => __DIR__ . '/../..' . '/includes/gcal/class-calendar-plus-gcal-logger.php',
        'Calendar_Plus_Location' => __DIR__ . '/../..' . '/includes/class-calendar-plus-location.php',
        'Calendar_Plus_Location_Location_Metabox' => __DIR__ . '/../..' . '/admin/meta-boxes/location/class-location-location-meta-box.php',
        'Calendar_Plus_Location_Shortcode' => __DIR__ . '/../..' . '/includes/shortcodes/class-calendar-plus-location-shortcode.php',
        'Calendar_Plus_Meta_Box' => __DIR__ . '/../..' . '/admin/meta-boxes/abstract-meta-box.php',
        'Calendar_Plus_Model' => __DIR__ . '/../..' . '/includes/class-calendar-plus-model.php',
        'Calendar_Plus_Modules_Loader' => __DIR__ . '/../..' . '/modules/class-calendar-plus-modules-loader.php',
        'Calendar_Plus_Public' => __DIR__ . '/../..' . '/public/class-calendar-plus-public.php',
        'Calendar_Plus_Query' => __DIR__ . '/../..' . '/includes/class-calendar-plus-query.php',
        'Calendar_Plus_REST_API' => __DIR__ . '/../..' . '/includes/class-calendar-plus-rest-api.php',
        'Calendar_Plus_REST_Controller' => __DIR__ . '/../..' . '/includes/rest-api/abstract-calendar-plus-rest-controller.php',
        'Calendar_Plus_REST_Endpoints_Events' => __DIR__ . '/../..' . '/includes/rest-api/endpoints/class-calendar-plus-rest-endpoints-event.php',
        'Calendar_Plus_REST_Exception' => __DIR__ . '/../..' . '/includes/rest-api/class-calendar-plus-rest-exception.php',
        'Calendar_Plus_Search_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-search-widget.php',
        'Calendar_Plus_Settings' => __DIR__ . '/../..' . '/includes/class-calendar-plus-settings.php',
        'Calendar_Plus_Settings_Fields' => __DIR__ . '/../..' . '/admin/settings-fields.php',
        'Calendar_Plus_Sidebar' => __DIR__ . '/../..' . '/includes/class-calendar-plus-sidebar.php',
        'Calendar_Plus_Taxonomies' => __DIR__ . '/../..' . '/includes/class-calendar-plus-taxonomies.php',
        'Calendar_Plus_Template_Loader' => __DIR__ . '/../..' . '/public/class-calendar-plus-template-loader.php',
        'Calendar_Plus_The_Events_Calendar_Importer' => __DIR__ . '/../..' . '/admin/importers/class-the-events-calendar-importer.php',
        'Calendar_Plus_This_Month_Events_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-this-month-events-widget.php',
        'Calendar_Plus_This_Week_Events_Widget' => __DIR__ . '/../..' . '/includes/widgets/class-calendar-plus-this-week-events-widget.php',
        'Calendar_Plus_Timespan' => __DIR__ . '/../..' . '/includes/calendar/class-calendar-plus-calendar.php',
        'Calendar_Plus_Upgrader' => __DIR__ . '/../..' . '/includes/class-calendar-plus-upgrader.php',
        'Calendar_Plus_i18n' => __DIR__ . '/../..' . '/includes/class-calendar-plus-i18n.php',
        'Calendar_Plus_iCal_Calendar_Button' => __DIR__ . '/../..' . '/includes/calendar-buttons/class-calendar-plus-ical-calendar-button.php',
        'Calendar_Plus_iCal_Generator' => __DIR__ . '/../..' . '/includes/ical/class-calendar-plus-ical-generator.php',
        'Calendar_Plus_iCal_Parser' => __DIR__ . '/../..' . '/includes/ical/class-calendar-plus-ical-parser.php',
        'Calendar_Plus_iCal_Sync' => __DIR__ . '/../..' . '/includes/ical/class-calendar-plus-ical-sync.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mexitek\\PHPColors\\Color' => __DIR__ . '/..' . '/mexitek/phpcolors/src/Mexitek/PHPColors/Color.php',
        'WXR_Parser' => __DIR__ . '/../..' . '/admin/importers/parsers.php',
        'WXR_Parser_Regex' => __DIR__ . '/../..' . '/admin/importers/parsers.php',
        'WXR_Parser_SimpleXML' => __DIR__ . '/../..' . '/admin/importers/parsers.php',
        'WXR_Parser_XML' => __DIR__ . '/../..' . '/admin/importers/parsers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba8cd9875988ddc0f8426e609db814f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba8cd9875988ddc0f8426e609db814f8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitba8cd9875988ddc0f8426e609db814f8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitba8cd9875988ddc0f8426e609db814f8::$classMap;

        }, null, ClassLoader::class);
    }
}
