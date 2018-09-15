<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\suppliers;
class LiveSearch extends Controller
{
    function index()
    {
        return view('supplier.live_search');
    }

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('suppliers')
                    ->where('name', 'like', '%' . $query . '%')
                    ->get();

            } else {
                $data = DB::table('suppliers')
                    ->orderBy('CustomerID', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
        <tr>
         <td>' .$row->name. '</td>
         <td>' .$row->supplierID. '</td>
         <td>' .$row->email. '</td>
         <td>' .$row->contact_details. '</td>
         <td>' .$row->type. '</td>
        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }
}
