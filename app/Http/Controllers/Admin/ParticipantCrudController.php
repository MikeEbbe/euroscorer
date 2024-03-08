<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ParticipantRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ParticipantCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ParticipantCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Participant::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/participant');
        CRUD::setEntityNameStrings('participant', 'participants');
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
            'name' => 'edition.year',
            'label' => 'Edition',
            'type' => 'number',
            'thousands_sep' => '',
        ]);
        CRUD::column([
            'name' => 'country.name',
            'label' => 'Country',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'song',
            'label' => 'Song',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'semi_final',
            'label' => 'Semi-Final',
            'type' => 'number',
        ]);
        CRUD::column([
            'name' => 'is_in_final',
            'label' => 'Is in final',
            'type' => 'boolean',
        ]);
        CRUD::column([
            'name' => 'semi_final_order',
            'label' => 'Semi-Final order',
            'type' => 'number',
        ]);
        CRUD::column([
            'name' => 'final_order',
            'label' => 'Final order',
            'type' => 'number',
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
        CRUD::setValidation(ParticipantRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
        CRUD::field([
            'label' => 'Edition',
            'type' => 'select',
            'name' => 'edition_id',
            'attribute' => 'year',
            'options'   => (function ($query) {
                return $query->orderBy('year', 'DESC')->get();
            }),
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
            'name' => 'song',
            'label' => 'Song',
            'type' => 'text'
        ]);
        CRUD::field([
            'name' => 'semi_final',
            'label' => 'Semi-Final',
            'type' => 'number',
            'attributes' => ["min" => "1", "max" => "2"]
        ]);
        CRUD::field([
            'name' => 'is_in_final',
            'label' => 'Is in final',
            'type' => 'switch',
        ]);
        CRUD::field([
            'name' => 'semi_final_order',
            'label' => 'Semi-Final order',
            'type' => 'number',
            'attributes' => ["min" => "1", "max" => "25"]
        ]);
        CRUD::field([
            'name' => 'final_order',
            'label' => 'Final order',
            'type' => 'number',
            'attributes' => ["min" => "1", "max" => "50"]
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
            'name' => 'edition.year',
            'label' => 'Edition',
            'type' => 'number',
            'thousands_sep' => '',
        ]);
        CRUD::column([
            'name' => 'country.name',
            'label' => 'Country',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'song',
            'label' => 'Song',
            'type' => 'text'
        ]);
        CRUD::column([
            'name' => 'semi_final',
            'label' => 'Semi-Final',
            'type' => 'number',
        ]);
        CRUD::column([
            'name' => 'is_in_final',
            'label' => 'Is in final',
            'type' => 'boolean',
        ]);
        CRUD::column([
            'name' => 'semi_final_order',
            'label' => 'Semi-Final order',
            'type' => 'number',
        ]);
        CRUD::column([
            'name' => 'final_order',
            'label' => 'Final order',
            'type' => 'number',
        ]);
    }
}
