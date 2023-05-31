<?php
/**
 * @package customFormPlugin
 */


class CustomFormPluginDeactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}