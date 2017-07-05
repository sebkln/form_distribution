<?php
namespace Sebkln\FormDistribution\UserFunc;

/***
 *
 * This file is part of the "Form distribution" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian Klein <sebastian@sklein-medien.de>
 *
 ***/

class Tca
{
    /**
     * This method creates custom labels for the form data in the Web>List view
     *
     * @param $parameters
     */
    public function formDataLabel(&$parameters)
    {
        $record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        $newLabel = '';
        if (!empty($record['formtitle'])) {
            $newLabel .= '[' . $record['formtitle'] . ']';
        }
        if (!empty($record['firstname'])) {
            $newLabel .= ' ' . $record['firstname'];
        }
        if (!empty($record['lastname'])) {
            $newLabel .= ' ' . $record['lastname'];
        }
        if (!empty($record['message'])) {
            $newLabel .= ': "' . substr(strip_tags($record['message']), 0, 20) . '..."';
        }

        $parameters['title'] = $newLabel;
    }
}
