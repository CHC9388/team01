<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteRemovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_waste_removal', function (Blueprint $table) {
$table->id();  // 自增主鍵
$table->string('city', 50)->comment('縣市別');  // 縣市別
$table->integer('cleanup_area')->comment('清理範圍(處)');  // 清理範圍(處)
$table->integer('cleanup_times')->comment('清理次數(次)');  // 清理次數(次)
$table->integer('participants')->comment('參與人數(人次)');  // 參與人數(人次)
$table->decimal('marine_debris_source_drift', 10, 3)->nullable()->comment('海洋廢棄物來源(噸)_海漂');  // 海洋廢棄物來源(噸)_海漂
$table->decimal('marine_debris_source_bottom', 10, 3)->nullable()->comment('海洋廢棄物來源(噸)_海底');  // 海洋廢棄物來源(噸)_海底
$table->decimal('marine_debris_source_beach_cleanup', 10, 3)->nullable()->comment('海洋廢棄物來源(噸)_淨灘');  // 海洋廢棄物來源(噸)_淨灘
$table->decimal('marine_debris_source_vessel', 10, 3)->nullable()->comment('海洋廢棄物來源(噸)_船舶人員產出');  // 海洋廢棄物來源(噸)_船舶人員產出
$table->decimal('marine_debris_source_bin', 10, 3)->nullable()->comment('海洋廢棄物來源(噸)_岸上定點設置垃圾桶');  // 海洋廢棄物來源(噸)_岸上定點設置垃圾桶
$table->integer('cleanup_method_hired')->nullable()->comment('清理方式_雇工(人次)');  // 清理方式_雇工(人次)
$table->integer('cleanup_method_mechanical')->nullable()->comment('清理方式_機械(輛次)');  // 清理方式_機械(輛次)
$table->decimal('cleanup_quantity_total', 10, 3)->nullable()->comment('清理數量分類(噸)_總計');  // 清理數量分類(噸)_總計
$table->decimal('cleanup_quantity_pet_bottles', 10, 3)->nullable()->comment('清理數量分類(噸)_寶特瓶');  // 清理數量分類(噸)_寶特瓶
$table->decimal('cleanup_quantity_steel_cans', 10, 3)->nullable()->comment('清理數量分類(噸)_鐵罐');  // 清理數量分類(噸)_鐵罐
$table->decimal('cleanup_quantity_aluminum_cans', 10, 3)->nullable()->comment('清理數量分類(噸)_鋁罐');  // 清理數量分類(噸)_鋁罐
$table->decimal('cleanup_quantity_glass_bottles', 10, 3)->nullable()->comment('清理數量分類(噸)_玻璃瓶');  // 清理數量分類(噸)_玻璃瓶
$table->decimal('cleanup_quantity_paper', 10, 3)->nullable()->comment('清理數量分類(噸)_廢紙');  // 清理數量分類(噸)_廢紙
$table->decimal('cleanup_quantity_bamboo_wood', 10, 3)->nullable()->comment('清理數量分類(噸)_竹木');  // 清理數量分類(噸)_竹木
$table->decimal('cleanup_quantity_polystyrene', 10, 3)->nullable()->comment('清理數量分類(噸)_保麗龍');  // 清理數量分類(噸)_保麗龍
$table->decimal('cleanup_quantity_fishing_gear', 10, 3)->nullable()->comment('清理數量分類(噸)_廢漁具漁網');  // 清理數量分類(噸)_廢漁具漁網
$table->decimal('cleanup_quantity_unclassified_waste', 10, 3)->nullable()->comment('清理數量分類(噸)_無法分類廢棄物');  // 清理數量分類(噸)_無法分類廢棄物
$table->decimal('cleanup_post_processing_incineration', 10, 3)->nullable()->comment('清理後處理方式(噸)_焚化');  // 清理後處理方式(噸)_焚化
$table->decimal('cleanup_post_processing_recycling', 10, 3)->nullable()->comment('清理後處理方式(噸)_回收再利用');  // 清理後處理方式(噸)_回收再利用
$table->decimal('cleanup_post_processing_landfilling', 10, 3)->nullable()->comment('清理後處理方式(噸)_掩埋'); // 清理後處理方式(噸)_掩埋
$table->timestamps(); // 創建created_at和updated_at欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_waste_removal');
    }
}
