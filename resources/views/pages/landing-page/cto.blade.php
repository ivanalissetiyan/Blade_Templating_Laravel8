@extends('layouts.app')
@section('title', 'home')

@section('content')
     </section><section class="h-full w-full border-box bg-white">


        <!-- breadcumbs -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">
                  CTO Perusahaan
                </h1>
            </div>
        </header>

        <!-- table -->
        <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asal Perusahaan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Posisi Pekerjaan</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Detail</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Timo Werner
                                                <div class="text-sm text-gray-500">
                                                    180 Cm
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Chelsea FC
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Forward
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/p103025.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Riyad Mahrez
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    179 Cm
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Manchester City
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Forward
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    </td>
                                </tr>
                
                            <!-- More items... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('after-style')
    		<style>
			@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

			.content-2-2 .btn-outline {
				border: 1px solid #979797;
				color: #979797;
			}

			.content-2-2 .btn-outline:hover {
				border: 1px solid #27c499;
				color: #27c499;
			}

			.content-2-2 .btn-fill {
				background-color: #27c499;
				border: 1px solid #27c499;
			}

			.content-2-2 .card-header {
				background-color: #eef6f4;
				border: 1px solid #27c499;
			}

			.content-2-2 .text-medium-black {
				color: #121212;
			}

			.content-2-2 .text-gray {
				color: #565656;
			}
		</style>
@endpush