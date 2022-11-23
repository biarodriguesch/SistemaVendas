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
                    <a type="button" class="btn btn-outline-success d-flex justify-content-evenly mb-3" href="{{route('vendas.create')}}">Nova venda</a>
                    <table class="table">
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
                            @foreach ($vendas as $request)
                          <tr>
                            <td>{{ $request->produto }}</td>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->parcelado}}{{$request->a_vista}}</td>
                            <td>{{ $request->parcelas }}</td>
                            <td>
                            {{-- <form action="{{ route('vendas.destroy',$vendas->id) }}" method="POST">
                            @csrf
                            @method('DELETE') --}}
                            {{-- href="{{ route('products.edit',$product->id) }}" --}}
                            <a class="btn btn-primary" href="{{ route('vendas.edit', $request->id) }}"><i class="bi bi-pencil"></i> </a>
                            <button  class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                            </form>
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
