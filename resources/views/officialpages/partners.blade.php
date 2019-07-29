@extends('header.headers')
@section('content')

<section class="partnerspage">
    <section class="partnersheaders">
        <div>
            <h1>Our Partners</h1>
        </div>
        <div>
          <p>Our partners are the elite and trusted brands</p>    
        </div>    
    </section>

    <section class="partnerslogsdisplay">
            @foreach ($company_names as $company_name)
                @if($company_name->company_logo_path != "delipack1.png")
                    <div> 
                        <img src="http://superuser.delipackport.com/company_logos/{{$company_name->company_logo_path}}" />
                    </div>
                @endif
            @endforeach
    </section>
</section>


@endsection