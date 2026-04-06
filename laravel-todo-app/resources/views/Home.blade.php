{{-- Old simple usage (commented for reference) --}}
{{--
<div>
    <br>
    <x-message-banner msg="User login successful!" class="success" />
    <br>
    <br>
    <x-message-banner msg="User Signup successful!" class="success" />
    <br>
    <br>
    <x-message-banner msg="Invalid password. Please try again." class="error" />
    <br>
    <br>
    <x-message-banner msg="Your session will expire in 2 minutes." class="warning" />
    <br>
    <br>
    <x-message-banner msg="New update is available." class="info" />

    <h1>This is the Home page</h1>
</div>

<style>
    .success{
        background-color: green;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px
    }

    .error{
        background-color: #dc2626;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px
    }

    .warning{
        background-color: #f59e0b;
        color: #111827;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px
    }

    .info{
        background-color: #2563eb;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px
    }

    .notice{
        background-color: #6b7280;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px
    }
</style>
--}}

{{-- New dynamic usage (5 types) --}}
<div class="mx-auto max-w-xl space-y-4 p-6">
    <x-message-banner type="success" message="User login successful!" />
    <x-message-banner type="success" message="User Signup successful!" />
    <x-message-banner type="error" message="Invalid password. Please try again." />
    <x-message-banner type="warning" message="Your session will expire in 2 minutes." />
    <x-message-banner type="info" message="New update is available." />
    <x-message-banner type="notice" message="Maintenance is scheduled for tonight at 11 PM." />

    <x-message-banner  />
</div>
