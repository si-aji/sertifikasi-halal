@extends('landing.layout.main')

@section('container')

<main id="main" class="main pt-4">

    {{-- logo & copywriting section --}}
    @include('landing.content.homepage.partials.logo_copywriting_one')

    {{-- form halal section --}}
    @include('landing.content.homepage.partials.form_halal')

    {{-- contant whatsapp section --}}
    @include('landing.content.homepage.partials.contact_wa')

    {{-- support by section --}}
    @include('landing.content.homepage.partials.support_by')

</main>

@endsection
