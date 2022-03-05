<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
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
     * @var string
     */
    protected $cp = 'cp';

    /**
     * @var string
     */
    protected $nCiudad = 'nCiudad';

    /**
     * @var date
     */
    protected $dia = 'dia';

    /**
     * @var string
     */
    protected $temperatura = 'temperatura';

    /**
     * @var string
     */
    protected $id_cHora = 'id_cHora';

    /**
     * @var string
     */
    protected $id_cDia = 'id_cDia';

    public function CHoras() {
        return $this->hasMany(cHora::class);
    }
    
    public function CDias() {
        return $this->hasMany(cDia::class);
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
