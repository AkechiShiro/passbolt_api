<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentsFixture
 *
 */
class CommentsFixture extends TestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'comments'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1dd295f0-4d4e-51b3-b0ca-b0a9763b560c',
            'parent_id' => 'da213c84-3d61-596e-882b-f870c26bd0f5',
            'foreign_id' => '8e3874ae-4b40-590b-968a-418f704b9d9a',
            'foreign_model' => 'Resource',
            'content' => 'this is a reply to the short comment',
            'created' => '2012-11-25 13:39:26',
            'modified' => '2012-11-25 13:39:26',
            'user_id' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498',
            'created_by' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498',
            'modified_by' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498'
        ],
        [
            'id' => 'da213c84-3d61-596e-882b-f870c26bd0f5',
            'parent_id' => null,
            'foreign_id' => '8e3874ae-4b40-590b-968a-418f704b9d9a',
            'foreign_model' => 'Resource',
            'content' => 'this is a short comment',
            'created' => '2012-11-25 13:39:25',
            'modified' => '2012-11-25 13:39:25',
            'user_id' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498',
            'created_by' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498',
            'modified_by' => '904bcd9f-ff51-5cfd-9de8-d2c876ade498'
        ],
    ];
}