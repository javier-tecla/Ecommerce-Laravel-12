<x-app-layout>

    <div class="-mb-16 text-gray-700" x-data="{
        pago: 1
    }">

        <div class="grid grid-cols-1 lg:grid-cols-2">

            <div class="col-span-1 bg-white">
                <div class="lg:max-w-[40rem] py-12 px-4 lg:pr-8 sm:pl-6 lg:pl-8 ml-auto">

                    <h1 class="text-2xl font-semibold mb-2">
                        Pago
                    </h1>

                    <div class="shadow rounded-lg overflow-hidden border border-gray-400">
                        <ul class="divide-y divide-gray-400">
                            <li>
                                <label class="p-4 flex items-center">

                                    <input type="radio" x-model="pago" value="1">

                                    <span class="ml-2">
                                        Tarjeta de debito / crédito
                                    </span>

                                    <img class="h-6 ml-auto" src="https://codersfree.com/img/payments/credit-cards.png"
                                        alt="Tarjetas de credito">
                                </label>

                                <div class="p-4 bg-gray-100 text-center border-t border-gray-400" x-show="pago == 1">
                                    <i class="fa-regular fa-credit-card text-9xl"></i>

                                    <p class="mt-2">
                                        Luego de hacer click al "Pagar ahora", se abrirá el checkout de Niubiz para
                                        completar tu compra de forma segura.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <label class="p-4 flex items-center">

                                    <input type="radio" x-model="pago" value="2">

                                    <span class="ml-2">
                                        Deposito Bancario o Uala
                                    </span>

                                </label>
                            </li>

                            <div class="p-4 bg-gray-100 flex justify-center border-t border-gray-400"
                                x-cloak
                                x-show="pago == 2">

                                <div>
                                    <p>1. Pago por depósito o transferencia bancaria:</p>
                                    <p>- Banco Frances: 198-987654321-99</p>
                                    <p>- CVU: 002198987654322</p>
                                    <p>- Razon social: Ecommerce S.R.L</p>
                                    <p>- CUIT: 30-71582721-9</p>
                                    <p>2. Pago por Uala</p>
                                    <p>
                                        Enviar el comprobante de pago a ecomerce@gmail.com / 1124555955
                                    </p>
                                </div>

                            </div>
                            <li>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-span-1">
                                <div class="lg:max-w-[40rem] py-12 px-4 lg:pl-8 sm:pr-6 lg:pr-8 mr-auto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati facilis nobis
                                        recusandae
                                        dignissimos minima doloribus repudiandae temporibus error est, porro, debitis
                                        blanditiis
                                        consequuntur voluptates saepe? Officia, eius voluptates! Aliquid, odit!</p>
                                </div>
                            </div>

                    </div>

                </div>

</x-app-layout>
