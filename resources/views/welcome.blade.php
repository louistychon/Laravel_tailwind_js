@extends('layout.default')
@section('content')
    <h1 class="text-3xl w-3/4 m-auto">Welcome subheading</h1>
    @include('partial.breadcrumb')

    <div class="url-container w-3/4 m-auto">{{Request::url()}}{{Request::url()}}{{url()->previous()}}</div>
    <div class="container-xl w-3/4 m-auto bg-grey-700">
        <div class="bg-white text-center bg-grey-700 justify-center m-auto">

            <div class="">
                        <h2 class="text-5xl text-gray-600 text-bold">Hello CodingSchool</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Beatae, obcaecati?
                    <hr>
                <p> it uses utility classes for typography and spacing space content our with the larger container </p>.</p>

                <button
                    class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Primary
                </button>
            </div>
        </div>
        <div class="w-3/4 m-auto text-center mt-5 mb-5">
            <h3 class="text-2xl">Bonus :</h3>
            <p>Url actuelle : {{ Request::url() }}</p>
            <p>Url précédente:
                {{ url()->previous() }}
            </p>
        </div>

    @endsection

