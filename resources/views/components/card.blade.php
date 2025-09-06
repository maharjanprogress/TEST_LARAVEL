@props(['highlight' => false]) {{-- default value of highlight is false --}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn btn-primary">View Details</a> {{-- Here only the value of the attributes is fetched ie get('href') --}}
    <br>
    <a {{ $attributes }}> View Details in another way</a> {{-- here the attributes are directly injected(kinda what i understood) --}}
</div>