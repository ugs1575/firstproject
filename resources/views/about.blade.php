{{-- @if (5 > 10)
    <p>5 is lower than 10</p>
@elseif(5 == 10) 
    <p>5 is indeed lower than 10</p>
@else
    <h2>All conditions are wrong!</h2>
@endif

@unless (@empty($name))
    <h2>Name isn't empty!</h2>
@endunless
    
@if (!empty($name))
    <h2>Name isn't empty!</h2>
@endif
    
@empty($secondName)
    <h2>Name is empty!</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset

@switch($name)
    @case('Dary')
        <h2>Name is Dary!</h2>
        @break
    @case('David')
        <h2>Name is David</h2>
        @break
    @case('Michael')
        <h2>Name is Michael!</h2>
        @break
    @default
        <h2>No match found!</h2>
        
@endswitch --}}

<!--
    For loop
    Foreach loop
    For else loop
    while loop
-->

@for($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

@foreach ($names as $name)
    <h2>The name is {{ $name }}</h2>
@endforeach

@forelse($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names!</h2>
@endforelse

{{ $i = 0 }}
@while($i < 10)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile