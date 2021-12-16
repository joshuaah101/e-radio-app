@extends('layout.master')

@section('nav')
    @include('inc.nav')
@endsection

@section('header')
    <header class="p-28 rounded bg-radio1 object-cover bg-no-repeat bg-fixed bg-cover">
        <div class="flex flex-col space-y-8">
            <h2 class="text-orange-600 text-5xl flex uppercase font-bold font-mono">
               Fpi Radio shows
            </h2>
            <span class="text-orange-600 font-semibold text-sm uppercase font-mono">
                92.1 FM, Simply the best. 
            </span>
        </div>
    </header>
@endsection

@section('main')
    <main class="px-28 my-12 drop-shadow-2xl">
        <header class="text-gray-800 text-4xl font-bold">
            FPI Radio shows schedule
        </header>
        
        <div class="bg-white mt-12 px-6 py-8 shadow-2xl rounded mb-5">
            <section class="p-2 overflow-auto">
                <table class="min-w-full">
                    <thead class="text-blue-500">
                        <tr class="font-mono uppercase text-sm border-b">
                            <th class="px-2 py-3">
                                S/n
                            </th>
                            <th class="px-2 py-3">
                                Days
                            </th>
                            <th class="px-2 py-3">
                                Show title
                            </th>
                            <th class="px-2 py-3">
                                Presenter
                            </th>
                            <th class="px-2 py-3">
                                Studio manager
                            </th>
                            <th class="px-2 py-3">
                                Duration
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-xs">
                            <td class="text-center text-xs font-bold py-5 px-3">
                                1
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Mondays
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                When a child sings
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Adeyemi Olufunmilayo
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Mr. Benjamin
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                2 hrs
                            </td>
                        </tr>

                        <tr class="text-xs">
                            <td class="text-center text-xs font-bold py-5 px-3">
                                2
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Wednesdays
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Iroyin ayo
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Thompson Michael
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Mr. Tajudeen
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                1 hrs
                            </td>
                        </tr>

                        <tr class="text-xs">
                            <td class="text-center text-xs font-bold py-5 px-3">
                                3
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Fridays
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                The parent's love
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Sunkanmi Omobolanle
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                Paul
                            </td>
                            <td class="text-center text-xs font-bold py-5 px-3">
                                30 mins
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>

    </main>
@endsection

@section('footer')
    @include('inc.footer')
@endsection