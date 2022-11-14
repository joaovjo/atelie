<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ateli&ecirc; KLM Doces</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>

  <div class="bg-white">


    <header class="relative z-10">
      <nav aria-label="Top">
        <!-- Top navigation -->


        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="h-16 flex items-center justify-between">
                <!-- Logo (lg+) -->
                <div class="hidden lg:flex lg:items-center">
                  <a href="../">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto" src="../img/logo.png" alt="">
                  </a>
                </div>

                <div class="hidden h-full lg:flex">
                  <!-- Mega menus -->
                  <div class="ml-8">
                    <div class="h-full flex justify-center space-x-8">
                    <a href="/paginas/produtos.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Produtos</a>

                      <a href="/paginas/onde_estamos.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Onde Estamos</a>


                      <a href="/paginas/quem_somos.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Quem somos nós</a>

                      <a href="/paginas/fale_conosco.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Fale conosco</a>
                    </div>
                  </div>
                </div>


                <div class="flex-1 flex items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="hidden lg:flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Search</span>
                          <!-- Heroicon name: outline/search -->
                          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                        </a>
                      </div>

                      <div class="flex">
                        <a href="../paginas/login.php" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Account</span>
                          <!-- Heroicon name: outline/user -->
                          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                          </svg>
                        </a>
                      </div>
                    </div>

                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                    <div class="flow-root">
                      <a href="#" class="group -m-2 p-2 flex items-center">
                        <!-- Heroicon name: outline/shopping-cart -->
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                        <span class="sr-only">items in cart, view bag</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>