<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'titulo' => ['required', 'max:50'],
            'descripcion' => ['required', 'max:1000'],
            'precio' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:disponible,no disponible'],
        ];
    }

    public function withValidator($validator) {
        $validator->after(function($validator){
            if ($this->status == 'disponible' && $this->stock == 0) {
                $validator->errors()->add('stock', 'Si está disponible el producto debe tener un Stock.');
            }
        });
    }
}
