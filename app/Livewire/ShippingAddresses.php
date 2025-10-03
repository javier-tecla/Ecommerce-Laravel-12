<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateAddressForm;
use App\Models\Address;
use Livewire\Component;

class ShippingAddresses extends Component
{
    public $addresses;

    public $newAddress = true;

    public CreateAddressForm $createAddress;

    public function mount()
    {
        $this->addresses = Address::where('user_id', auth()->id())->get();

        $this->createAddress->receiver_info = [
            'name' => auth()->user()->name,
            'last_name' => auth()->user()->last_name,
            'document_type' => auth()->user()->document_type,
            'document_number' => auth()->user()->document_number,
            'phone' => auth()->user()->phone,
        ];

    }

    public function store()
    {
        $this->createAddress->save();
        $this->addresses = Address::where('user_id', auth()->id())->get();
        $this->newAddress = false;
    }

    public function render()
    {
        return view('livewire.shipping-addresses');
    }
}
