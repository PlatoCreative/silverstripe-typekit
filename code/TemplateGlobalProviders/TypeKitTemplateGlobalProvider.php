<?php namespace PlatoCreative\SilverStripe\TypeKit\TemplateGlobalProvider;

use Config;

/**
 * Provide $TypeKit global template variable for inserting TypeKit javascript.
 */
class TypeKitTemplateGlobalProvider implements \TemplateGlobalProvider
{
    public static function get_template_global_variables()
    {
        return array(
            'TypeKit' => array(
                'method'  => 'getTypeKitScript',
                'casting' => 'HTMLText'
            ),
            'TypeKitID' => array(
                'method'  => 'getTypeKitID',
                'casting' => 'Text'
            )
        );
    }

    public static function getTypeKitScript()
    {
        $typekitID = Config::inst()->get('TypeKit', 'typekitID');
        if (isset($typekitID)) {
            return "<link rel=\"stylesheet\" href=\"https://use.typekit.net/{$typekitID}.css\">";
        }
    }

    public static function getTypeKitID()
    {
        $typekitID = Config::inst()->get('TypeKit', 'typekitID');
        if (isset($typekitID)) {
            return $typekitID;
        }
    }
}
