<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
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
        CRUD::setFromDb(); // columns

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
            'type'      => 'select2',
            'name'      => 'cat_id', // the db column for the foreign key

            // optional
            'entity'    => 'fetchCategory', // the method that defines the relationship in your Model
            'model'     => "App\Models\Category", // foreign key model
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
            'name' => "list_image",
            'type' => 'image',
            'crop' => false, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            'disk'      => 'uploads', // in case you need to show images from a different disk
            'prefix'    => 'uploads/images/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

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

        // CRUD::setValidation(ProductRequest::class);
        
        // CRUD::field('name');
        // CRUD::field('price')->type('number');
        // CRUD::field('sale_price')->type('number');
        // $this->crud->addField([  // Select2
        //     'label'     => "Category",
        //     'type'      => 'select2',
        //     'name'      => 'cat_id', // the db column for the foreign key

        //     // optional
        //     'entity'    => 'fetchCategory', // the method that defines the relationship in your Model
        //     'model'     => "App\Models\Category", // foreign key model
        //     'attribute' => 'name', // foreign key attribute that is shown to user
        //     'default'   => 0, // set the default value of the select2

        //     // also optional
        //     'options'   => (function ($query) {
        //         return $query->orderBy('name', 'DESC')->get();
        //     }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        // ]);
        // CRUD::field('descriptions')->type('ckeditor');
        // $this->crud->addField([   // Upload
        //     'name'      => 'list_image',
        //     'label'     => 'Photos',
        //     'type'      => 'upload_multiple',
        //     'upload'    => true,
        //     'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        //     // optional:
        //     'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
        // ]);
        // CRUD::field('status');
    }
}
