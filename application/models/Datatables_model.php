<?php
 include( 'application/libraries/postgres_datatable.php' );
 

class Datatables_model extends CI_Model{
    
   
private  $table = 'hpersonas';
 
// Table's primary key
private  $primaryKey = 'nrodoc';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names

   private  $columns = array();

   private   $sql_details = array(
    'user' => 'postgres',
    'pass' => '94',
    'db'   => 'trabajo',
    'host' => 'localhost'
);

    public function __construct() {
        parent::__construct();
        $this->asignarColumnas();
    }
    
    
    public function asignarColumnas(){
    $this->columns = array(
    array(
        'db' => 'nrodoc',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            // Technically a DOM id cannot start with an integer, so we prefix
            // a string. This can also be useful if you have multiple tables
            // to ensure that the id is unique with a different prefix
            return 'row_'.$d;
        }
    ),
    array( 'db' => 'nombre', 'dt' => 'nombre' ),
    array( 'db' => 'apellido',  'dt' => 'apellido' ),  
    array(
        'db'        => 'fechanac',
        'dt'        => 'fechanac',
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ) 
);   
    }/****************/



    
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
 
    
 
  
 
    public function obtener_json() {
    return  
      json_encode(
    SSP::simple( $_POST, $this->sql_details, 
            $this->table, $this->primaryKey, $this->columns ));
    }





} 