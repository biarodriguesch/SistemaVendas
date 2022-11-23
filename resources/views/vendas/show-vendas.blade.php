<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mb-3">
                    Detalhamento de vendas
                        <thead>
                          <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">Método de pagamento</th>
                            <th scope="col">Parcelas</th>
                            <th scope="col">Opções</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendas as $vendas)
                          <tr>
                            <td>{{ $vendas->produto }}</td>
                            <td>{{ $vendas->name }}</td>
                            <td>{{ $vendas->parcelado}}{{$vendas->a_vista}}</td>
                            <td>{{ $vendas->parcelas }}</td>
                            <td>

                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
