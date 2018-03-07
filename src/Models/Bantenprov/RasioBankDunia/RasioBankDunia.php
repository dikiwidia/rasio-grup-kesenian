<?php

namespace Bantenprov\RasioBankDunia\Models\Bantenprov\RasioBankDunia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RasioBankDunia extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'angka_melek_hurufs';
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'label',
        'description',
    ];
}
