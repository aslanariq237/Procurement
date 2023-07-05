<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CustomerController extends Controller
{
    public  function index(){
      $customer = Customer::all();
      return view('admin.ViewList.tableCustomer',compact('customer'));
    }
    public function halamanStoreCustomer()  {
      return view('admin.Input.customerStore');
    }
    public function storeCustomer(Request $request) {
      $request->validate([
          'nama' => 'required',
          'nomor_telepon' => 'required',
          'alamat' => 'required',
      ]);
      try {
          DB::beginTransaction();
        // Mengambil ID terakhir dari database
        $lastCustomer = Customer::latest()->first();

        // Mendapatkan angka dari ID terakhir dan menambahkannya dengan 1
        $lastIdNumber = $lastCustomer ? intval(substr($lastCustomer->id_customer, 5)) : 0;
        $newIdNumber = $lastIdNumber + 1;

        // Menghasilkan ID dengan format "CUST-xxxxxx"
        $id = 'CUST-' . str_pad($newIdNumber, 6, '0', STR_PAD_LEFT);
          $customer = new Customer();
          $customer->id_customer = $id;
          $customer->nama = $request->input('nama');
          $customer->nomor_telepon = $request->input('nomor_telepon');
          $customer->alamat = $request->input('alamat');
          $customer->save();
          DB::commit();
          return redirect()->route('tableCustomer')->with('success', 'Customer Berhasil disimpan');
      } catch (\Exception $e) {
          DB::rollback();
          return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan Customer: ' . $e->getMessage());
      }
    }

      public function deleteAdmin(Request $request) {
        if (in_array($request->method(), ['POST', 'PUT', 'PATCH'])
        && $request->isJson()
        ) {
            $dataReq = $request->json()->all();
            //json_decode($dataReq, true);
            $arrDataReq =json_decode(json_encode($dataReq),true);
            $id=$arrDataReq["id"];
        }else{
            $id=$request->input["id"];
        }

        $data = Customer::find($id_customer);
        try {
            if($data->delete()){
                $response = [
                    'message'		=> 'Delete Customer Sukses',
                    'data' 		    => $data,
                ];

                return response()->json($response, 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            $response = [
                'message'        => 'Transaction DB Error',
                'data'      => $e->getMessage()
            ];
            return response()->json($response, 500);
        }
      }

        public function deleteCustomer(Request $request) {
          if (in_array($request->method(), ['POST', 'PUT', 'PATCH'])
          && $request->isJson()
          ) {
              $dataReq = $request->json()->all();
              //json_decode($dataReq, true);
              $arrDataReq =json_decode(json_encode($dataReq),true);
              $id_customer=$arrDataReq["id_customer"];
          }else{
              $id_customer=$request->input["id_customer"];
          }

          $data = Customer::find($id_customer);
          try {
              if($data->delete()){
                  $response = [
                      'message'		=> 'Delete Customer Sukses',
                      'data' 		    => $data,
                  ];

                  return response()->json($response, 200);
              }
          } catch (\Exception $e) {
              DB::rollback();
              $response = [
                  'message'        => 'Transaction DB Error',
                  'data'      => $e->getMessage()
              ];
              return response()->json($response, 500);
          }
        }
        public function updateCustomer(Request $request) {
            
            //
            if (in_array($request->method(), ['POST', 'PUT', 'PATCH'])
                && $request->isJson()
            ) {
                $dataReq = $request->json()->all();
                $arrDataReq =json_decode(json_encode($dataReq),true);
                $nama=$arrDataReq["nama"];
                $id_customer=$arrDataReq["id_customer"];
                $nomor_telepon=$arrDataReq["nomor_telepon"];
            }else{
                $nama=$request->input["nama"];
                $id_customer=$request->input["id_customer"];
                $nomor_telepon=$request->input["nomor_telepon"];
            }
                  
            try {
                DB::beginTransaction();
          
                $p = Customer::find($id_customer);

                    $p->nama = $nama;
                    $p->nomor_telepon = $nomor_telepon;
                $p->save();
                DB::commit();

                $response = [
                    'message'        => 'Update Sukses',
                    'data'         => $p
                ];

                return response()->json($response, 200);

            } catch (\Exception $e) {
              DB::rollback();
                $response = [
                    'message'        => 'Transaction DB Error',
                    'data'      => $e->getMessage()
                ];
                return response()->json($response, 200);
            }
            $response = [
                'message'        => 'An Error Occured'
            ];

            return response()->json($response, 200);
        }


    }
