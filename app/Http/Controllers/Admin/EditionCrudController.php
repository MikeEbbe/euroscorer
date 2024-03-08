<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EditionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EditionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Edition::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/edition');
        CRUD::setEntityNameStrings('edition', 'editions');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
        CRUD::column([
            'name' => 'year',
            'label' => 'Year',
            'type' => 'number',
            'thousands_sep' => '',
        ]);
        CRUD::column([
            'name' => 'country.name',
            'label' => 'Country',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'city',
            'label' => 'City',
            'type' => 'text'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EditionRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
        CRUD::field([
            'name' => 'year',
            'label' => 'Year',
            'type' => 'number',
        ]);
        CRUD::field([
            'label' => 'Country',
            'type' => 'select',
            'name' => 'country_id',
            'attribute' => 'name',
            'options'   => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            }),
        ]);
        CRUD::field([
            'name' => 'city',
            'label' => 'City',
            'type' => 'text'
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    /**
     * Define what happens when the Show operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-show
     * @return void
     */
    protected function setupShowOperation()
    {
        CRUD::column([
            'name' => 'year',
            'label' => 'Year',
            'type' => 'number',
            'thousands_sep' => '',
        ]);
        CRUD::column([
            'name' => 'country.name',
            'label' => 'Country',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'city',
            'label' => 'City',
            'type' => 'text'
        ]);
    }
}
