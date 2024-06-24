{{-- <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        @foreach ($listmenu as $rowmenu)
            <x-menu-item :rowmenu="$rowmenu" />
        @endforeach
      </ul>
    </div>
  </nav> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}"> --}}

<!-- --------------------------------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                @foreach ($listmenu as $rowmenu)
                    <x-menu-item :rowmenu="$rowmenu" />
                @endforeach
            </ul>
        </div>
    </div>
</nav>
