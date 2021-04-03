<?php
namespace App\Http\Controllers;
use App\invoice;
use App\product;
use App\protype;
use App\sell;
use App\table;
use Cookie;
use Illuminate\Http\Request;
use DB;
use View;
class SellController extends Controller
{
    private $ids=10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getproduct($id){
        $prodct=product::get();
        $invoice=invoice::orderBy('id', 'DESC')->get();
        $data=table::where('id',$id)->get();
        $pro_type=protype::get();
        $changetbl=table::where('active',1)->get();
        $sell_item=DB::Table('tbl_sell')
            ->selectraw('tbl_sell.name as name')->groupby('name')
            ->selectraw('tbl_sell.invoice as invoice')->groupby('invoice')
            ->selectraw('COUNT(tbl_sell.qty) as qty')->groupby('qty')
            ->selectraw('tbl_sell.price as price')->where('id_table',$id)->groupby('price')->get();
         return view::make('sell',compact('invoice'))->with('product',$prodct)->with('changetbl',$changetbl)->with('sell_item',$sell_item)->with('pro_type',$pro_type)->with('data',$data);
    }
    public function getinsert(Request $request){
          $tbl_pro=product::where('id',$request->id)->get();
          table::updateOrCreate(["id"=>$request->txttable],["active"=>0]);
          foreach ($tbl_pro as $row)
          {
              $arr=array(
                  "id_product"=>$row->id,
                  "name"=>$row->name,
                  "qty"=>1,
                  "id_table"=>$request->txttable,
                  "invoice"=>$request->txtinvoice,
                  "price"=>$row->price
              );
              sell::create($arr);
          }
              $sell_item=DB::Table('tbl_sell')
              ->selectraw('tbl_sell.name as name')->groupby('name')
              ->selectraw('COUNT(tbl_sell.qty) as qty')->groupby('qty')
              ->selectraw('tbl_sell.price as price')->where('id_table',$request->txttable)->groupby('price')->get();
               invoice::updateOrCreate(["name"=>$request->txtinvoice]);
              $output='
                <table class="table">
                            <tr>
                                <thead>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Product Name</th>
                                    <th style="text-align: center">Quanlity</th>
                                    <th style="text-align: center">Price</th>
                                    <th style="text-align: center">Total</th>
                               
                                </thead>
                            </tr>
                      ';
              $i=0;
              $all=0;
          foreach ($sell_item as $row)
          {
              $i++;
              $total=$row->qty*$row->price;
              $output.="
                    <tr style='text-align:center '>
                        <td>$i</td>
                        <td>$row->name</td>
                        <td>$row->qty</td>
                        <td>$row->price $</td>
                        <td>".sprintf('%.2f',$total)."$</td>
                        <td><button class=\"btn btn-danger btn-sm btn_delete\"><i class=\"fa fa-trash\"></i></button></td>
                    </tr>
              ";
              $all+=$total;
          }
        $output.="

            </table>
             <div class=\"card\">
                        <div class=\"card-header bg-inverse bg-light\">
                           <h5 style=\"text-align: center;color: white\">Total Payment</h5>
                         <h4  style=\" color: white;text-align: center\" id='txtdollar' >
                              ".sprintf('%.2f',$all)."
                            </h4>$
                            <h4  style=\" color: white;text-align: center\"  id='txtreal'>
                                  ".sprintf('%.0f',$all*4000)."
                            </h4> រ

                        </div>
              </div>

            ";
          return $output;
    }
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
