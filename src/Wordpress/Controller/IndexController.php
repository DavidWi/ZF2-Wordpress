<?php
/**
 * This Controller is used to process requests for wordpress-pages
 */

namespace Wordpress\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     *
     * @var string
     */
    protected $wordpressFolderName = 'wordpress';
    
    public function indexAction()
    {
        // Choose empty layout for Wordpress-Pages
        $this->layout('layout/empty');
        return new ViewModel(
                array(
                    'wordpressFolderName' => $this->wordpressFolderName
                )
                );
    }
    
    /**
     * 
     * @param string $wordpressFolderName
     * @return \Wordpress\Controller\IndexController
     */
    function setWordpressFolderName($wordpressFolderName) {
        $this->wordpressFolderName = $wordpressFolderName;
        return $this;
    }


}
