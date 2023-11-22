@extends('admin.layout.master')

@section('content')

  <section class="filter">
    <div class="filter-button">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>filter-menu</title><path d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" /></svg>
      </button>
    </div>
  </section>
  <div class="crud">
    <section class="table">
      @yield('table')
    </section>
    <section class="form">
      @yield('form')
    </section>
  </div>
  
@endsection
