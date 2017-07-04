<?php
namespace Sebkln\FormDistribution\Controller;

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

/**
 * DataController
 */
class DataController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * dataRepository
     *
     * @var \Sebkln\FormDistribution\Domain\Repository\DataRepository
     * @inject
     */
    protected $dataRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $datas = $this->dataRepository->findAll();
        $this->view->assign('datas', $datas);
    }

    /**
     * action show
     *
     * @param \Sebkln\FormDistribution\Domain\Model\Data $data
     * @return void
     */
    public function showAction(\Sebkln\FormDistribution\Domain\Model\Data $data)
    {
        $this->view->assign('data', $data);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Sebkln\FormDistribution\Domain\Model\Data $newData
     * @return void
     */
    public function createAction(\Sebkln\FormDistribution\Domain\Model\Data $newData)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dataRepository->add($newData);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Sebkln\FormDistribution\Domain\Model\Data $data
     * @ignorevalidation $data
     * @return void
     */
    public function editAction(\Sebkln\FormDistribution\Domain\Model\Data $data)
    {
        $this->view->assign('data', $data);
    }

    /**
     * action update
     *
     * @param \Sebkln\FormDistribution\Domain\Model\Data $data
     * @return void
     */
    public function updateAction(\Sebkln\FormDistribution\Domain\Model\Data $data)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dataRepository->update($data);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Sebkln\FormDistribution\Domain\Model\Data $data
     * @return void
     */
    public function deleteAction(\Sebkln\FormDistribution\Domain\Model\Data $data)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dataRepository->remove($data);
        $this->redirect('list');
    }
}
