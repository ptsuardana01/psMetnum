<x-app>
    <x-slot name="header">
            {{ __('Metode Titik Tetap') }}
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Metode Titik Tetap</h6>
                </div>
              </div>
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">Iterasi</th>
                                <th class="text-center">X<small>r</small></th>
                                <th class="text-center">| X<small>r+10</small> - X<small>r</small> |</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                                $eps = 0.000001;
                                $x = 4;
                                $x_prev = 0;
                                function g($x)
                                {
                                    return 5 - log($x);
                                }
                            @endphp
                            @while (abs($x - $x_prev) >= $eps)
                                @php $x_prev = $x; @endphp
                                @php $x = g($x); @endphp
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center">{{ number_format($x_prev, 6) }}</td>
                                    <td class="text-center">{{ number_format($x_prev - $x, 6) }}</td>
                                </tr>
                            @endwhile
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>


        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
</x-app>
