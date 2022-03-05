<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDias extends Model
{
    /**
     * @var int
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    protected $incrementing = 'true';

    /**
     * @var date
     */
    protected $dia = 'dia';

    /**
     * @var string
     */
    protected $clima = 'clima';

    /**
     * @var string
     */
    protected $temperatura = 'temperatura';

    /**
     * @var string
     */
    protected $id_Ciudad = 'id_Ciudad';

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}
