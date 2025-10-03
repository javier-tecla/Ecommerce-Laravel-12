<?php

namespace App\Livewire\Forms;

use Livewire\Form;

use App\Enums\TypeOfDocuments;
use App\Models\Address;
use Illuminate\Validation\Rules\Enum;

class CreateAddressForm extends Form
{
    public $type = '';
    public $address = '';
    public $province = '';
    public $city = '';
    public $zip_code= '';
    public $reference = '';
    public $receiver = 1;
    public $receiver_info = [];
    public $default = false;

    public function rules()
    {
        return [
            'type' => 'required|in:1,2',
            'address' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|string',
            'reference' => 'required|string',
            'receiver' => 'required|in:1,2',
            'receiver_info' => 'required|array',
            'receiver_info.name' => 'required|string',
            'receiver_info.last_name' => 'required|string',
            'receiver_info.document_type' => [
                'required',
                new Enum(TypeOfDocuments::class)
            ],
            'receiver_info.document_number' => 'required|string',
            'receiver_info.phone' => 'required|string',
         ];
    }

    public function validationAttributes()
    {
        return [
            'type' => 'tipo de dirección',
            'address' => 'dirección',
            'province' => 'provincia',
            'city' => 'ciudad',
            'zip_code' => 'codigo postal',
            'reference' => 'referencia',
            'receiver' => 'receptor',
            'receiver_info.name' => 'nombre',
            'receiver_info.last_name' => 'apellidos',
            'receiver_info.document_type' => 'tipo de documento',
            'receiver_info.document_number' => 'número de documento',
            'receiver_info.phone' => 'teléfono',
        ];

    }

    public function save()
    {
        $this->validate();

        if (auth()->user()->addresses->count() === 0) {
            $this->default = true;
        }

        Address::create([
            'user_id' => auth()->id(),
            'type' => $this->type,
            'address' => $this->address,
            'province' => $this->province,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
            'reference' => $this->reference,
            'receiver' => $this->receiver,
            'receiver_info' => $this->receiver_info,
            'default' => $this->default,
        ]);

        $this->reset();

        $this->receiver_info = [
            'name' => auth()->user()->name,
            'last_name' => auth()->user()->last_name,
            'document_type' => auth()->user()->document_type,
            'document_number' => auth()->user( )->document_number,
            'phone' => auth()->user()->phone,
        ];
    }

}
