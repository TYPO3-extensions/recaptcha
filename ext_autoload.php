<?php

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('recaptcha');

return array(
	'TYPO3\\CMS\\Form\\Validation\\RecaptchaValidator' => $extensionPath . 'Classes/Validation/RecaptchaValidator.php',
);