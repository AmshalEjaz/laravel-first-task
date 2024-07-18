<!-- resources/views/layout/_sidebar.blade.php -->

<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/') }}">Dashboard</a>
        </li>
        @role('admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/company') }}">Company</a>
        </li>
    @endrole

    @role('admin|employee')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/employee') }}">Employee</a>
        </li>
    @endrole
    </ul>
</div>
