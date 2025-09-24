<?php
declare(strict_types=1);

namespace Sekiphp\Catalog\Block\Adminhtml\Product\Attribute;

use Magento\Catalog\Block\Adminhtml\Product\Attribute\Grid as OriginalGrid;

class Grid extends OriginalGrid
{
    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumnBefore(
            'attribute_id',
            [
                'header' => __('Attribute ID'),
                'index' => 'attribute_id',
                'type' => 'number',
                'sortable' => true,
                'filter' => true
            ],
            'attribute_code'
        );

        return $this;
    }
}
