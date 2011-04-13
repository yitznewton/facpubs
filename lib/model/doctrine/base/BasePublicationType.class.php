<?php

/**
 * BasePublicationType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Publications
 * 
 * @method string              getName()         Returns the current record's "name" value
 * @method Doctrine_Collection getPublications() Returns the current record's "Publications" collection
 * @method PublicationType     setName()         Sets the current record's "name" value
 * @method PublicationType     setPublications() Sets the current record's "Publications" collection
 * 
 * @package    facpubs2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BasePublicationType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('publication_type');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Publication as Publications', array(
             'local' => 'id',
             'foreign' => 'publication_type_id'));
    }
}