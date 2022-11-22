<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendas') }}
        </h2>
    </x-slot>

    <form action="{{ route('vendas.store') }}" method="POST">
    @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Detalhamento de vendas
                        <div class="input-group input-group-sm mb-3">
                            <input name="name" type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Vendedor">
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-12 lg:px-12 mt-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Nome Produto
                            <div class="input-group input-group-sm mb-3">
                                <input name="produto" type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm" placeholder="Produto">
                            </div>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-12 lg:px-12 mt-3">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <p>Forma de Pagamento
                                <p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="avista" onclick='handleAvista(this)' onclick='metododpag(this)' name="a_vista">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Á vista
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="parcelado" id="parcelado" onclick='metododpag(this)'>
                                    <label class="form-check-label" for="flexCheckDefault"  >
                                        Parcelado
                                    </label>
                                </div>
                                <select name="parcelas"class="form-select mb-3" aria-label="Default select example" id="parcelas">
                                    <option selected value="" hidden>Selecione uma Parcela</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <button type="submit" id="enviar-dados-fun"
                                    class="btn btn-outline-success">Success</button>
                            </div>
                        </div>
                    </div>
                </form>
                    <script src="{{ asset('js/vendas.js') }}"></script>
</x-app-layout>
