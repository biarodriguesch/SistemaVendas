<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ediçao Vendas') }}
        </h2>
    </x-slot>
    <a class="btn btn-primary" href="{{ route('vendas.index') }}"> <i class="bi bi-arrow-left"></i></a>

    @if ($errors->any())
        <div class="alert alert-danger">
            There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vendas.update', $vendas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Edição de vendas
                        <div class="input-group input-group-sm mb-3">
                            <input name="name" type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" value="{{ $vendas->name }}"
                                placeholder="Produto">
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-12 lg:px-12 mt-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Nome Produto
                            <div class="input-group input-group-sm mb-3">
                                <input name="produto" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  value="{{ $vendas->produto }}"
                                    placeholder="Produto">
                            </div>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-12 lg:px-12 mt-3">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <p>Forma de Pagamento
                                <p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Á vista" id="avista"  value="{{ $vendas->a_vista }}"
                                        name="a_vista">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Á vista
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Parcelado" name="parcelado"  value="{{ $vendas->parcelado }}"
                                        id="parcelado">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Parcelado
                                    </label>
                                </div>
                                <select name="parcelas"class="form-select mb-3" aria-label="Default select example"  value="{{ $vendas->parceladas }}"
                                    id="parcelas">
                                    <option selected hidden> {{ $vendas->parcelas }}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <button type="submit" id="enviar-dados-fun"
                                    class="btn btn-outline-success">Editar</button>
                            </div>
                        </div>
                    </div>
    </form>
</x-app-layout>
