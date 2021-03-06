<?php
/**
 * Categories Form
 *
 * @package calendar
 * @subpackage admin
 */
class CategoriesForm extends CMSForm
{

    /**
     * Contructor
     * @param type $controller
     * @param type $name
     */
    public function __construct($controller, $name)
    {

        //Administering categories
        if (CalendarConfig::subpackage_enabled('categories')) {
            $gridCategoryConfig = GridFieldConfig_RecordEditor::create();
            $GridFieldCategories = new GridField(
                'Categories', '',
                PublicEventCategory::get(),
                $gridCategoryConfig
            );


            $fields = new FieldList(
                $GridFieldCategories
            );
            $actions = new FieldList();
            $this->addExtraClass('CategoriesForm');
            parent::__construct($controller, $name, $fields, $actions);
        }
    }
}
