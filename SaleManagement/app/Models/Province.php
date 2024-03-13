<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Province extends Model
{
 use HasFactory;
 protected $table = "province";
public $timestamps = false;
protected $fillable=['id','info'];
 public function District(){
 return $this->hasMany(District::class);
 }
}
