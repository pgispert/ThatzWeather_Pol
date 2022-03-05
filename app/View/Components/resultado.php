<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Ciudad;

class resultado extends Component
{

    public $datosActuales;
    public $datosFuturos;
    public $ciudades;

    //public $sql = App\Models\Ciudad::query()->orderBy('temperatura', 'desc')->limit(5)->get();

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($datosActuales, $datosFuturos, $ciudades)
    {
        $this->datosActuales = $datosActuales;
        $this->datosFuturos = $datosFuturos;
        $this->ciudades = $ciudades;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.resultado');
    }
}
