<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductsImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Product([
            'name' => $row['name'],
            'description'=> $row['description'],
            'image' => $row['image'],
            'barcode' => $row['barcode'],
            'price'   => $row['price'],
            'quantity' => $row['quantity'],
            'status'   => $row['status'],
        ]);
    }
}
