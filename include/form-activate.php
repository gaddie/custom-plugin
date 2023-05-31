<?php
/**
 * @package customFormPlugin
 */


class CustomFormPluginActivate {
    public static function activate() {
        flush_rewrite_rules();
    }
}