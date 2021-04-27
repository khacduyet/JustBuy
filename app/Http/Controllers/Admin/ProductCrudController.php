<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudField;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('price')->type('number');
        CRUD::column('sale_price')->type('number');
        // $this->crud->addColumn([
        //     // 1-n relationship
        //     'label' => "Category", // Table column heading
        //     'type' => "select",
        //     'name' => 'cat_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'fetchCategory', // the method that defines the relationship in your Model
        //     'attribute' => "name", // foreign key attribute that is shown to user
        //     'model' => "App\Models\Category", // foreign key model
        //  ]);
         CRUD::addColumn([
            'name'      => 'photos', // The db column name
            'label'     => 'Product Image', // Table column heading
            'type'      => 'image',
            // 'prefix' => 'folder/subfolder/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '100px',
            'width'  => '100px',
        ]);
        CRUD::column('status ');
        // CRUD::setFromDb(); // columns
        
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        // CRUD::setFromDb(); // fields
        CRUD::field('name');
        CRUD::field('price')->type('number');
        CRUD::field('sale_price')->type('number');
        $this->crud->addField([  // Select2
            'label'     => "Category",
            'type'      => 'select2_nested',
            'name'      => 'cat_id',// the db column for the foreign key

            // optional
            'entity'    => 'fetchCategory', // the method that defines the relationship in your Model
            'model'     => "\Backpack\NewsCRUD\app\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 0, // set the default value of the select2

            // also optional
            'options'   => (function ($query) {
                return $query->orderBy('name', 'DESC')->get();
            }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);
        CRUD::field('descriptions')->type('ckeditor');

        $this->crud->addField([
            'label' => "Profile Image",
            'name' => "photos",
            'type' => 'browse',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        // $this->crud->addField([
        //     'label' => "Profile Image",
        //     'name' => "list_image",
        //     'type' => 'image',
        //     'crop' => false, // set to true to allow cropping, false to disable
        //     'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
        //     'disk'      => 'uploads', // in case you need to show images from a different disk
        //     'prefix'    => 'uploads/images/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        // ]);

        CRUD::field('author');
        CRUD::field('publisher');
        CRUD::field('size');
        CRUD::field('page');
        CRUD::field('status');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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
}
