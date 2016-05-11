<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Correspondencia_Receptor', 'doctrine');

/**
 * BaseCorrespondencia_Receptor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $correspondencia_id
 * @property integer $unidad_id
 * @property integer $cargo_id
 * @property integer $funcionario_id
 * @property timestamp $f_recepcion
 * @property string $copia
 * @property string $establecido
 * @property string $respuesta_correspondencia_ids
 * @property string $privado
 * @property integer $id_update
 * @property Correspondencia_Correspondencia $Correspondencia_Correspondencia
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Organigrama_Unidad $Organigrama_Unidad
 * @property Organigrama_Cargo $Organigrama_Cargo
 * 
 * @method integer                         getId()                              Returns the current record's "id" value
 * @method integer                         getCorrespondenciaId()               Returns the current record's "correspondencia_id" value
 * @method integer                         getUnidadId()                        Returns the current record's "unidad_id" value
 * @method integer                         getCargoId()                         Returns the current record's "cargo_id" value
 * @method integer                         getFuncionarioId()                   Returns the current record's "funcionario_id" value
 * @method timestamp                       getFRecepcion()                      Returns the current record's "f_recepcion" value
 * @method string                          getCopia()                           Returns the current record's "copia" value
 * @method string                          getEstablecido()                     Returns the current record's "establecido" value
 * @method string                          getRespuestaCorrespondenciaIds()     Returns the current record's "respuesta_correspondencia_ids" value
 * @method string                          getPrivado()                         Returns the current record's "privado" value
 * @method integer                         getIdUpdate()                        Returns the current record's "id_update" value
 * @method Correspondencia_Correspondencia getCorrespondenciaCorrespondencia()  Returns the current record's "Correspondencia_Correspondencia" value
 * @method Funcionarios_Funcionario        getFuncionariosFuncionario()         Returns the current record's "Funcionarios_Funcionario" value
 * @method Organigrama_Unidad              getOrganigramaUnidad()               Returns the current record's "Organigrama_Unidad" value
 * @method Organigrama_Cargo               getOrganigramaCargo()                Returns the current record's "Organigrama_Cargo" value
 * @method Correspondencia_Receptor        setId()                              Sets the current record's "id" value
 * @method Correspondencia_Receptor        setCorrespondenciaId()               Sets the current record's "correspondencia_id" value
 * @method Correspondencia_Receptor        setUnidadId()                        Sets the current record's "unidad_id" value
 * @method Correspondencia_Receptor        setCargoId()                         Sets the current record's "cargo_id" value
 * @method Correspondencia_Receptor        setFuncionarioId()                   Sets the current record's "funcionario_id" value
 * @method Correspondencia_Receptor        setFRecepcion()                      Sets the current record's "f_recepcion" value
 * @method Correspondencia_Receptor        setCopia()                           Sets the current record's "copia" value
 * @method Correspondencia_Receptor        setEstablecido()                     Sets the current record's "establecido" value
 * @method Correspondencia_Receptor        setRespuestaCorrespondenciaIds()     Sets the current record's "respuesta_correspondencia_ids" value
 * @method Correspondencia_Receptor        setPrivado()                         Sets the current record's "privado" value
 * @method Correspondencia_Receptor        setIdUpdate()                        Sets the current record's "id_update" value
 * @method Correspondencia_Receptor        setCorrespondenciaCorrespondencia()  Sets the current record's "Correspondencia_Correspondencia" value
 * @method Correspondencia_Receptor        setFuncionariosFuncionario()         Sets the current record's "Funcionarios_Funcionario" value
 * @method Correspondencia_Receptor        setOrganigramaUnidad()               Sets the current record's "Organigrama_Unidad" value
 * @method Correspondencia_Receptor        setOrganigramaCargo()                Sets the current record's "Organigrama_Cargo" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorrespondencia_Receptor extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('correspondencia.receptor');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'correspondencia.receptor_id',
             'length' => 4,
             ));
        $this->hasColumn('correspondencia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('unidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cargo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('f_recepcion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('copia', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('establecido', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('respuesta_correspondencia_ids', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('privado', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Correspondencia_Correspondencia', array(
             'local' => 'correspondencia_id',
             'foreign' => 'id'));

        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_Unidad', array(
             'local' => 'unidad_id',
             'foreign' => 'id'));

        $this->hasOne('Organigrama_Cargo', array(
             'local' => 'cargo_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}