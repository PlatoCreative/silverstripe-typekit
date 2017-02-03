<?php namespace PlatoCreative\SilverStripe\TypeKit\Extensions;

use Requirements;
use Config;

/**
 * Include the TinyMCE TypeKit plugin with the CMS configured TypeKit ID.
 */
class LeftAndMainRequirementsExtension extends \LeftAndMainExtension
{
    public function init()
    {
        $typekitID = Config::inst()->get('TypeKit', 'typekitID');
        if (isset($typekitID)) {
            Requirements::javascriptTemplate(
                TYPEKIT_DIR . '/assets/js/tinymce.typekit.js',
                array(
                    'TypeKitID' => $typekitID
                )
            );
        }
    }
}
