@extends('layouts.app')

    @section('header')
        {{ __('Dashboard') }}
    @endsection

    @section('content')
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card" style="width: 44.5rem;">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-start border-radius-xl mt-n4 position-absolute p-2"
                    style="width: auto;">
                    <p style="font-size: 0.9rem; color: white;">Selamar datang di <strong>Website psMetnum</strong>. <br>
                        Website yang berisi tentang program dengan menggunakan metode tertutup dan terbuka berbasis web</p>
                </div>

                <div class="d-flex justify-content-center pt-3" >
                    <img  src="{{ url('assets/img/illustrations/metnum2.png') }}" alt="" style="width: 27rem;">
                </div>
            </div>
            <div class="card-footer p-1">

            </div>
        </div>
      </div>
    @endsection
