<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Siglas_ServidorCertificado', 'doctrine');

/**
 * BaseSiglas_ServidorCertificado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $servidor_confianza_id
 * @property string $certificado
 * @property string $detalles_tecnicos
 * @property date $f_valido_desde
 * @property date $f_valido_hasta
 * @property string $puerta
 * @property string $so
 * @property string $agente
 * @property string $pc
 * @property string $status
 * @property integer $id_create
 * @property integer $id_update
 * @property string $ip_create
 * @property string $ip_update
 * @property Siglas_ServidorConfianza $Siglas_ServidorConfianza
 * @property Doctrine_Collection $Siglas_InteroperabilidadRecibida
 * @property Doctrine_Collection $Siglas_InteroperabilidadEnviada
 * 
 * @method integer                    getId()                               Returns the current record's "id" value
 * @method integer                    getServidorConfianzaId()              Returns the current record's "servidor_confianza_id" value
 * @method string                     getCertificado()                      Returns the current record's "certificado" value
 * @method string                     getDetallesTecnicos()                 Returns the current record's "detalles_tecnicos" value
 * @method date                       getFValidoDesde()                     Returns the current record's "f_valido_desde" value
 * @method date                       getFValidoHasta()                     Returns the current record's "f_valido_hasta" value
 * @method string                     getPuerta()                           Returns the current record's "puerta" value
 * @method string                     getSo()                               Returns the current record's "so" value
 * @method string                     getAgente()                           Returns the current record's "agente" value
 * @method string                     getPc()                               Returns the current record's "pc" value
 * @method string                     getStatus()                           Returns the current record's "status" value
 * @method integer                    getIdCreate()                         Returns the current record's "id_create" value
 * @method integer                    getIdUpdate()                         Returns the current record's "id_update" value
 * @method string                     getIpCreate()                         Returns the current record's "ip_create" value
 * @method string                     getIpUpdate()                         Returns the current record's "ip_update" value
 * @method Siglas_ServidorConfianza   getSiglasServidorConfianza()          Returns the current record's "Siglas_ServidorConfianza" value
 * @method Doctrine_Collection        getSiglasInteroperabilidadRecibida()  Returns the current record's "Siglas_InteroperabilidadRecibida" collection
 * @method Doctrine_Collection        getSiglasInteroperabilidadEnviada()   Returns the current record's "Siglas_InteroperabilidadEnviada" collection
 * @method Siglas_ServidorCertificado setId()                               Sets the current record's "id" value
 * @method Siglas_ServidorCertificado setServidorConfianzaId()              Sets the current record's "servidor_confianza_id" value
 * @method Siglas_ServidorCertificado setCertificado()                      Sets the current record's "certificado" value
 * @method Siglas_ServidorCertificado setDetallesTecnicos()                 Sets the current record's "detalles_tecnicos" value
 * @method Siglas_ServidorCertificado setFValidoDesde()                     Sets the current record's "f_valido_desde" value
 * @method Siglas_ServidorCertificado setFValidoHasta()                     Sets the current record's "f_valido_hasta" value
 * @method Siglas_ServidorCertificado setPuerta()                           Sets the current record's "puerta" value
 * @method Siglas_ServidorCertificado setSo()                               Sets the current record's "so" value
 * @method Siglas_ServidorCertificado setAgente()                           Sets the current record's "agente" value
 * @method Siglas_ServidorCertificado setPc()                               Sets the current record's "pc" value
 * @method Siglas_ServidorCertificado setStatus()                           Sets the current record's "status" value
 * @method Siglas_ServidorCertificado setIdCreate()                         Sets the current record's "id_create" value
 * @method Siglas_ServidorCertificado setIdUpdate()                         Sets the current record's "id_update" value
 * @method Siglas_ServidorCertificado setIpCreate()                         Sets the current record's "ip_create" value
 * @method Siglas_ServidorCertificado setIpUpdate()                         Sets the current record's "ip_update" value
 * @method Siglas_ServidorCertificado setSiglasServidorConfianza()          Sets the current record's "Siglas_ServidorConfianza" value
 * @method Siglas_ServidorCertificado setSiglasInteroperabilidadRecibida()  Sets the current record's "Siglas_InteroperabilidadRecibida" collection
 * @method Siglas_ServidorCertificado setSiglasInteroperabilidadEnviada()   Sets the current record's "Siglas_InteroperabilidadEnviada" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSiglas_ServidorCertificado extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('siglas.servidor_certificado');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'siglas.servidor_certificado_id',
             'length' => 4,
             ));
        $this->hasColumn('servidor_confianza_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('certificado', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('detalles_tecnicos', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('f_valido_desde', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('f_valido_hasta', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('puerta', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('so', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('agente', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pc', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_create', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_create', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 30,
             ));
        $this->hasColumn('ip_update', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Siglas_ServidorConfianza', array(
             'local' => 'servidor_confianza_id',
             'foreign' => 'id'));

        $this->hasMany('Siglas_InteroperabilidadRecibida', array(
             'local' => 'id',
             'foreign' => 'servidor_certificado_id'));

        $this->hasMany('Siglas_InteroperabilidadEnviada', array(
             'local' => 'id',
             'foreign' => 'servidor_certificado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}