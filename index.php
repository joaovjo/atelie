<?php 
  include './layout/cabecalho.php';
?>

<!-----------------------------------------------------FIM CABEÇALHO--------------------------------------------------->


<!-----------------------------------------------------CONTEUDO--------------------------------------------------------->
    <main>

      <!-- Hero -->

      <div
        class="flex flex-col justify-center border-b border-gray-200 lg:border-0 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="relative">
          <div aria-hidden="true" class="hidden absolute w-auto h-full bg-gray-100 lg:block"></div>

          <div class="max-w-full">
            <img src="img/brigadeiro-bicho-de-pe.png" alt="" class="w-full h-full object-center object-fill">
          </div>
        </div>
      </div>


      <!-- Produtos em alta -->

      <section aria-labelledby="trending-heading" class="bg-white">
        <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:py-32 lg:px-8">
          <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
            <h2 id="trending-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Favoritos do momento
            </h2>
            <a href="#" class="hidden sm:block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Ver
              tudo<span aria-hidden="true"> &rarr;</span></a>
          </div>

          <div class="mt-8 relative">
            <div class="relative w-full overflow-x-auto">
              <ul role="list"
                class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">

                <!-- Produto 1 -->

                <li class="w-64 inline-flex flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
                      <img src="./public/img/bolo_laranja.png" alt="Bolo de laranja"
                        class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">65kg</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href=".\src\paginas\produtos.php">
                          <span class="absolute inset-0"></span>
                          Bolo de Laranja
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">R$17</p>
                    </div>
                  </div>
                </li>

                <!-- Produto 2 -->

                <li class="w-64 inline-flex flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
                      <img src="./public/img/bolo_vermelho.png" alt="Bolo vermelho"
                        class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">3kg</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Bolo Red Velvet
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">R$80</p>
                    </div>
                  </div>

                </li>

                <!-- Produto 3 -->

                <li class="w-64 inline-flex flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
                      <img src="./public/img/mix_doces.png" alt="Mix de doces"
                        class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">100 unidades</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Mix de Doces
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">R$180</p>
                    </div>
                  </div>

                </li>

                <!-- Produto 4 -->

                <li class="w-64 inline-flex flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
                      <img src="./public/img/bolo_piscina.png" alt="Bolo piscina"
                        class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">60kg</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Bolo Piscina
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">R$35</p>
                    </div>
                  </div>

                </li>

                <!-- More products... -->
              </ul>
            </div>
          </div>

          <div class="mt-12 px-4 sm:hidden">
            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Ver tudo<span
                aria-hidden="true"> &rarr;</span></a>
          </div>
        </div>
      </section>

      <div class="relative overflow-hidden">
        <!-- QUEM SOMOS NÓS -->
        <section aria-labelledby="testimonial-heading"
          class="relative py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:py-32 lg:px-8">
          <div class="max-w-2xl mx-auto lg:max-w-none">
            <h2 id="testimonial-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Quem somos nós?
            </h2>
            <!-- centralizar -->

            <div class="mt-16 space-y-16 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8">
              <blockquote class="sm:flex lg:block">
                <!-- ÍCONE ASPAS -->
                <!-- <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  class="flex-shrink-0 text-gray-300">
                  <path
                    d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                    fill="currentColor" />
                </svg> -->
                <!-- ICONE ASPAS -->
                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                  <p class="text-lg text-gray-600">A empresa foi criado em 2022, suas fundadodoras são 3 primas
                    apaixonadas por Confeitaria.
                    Juntas produzem doces deliciosos, e levam para os seus clientes.
                    Criaram essa marca, com o sonho de evoluir, fazer doces incríveis e ter sua loja física.
                    Os seus doces são feitos com muita exclusividade e amor. Zelamos pelo sabor e qualidade! </p>
                  <cite class="mt-4 block font-semibold not-italic text-gray-900"> Kátia Arbol, Luciana Arbol e Marisa
                    Gonçalves</cite>
                </div>
              </blockquote>
            </div>
          </div>
        </section>
      </div>
    </main>
   

<!------------------------------------------------------FIM DO CONTEUDO---------------------------------------->



<!------------------------------------------------------RODAPÉ------------------------------------------------->

<?php 
  include './layout/rodape.php';
?>