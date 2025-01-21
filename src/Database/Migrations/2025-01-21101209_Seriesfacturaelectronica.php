    <?php
    namespace App\Database\Migrations;
    use CodeIgniter\Database\Migration;
    class Seriesfacturaelectronica extends Migration
    {
    public function up()
    {
     // Seriesfacturaelectronica
    $this->forge->addField([
        'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
'idEmpresa'             => ['type' => 'bigint', 'constraint' => 20, 'null' => false],
'sucursal'             => ['type' => 'bigint', 'constraint' => 20, 'null' => false],
'tipoSerie'             => ['type' => 'varchar', 'constraint' => 16, 'null' => false],
'serie'             => ['type' => 'varchar', 'constraint' => 16, 'null' => false],
'desdeFecha'             => ['type' => 'date', 'constraint' => , 'null' => false],
'hastaFecha'             => ['type' => 'date', 'constraint' => , 'null' => false],
'desdeFolio'             => ['type' => 'bigint', 'constraint' => 20, 'null' => false],
'hastaFolio'             => ['type' => 'bigint', 'constraint' => 20, 'null' => false],
'ambienteTimbrado'             => ['type' => 'varchar', 'constraint' => 32, 'null' => false],
'tokenPruebas'             => ['type' => 'text', 'constraint' => , 'null' => false],
'tokenProduccion'             => ['type' => 'text', 'constraint' => , 'null' => false],

        'created_at'       => ['type' => 'datetime', 'null' => true],
        'updated_at'       => ['type' => 'datetime', 'null' => true],
        'deleted_at'       => ['type' => 'datetime', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('seriesfacturaelectronica', true);
    }
    public function down(){
        $this->forge->dropTable('seriesfacturaelectronica', true);
        }
    }