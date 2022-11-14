<?php include "../componentes/cabecalho-adm.php";?>

<main class="flex-1 pb-8">

    <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg leading-6 font-medium text-gray-900">Adicionar produto</h2>
            <div class="mt-2 grid grid-cols-1 gap-5">

                <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                    <div class="md:grid md:grid-cols-1 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1">
                            <form class="space-y-6" action="../processos/processaCriarProd.php" method="POST">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="nome" class="block text-sm font-medium text-gray-700">
                                            Nome do produto
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="nome" id="nome"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="Nome do produto">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="descricao" class="block text-sm font-medium text-gray-700">
                                        Descri&ccedil;&atilde;o
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="descricao" name="descricao" rows="3"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"
                                            placeholder="Digite a descri&ccedil;&atilde;o do produto"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Adicione uma breve descri&ccedil;&atilde;o do
                                        produto</p>
                                </div>

                                <div>
                                    <label for="preco" class="block text-sm font-medium text-gray-700">
                                        Pre&ccedil;o
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="preco" id="preco"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm border-gray-300"
                                            placeholder="Valor do produto">
                                    </div>

                                </div>

                                <div>
                                    <label for="qtd" class="block text-sm font-medium text-gray-700">
                                        Quantidade
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="qtd" id="qtd"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm border-gray-300"
                                            placeholder="Quantidade inicial do produto em estoque">
                                    </div>

                                </div>

                                <div>

                                    <label class="block mb-2 text-sm font-medium text-black" for="file_input">Adicione a
                                        imagem do produto</label>
                                    <input aria-describedby="file_input_help" id="file_input" type="file"
                                        accept=".png, .jpeg, .jpg"
                                        class="block w-full text-md text-black font-medium rounded-md border border-gray-300 cursor-pointer focus:outline-none file:py-2 file:px-4 file:mr-4 file:text-md file:rounded-md file:border-0 file:bg-rose-500 file:text-white hover:file:text-black">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-500" id="file_input_help">Tipos
                                        suportados: PNG, JPEG, JPG (MAX. 800x400px).</p>

                                </div>

                                <div>
                                    <button type="submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:text-black bg-rose-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<?php include "../componentes/rodape-adm.php";?>