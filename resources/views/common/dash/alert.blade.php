@php
    $statusClass = null;
    $message = null;

    if (session()->has('status')) {

    $status = session()->get('status');

        switch($status[0]) {
            case 'alert-success':
                $statusClass = $status[0];
                $message = $status[1];
                break;
            case 'alert-info':
                $statusClass = $status[0];
                $message = $status[1];
                break;
            case 'alert-warning':
                $statusClass = $status[0];
                $message = $status[1];
                break;
            case 'alert-danger':
                $statusClass = $status[0];
                $message = $status[1];
                break;
        }
    }
@endphp

@if($statusClass)
    <div class="alert {{ $statusClass }}" role="alert">
        {{ $message }}
    </div>
@endif
