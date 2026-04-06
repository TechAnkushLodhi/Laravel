<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>Blade Example</h1>
    <p>This is an example of a Blade template in Laravel. Blade is a powerful templating engine that allows you to write clean and efficient code.</p>
</div>
<div>
    {{-- This is a comment in Blade & below code by blade --}}
    <h2>Welcome, {{ $username }}!</h2>
    <p>This is a personalized greeting using Blade's echo syntax.</p>
</div>

<div>
    {{-- This is php code --}}
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is a personalized greeting using php's echo syntax.</p>
</div>

{{-- How to display loops in Blade --}}

{{-- for loop --}}
@for ($i = 0; $i < 5; $i++)
    <p>Item {{ $i }}</p>
@endfor

{{-- foreach loop --}}
@foreach ($customers as $customer)
    <p>{{ $customer }}</p>
@endforeach

{{-- if statement --}}

@if($username == 'Alice')
    <p>Welcome back, Alice!</p>
@elseif($username == 'Bob')
    <p>Welcome back, Bob!</p>
@else
    <p>Welcome, {{ $username }}!</p>
@endif

@if (count($customers) > 3)
    <p>We have many customers!</p>
@else
    <p>We have a few customers.</p>
@endif  

{{-- unless statement --}}
@unless (count($customers) > 3)
    <p>We have a few customers.</p>
@endunless