<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW view_areas AS
            SELECT
                unionInfo.id AS union_id,
                unionInfo.name AS union_name,
                unionInfo.bn_name AS union_bangla_name,
                unionInfo.status AS union_status,
                upazilaInfo.id AS upazila_id,
                upazilaInfo.name AS upazila_name,
                upazilaInfo.bn_name AS upazila_bangla_name,
                upazilaInfo.status AS upazila_status,
                districtInfo.id AS district_id,
                districtInfo.name AS district_name,
                districtInfo.bn_name AS district_bangla_name,
                districtInfo.status AS district_status,
                divisionInfo.id AS division_id,
                divisionInfo.name AS division_name,
                divisionInfo.bn_name AS division_bangla_name,
                divisionInfo.status AS division_status
            FROM
                unions unionInfo
                LEFT JOIN upazilas AS upazilaInfo ON unionInfo.upazila_id = upazilaInfo.id AND upazilaInfo.deleted_at IS NULL AND upazilaInfo.status != 'Deleted'
                LEFT JOIN districts AS districtInfo ON upazilaInfo.district_id = districtInfo.id AND districtInfo.deleted_at IS NULL AND districtInfo.status != 'Deleted'
                LEFT JOIN divisions AS divisionInfo ON districtInfo.division_id = divisionInfo.id AND divisionInfo.deleted_at IS NULL AND divisionInfo.status != 'Deleted'
            WHERE
                unionInfo.deleted_at IS NULL AND unionInfo.status != 'Deleted';
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS view_areas");
    }
};
