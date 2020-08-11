<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PedidosController extends Controller
{   
    public function index()
{
    return view('index');
}
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'dni' => 'required|integer',
            'tel' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'menu' => 'required',
            'tamaño' => 'required',
            
        ]);


        $nuevoPedido = new Pedido;
        $nuevoPedido->name = $request->name;
        $nuevoPedido->dni = $request->dni;
        $nuevoPedido->tel = $request->tel;
        $nuevoPedido->direccion = $request->direccion;
        $nuevoPedido->localidad = $request->localidad;
        $nuevoPedido->menu = $request->menu;
        $nuevoPedido->tamaño = $request->tamaño;
        $tamañoPedido= explode("(",$nuevoPedido->tamaño);
        if($nuevoPedido->menu == "Picada La Juntadita" && $tamañoPedido[0]=="Chica"){
            $nuevoPedido->precio = '900'; // VALOR PICADA CHICA
        }else if($nuevoPedido->menu == "Picada La Juntadita" && $tamañoPedido[0]=="Mediana"){
            $nuevoPedido->precio = '1300'; // VALOR PICADA MEDIANA
            }else if($nuevoPedido->menu == "Picada La Juntadita" && $tamañoPedido[0]=="Grande"){
                $nuevoPedido->precio = '2200'; // VALOR PICADA GRANDE
                }
        if($request->localidad=="CABA"){
            $nuevoPedido->costoEnvio= '250';
        }else{
            $nuevoPedido->costoEnvio= '0';
        }
      
        $nuevoPedido->precioTotal= $nuevoPedido->precio + $nuevoPedido->costoEnvio;
        $nuevoPedido->save();
        
        
      //  if($tamañoPedido[0]=='Chica'){
          //  return response()->redirectTo("/picadaChica");
        //}elseif($tamañoPedido[0]=='Mediana'){
         //   return response()->redirectTo("/picadaMediana");
       // }elseif($tamañoPedido[0]=='Grande'){
            return view('picada')
                ->with('name', $nuevoPedido->name)
                ->with('direccion', $nuevoPedido->direccion)
                ->with('menu',$nuevoPedido->menu)
                ->with('localidad',$nuevoPedido->localidad)
                ->with('tamaño', $nuevoPedido->tamaño)
                ->with('precio',$nuevoPedido->precio)
                ->with('costoEnvio',$nuevoPedido->costoEnvio)
                ->with('tamañoCorto', $tamañoPedido[0])
                ->with('precioTotal',$nuevoPedido->precioTotal);
    
    }

    public function show(Pedido $pedido)
    {


     
        //$informe = Informe::findOrfail($id);

        $pedido = Pedido::all([
            'id',
            'name',
            'menu',
            'tamaño',
        ]);

        //TODO no se puede cargar las imagenes del informe via relationship del informe?
        $vistaPedido = Pedido::where('id','=',$pedido->id)->get();
        return View::make('picada')->with('name','$pedido->name');
    }
}
