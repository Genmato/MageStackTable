<?php

namespace Genmato\TableXml\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Display merged table.xml data
     *
     * @return void
     */
    public function execute()
    {
        $output = $this->_objectManager->get('Genmato\TableXml\Model\Table\Reader')->read();

        print_r($output);
    }
}
