@extends('layouts.main')

@section('content')
<section class="container flex justify-center px-4 mx-auto lg:pt-24 lg:pb-64">
  <div class="w-full px-4 lg:w-6/12">
    <div
      class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 rounded-lg shadow-lg"
    >
      <div class="p-5 lg:p-10">
        <h4 class="text-2xl font-semibold">Hubungi Kami</h4>
        <p class="mt-1 mb-4 leading-relaxed text-gray-600">
          Isi formulir di bawah ini dan tim kami akan menghubungi Anda dalam 24 jam.
        </p>
        <div class="relative w-full mt-8 mb-3">
          <label
            class="block mb-2 text-xs font-bold text-gray-700 uppercase"
            for="full-name"
            >Nama Lengkap</label
          ><input
            type="text"
            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
            placeholder="Nama Lengkap"
            style="transition: all 0.15s ease 0s;"
          />
        </div>
        <div class="relative w-full mb-3">
          <label
            class="block mb-2 text-xs font-bold text-gray-700 uppercase"
            for="email"
            >Email</label
          ><input
            type="email"
            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
            placeholder="Email"
            style="transition: all 0.15s ease 0s;"
          />
        </div>
        <div class="relative w-full mb-3">
          <label
            class="block mb-2 text-xs font-bold text-gray-700 uppercase"
            for="message"
            >Pesan</label
          ><textarea
            rows="4"
            cols="80"
            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
            placeholder="Tulis pesan Anda..."
          ></textarea>
        </div>
        <div class="mt-6 text-center">
          <button
            class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
            type="button"
            style="transition: all 0.15s ease 0s;"
          >
            Kirim Pesan
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection