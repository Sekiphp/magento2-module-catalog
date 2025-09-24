<?php
declare(strict_types=1);

namespace Sekiphp\Catalog\Block\Adminhtml\Product\Attribute;

use Magento\Catalog\Block\Adminhtml\Product\Attribute\Grid as OriginalGrid;

class Grid extends OriginalGrid
{
    protected function _prepareColumns()
    {
        $this->addColumn(
            'attribute_id',
            [
                'header' => __('Attribute Id'),
                'sortable' => true,
                'index' => 'attribute_id',
                'filter_index' => 'main_table.attribute_id',
                'header_css_class' => 'col-attr-code',
                'column_css_class' => 'col-attr-code'
            ]
        );

        parent::_prepareColumns();

        return $this;
    }
}
