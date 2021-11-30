<x-app>
    <x-slot name="header">
            {{ __('Metode Regula Falsi') }}
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table my-4">
                    <div class="card-body p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Metode Regula Falsi</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Iterasi</th>
                                        <th class="text-center">a</th>
                                        <th class="text-center">c</th>
                                        <th class="text-center">b</th>
                                        <th class="text-center">f(a)</th>
                                        <th class="text-center">f(c)</th>
                                        <th class="text-center">f(b)</th>
                                        <th class="text-center">Selang Baru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                        $eps = 0.000001;
                                        $b = 4;
                                        $a = 3.2;
                                    @endphp
                                    @while (!($a - $b) < $eps)
                                        @php
                                            $fa = log($a) + ($a - 5);
                                            $fb = log($b) + ($b - 5);
                                            $c = $b - ($fb * ($b - $a)) / ($fb - $fa);
                                            $fc = log($c) + ($c - 5);

                                            if (abs($fc) < $eps) {
                                                $a = $c;
                                                $b = $c;
                                            } else {
                                                if ($fa * $fc < 0) {
                                                    $b = $c;
                                                } else {
                                                    $a = $c;
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ number_format($a, 6) }}</td>
                                            <td class="text-center">{{ number_format($c, 6) }}</td>
                                            <td class="text-center">{{ number_format($b, 6) }}</td>
                                            <td class="text-center">{{ number_format($fa, 6) }}</td>
                                            <td class="text-center">{{ number_format($fc, 6) }}</td>
                                            <td class="text-center">{{ number_format($fb, 6) }}</td>
                                            @if ($fa * $fc < 0)
                                                <td class="text-center">[a, c]</td>
                                            @else
                                                <td class="text-center">[c, b]</td>
                                            @endif
                                        </tr>
                                    @endwhile
                                </tbody>
                            </table>
                        </div>
                    </div>
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
