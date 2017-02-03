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
            return "<script type=\"text/javascript\" src=\"//use.typekit.net/{$typekitID}.js\"></script>
                <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>";
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
