<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Warehouse;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = null;
        $positions = null;

        if(isset($_GET['client_id'])) {
            session(
                [
                    'collect_order'=>['client_id'=> $_GET['client_id'], 'positions'=>[]]
                ]);
            return redirect('/');
        }

        if(session('collect_order'))
        {
            $collect_order = session('collect_order');
            if($collect_order['client_id']) {
                $clientModel = new Clients();
                $clientModel->id = $collect_order['client_id'];
                $client = $clientModel->getClientById();
                if($client)
                {
                    $client = $client[0];
                }
            }

            if(isset($_GET['position_id']))
            {
                session()->push('collect_order.positions', $_GET['position_id']);
                return redirect('/');
            }

            foreach (session('collect_order.positions') as $item)
            {
                $positionModel = new Warehouse();
                $positionModel->id = $item;
                $temp = $positionModel->getPositionWarehouse();
                $positions[] = $temp[0];
            }
        }

        return view('collecting_order', ['client' => $client, 'positions' => $positions]);
    }

    public function showClients()
    {
        $clientModel = new Clients();
        return view('clients_list', ['clients'=>$clientModel->getAllClients()]);
    }

    public function showWarehouse()
    {
        $warehouseModel = new Warehouse();
        return view('warehouse_list', ['warehouse'=>$warehouseModel->getAllWarehouse()]);
    }

    public function deleteOrder()
    {
        session()->forget('collect_order');
        return redirect('/');
    }
}
