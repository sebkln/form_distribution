<?php

defined('TYPO3') or die();

call_user_func(static function () {
    // Add form configuration to TYPO3 backend (module) and frontend (plugin):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
             module.tx_form.settings.yamlConfigurations {
                100 = EXT:form_distribution/Configuration/Form/FormSetup.yaml
            }

            plugin.tx_form.settings.yamlConfigurations {
                100 = EXT:form_distribution/Configuration/Form/FormSetup.yaml
            }
        ')
    );
});
