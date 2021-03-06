<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc72b64e84efd76b3cb10d2a10a9768
{
    public static $files = array (
        'fca581ae5268210490253d58378748c5' => __DIR__ . '/../..' . '/includes/functions.php',
        '59b5ebb4886cd7eeaf4afcc7f7bdfcdd' => __DIR__ . '/../..' . '/includes/deprecated-functions.php',
        'd26f3384f491dc697dcc189393343bc3' => __DIR__ . '/../..' . '/includes/forms/functions.php',
        '5a75ca1db309a7972c23644d951fa1be' => __DIR__ . '/../..' . '/includes/forms/admin-functions.php',
        '90c3516593b5de6b5d4528b70e2399dd' => __DIR__ . '/../..' . '/includes/integrations/functions.php',
        '1961896a7f482d8affe08226795bf674' => __DIR__ . '/../..' . '/includes/default-actions.php',
        'cb296d991e3145f10320ab99c1b9ed05' => __DIR__ . '/../..' . '/includes/default-filters.php',
    );

    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Avangemail_API' => __DIR__ . '/../..' . '/includes/api/class-api.php',
        'Avangemail_API_Connection_Exception' => __DIR__ . '/../..' . '/includes/api/class-connection-exception.php',
        'Avangemail_API_Exception' => __DIR__ . '/../..' . '/includes/api/class-exception.php',
        'Avangemail_API_Resource_Not_Found_Exception' => __DIR__ . '/../..' . '/includes/api/class-resource-not-found-exception.php',
        'Avangemail_API' => __DIR__ . '/../..' . '/includes/api/class-api.php',
        'Avangemail_API_Client' => __DIR__ . '/../..' . '/includes/api/class-api-client.php',
        'Avangemail_Admin' => __DIR__ . '/../..' . '/includes/admin/class-admin.php',
        'Avangemail_Admin_Ads' => __DIR__ . '/../..' . '/includes/admin/class-ads.php',
        'Avangemail_Admin_Ajax' => __DIR__ . '/../..' . '/includes/admin/class-admin-ajax.php',
        'Avangemail_Admin_Messages' => __DIR__ . '/../..' . '/includes/admin/class-admin-messages.php',
        'Avangemail_Admin_Review_Notice' => __DIR__ . '/../..' . '/includes/admin/class-review-notice.php',
        'Avangemail_Admin_Texts' => __DIR__ . '/../..' . '/includes/admin/class-admin-texts.php',
        'Avangemail_Admin_Tools' => __DIR__ . '/../..' . '/includes/admin/class-admin-tools.php',
        'Avangemail_AffiliateWP_Integration' => __DIR__ . '/../..' . '/integrations/affiliatewp/class-affiliatewp.php',
        'Avangemail_Array_Bag' => __DIR__ . '/../..' . '/includes/class-array-bag.php',
        'Avangemail_BuddyPress_Integration' => __DIR__ . '/../..' . '/integrations/buddypress/class-buddypress.php',
        'Avangemail_Comment_Form_Integration' => __DIR__ . '/../..' . '/integrations/wp-comment-form/class-comment-form.php',
        'Avangemail_Contact_Form_7_Integration' => __DIR__ . '/../..' . '/integrations/contact-form-7/class-contact-form-7.php',
        'Avangemail_Container' => __DIR__ . '/../..' . '/includes/class-container.php',
        'Avangemail_Custom_Integration' => __DIR__ . '/../..' . '/integrations/custom/class-custom.php',
        'Avangemail_Debug_Log' => __DIR__ . '/../..' . '/includes/class-debug-log.php',
        'Avangemail_Debug_Log_Reader' => __DIR__ . '/../..' . '/includes/class-debug-log-reader.php',
        'Avangemail_Dynamic_Content_Tags' => __DIR__ . '/../..' . '/includes/class-dynamic-content-tags.php',
        'Avangemail_Easy_Digital_Downloads_Integration' => __DIR__ . '/../..' . '/integrations/easy-digital-downloads/class-easy-digital-downloads.php',
        'Avangemail_Events_Manager_Integration' => __DIR__ . '/../..' . '/integrations/events-manager/class-events-manager.php',
        'Avangemail_Field_Formatter' => __DIR__ . '/../..' . '/includes/class-field-formatter.php',
        'Avangemail_Field_Guesser' => __DIR__ . '/../..' . '/includes/class-field-guesser.php',
        'Avangemail_Form' => __DIR__ . '/../..' . '/includes/forms/class-form.php',
        'Avangemail_Form_Asset_Manager' => __DIR__ . '/../..' . '/includes/forms/class-asset-manager.php',
        'Avangemail_Form_Element' => __DIR__ . '/../..' . '/includes/forms/class-form-element.php',
        'Avangemail_Form_Listener' => __DIR__ . '/../..' . '/includes/forms/class-form-listener.php',
        'Avangemail_Form_Manager' => __DIR__ . '/../..' . '/includes/forms/class-form-manager.php',
        'Avangemail_Form_Notice' => __DIR__ . '/../..' . '/includes/forms/class-form-message.php',
        'Avangemail_Form_Output_Manager' => __DIR__ . '/../..' . '/includes/forms/class-output-manager.php',
        'Avangemail_Form_Previewer' => __DIR__ . '/../..' . '/includes/forms/class-form-previewer.php',
        'Avangemail_Form_Tags' => __DIR__ . '/../..' . '/includes/forms/class-form-tags.php',
        'Avangemail_Form_Widget' => __DIR__ . '/../..' . '/includes/forms/class-widget.php',
        'Avangemail_Forms_Admin' => __DIR__ . '/../..' . '/includes/forms/class-admin.php',
        'Avangemail_Gravity_Forms_Field' => __DIR__ . '/../..' . '/integrations/gravity-forms/class-field.php',
        'Avangemail_Gravity_Forms_Integration' => __DIR__ . '/../..' . '/integrations/gravity-forms/class-gravity-forms.php',
        'Avangemail_Integration' => __DIR__ . '/../..' . '/includes/integrations/class-integration.php',
        'Avangemail_Integration_Admin' => __DIR__ . '/../..' . '/includes/integrations/class-admin.php',
        'Avangemail_Integration_Fixture' => __DIR__ . '/../..' . '/includes/integrations/class-integration-fixture.php',
        'Avangemail_Integration_Manager' => __DIR__ . '/../..' . '/includes/integrations/class-integration-manager.php',
        'Avangemail_Integration_Tags' => __DIR__ . '/../..' . '/includes/integrations/class-integration-tags.php',
        'Avangemail_List_Data_Mapper' => __DIR__ . '/../..' . '/includes/class-list-data-mapper.php',
        'Avangemail_Mail' => __DIR__ . '/../..' . '/includes/class-mail.php',
        'Avangemail_Mail_Interest_Category' => __DIR__ . '/../..' . '/includes/mail/class-interest-category.php',
        'Avangemail_Mail_List' => __DIR__ . '/../..' . '/includes/mail/class-list.php',
        'Avangemail_Mail_Merge_Field' => __DIR__ . '/../..' . '/includes/mail/class-merge-field.php',
        'Avangemail_Mail_Subscriber' => __DIR__ . '/../..' . '/includes/mail/class-subscriber.php',
        'Avangemail_MemberPress_Integration' => __DIR__ . '/../..' . '/integrations/memberpress/class-memberpress.php',
        'Avangemail_Ninja_Forms_Action' => __DIR__ . '/../..' . '/integrations/ninja-forms/class-action.php',
        'Avangemail_Ninja_Forms_Field' => __DIR__ . '/../..' . '/integrations/ninja-forms/class-field.php',
        'Avangemail_Ninja_Forms_Integration' => __DIR__ . '/../..' . '/integrations/ninja-forms/class-ninja-forms.php',
        'Avangemail_Ninja_Forms_v2_Integration' => __DIR__ . '/../..' . '/integrations/ninja-forms-2/class-ninja-forms.php',
        'Avangemail_Plugin' => __DIR__ . '/../..' . '/includes/class-plugin.php',
        'Avangemail_Queue' => __DIR__ . '/../..' . '/includes/class-queue.php',
        'Avangemail_Queue_Job' => __DIR__ . '/../..' . '/includes/class-queue-job.php',
        'Avangemail_Registration_Form_Integration' => __DIR__ . '/../..' . '/integrations/wp-registration-form/class-registration-form.php',
        'Avangemail_Request' => __DIR__ . '/../..' . '/includes/class-request.php',
        'Avangemail_Tools' => __DIR__ . '/../..' . '/includes/class-tools.php',
        'Avangemail_Update_Optin' => __DIR__ . '/../..' . '/includes/admin/class-update-optin.php',
        'Avangemail_Upgrade_Routines' => __DIR__ . '/../..' . '/includes/admin/class-upgrade-routines.php',
        'Avangemail_Usage_Tracking' => __DIR__ . '/../..' . '/includes/admin/class-usage-tracking.php',
        'Avangemail_User_Integration' => __DIR__ . '/../..' . '/includes/integrations/class-user-integration.php',
        'Avangemail_WPForms_Field' => __DIR__ . '/../..' . '/integrations/wpforms/class-field.php',
        'Avangemail_WPForms_Integration' => __DIR__ . '/../..' . '/integrations/wpforms/class-wpforms.php',
        'Avangemail_WooCommerce_Integration' => __DIR__ . '/../..' . '/integrations/woocommerce/class-woocommerce.php',
        'xrstf\\Composer52\\AutoloadGenerator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
        'xrstf\\Composer52\\Generator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitabc72b64e84efd76b3cb10d2a10a9768::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitabc72b64e84efd76b3cb10d2a10a9768::$classMap;

        }, null, ClassLoader::class);
    }
}
