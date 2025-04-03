@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Navbar -->
            @include('partials.topbar')

            <!-- Page Content -->
            @yield('page-content')

{{-- @if(session('success'))
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="successToast" class="toast align-items-center text-white bg-success border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif --}}
@if(session('success'))
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="successToast" class="toast align-items-center text-white gradient-toast border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif


        </main>
    </div>
</div>
@endsection

@push('styles')
<style>

      .gradient-custom {
            background: linear-gradient(120deg, #7f7fd5, #86a8e7, #91eae4);
        }
        .login-card {
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }
        .brand-logo {
            width: 180px;
            margin: 0 auto 2rem;
            display: block;
        }
        .brand-name {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        font-family: 'Arial Rounded MT Bold', sans-serif;
        transition: all 0.3s ease;
        }
        
        .brand-name:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }
        .sidebar {
            background: linear-gradient(120deg, #2c3e50, #3498db);
            min-height: 100vh;
            width: 280px;
            transition: all 0.3s;
        }

        .nav-link {
            color: #ecf0f1 !important;
            padding: 15px 25px;
            margin: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .main-content {
            background: #f5f6fa;
            min-height: 100vh;
            width: calc(100% - 280px);
        }

        .brand-name {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card-stats {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card-stats:hover {
            transform: translateY(-5px);
        }
        .sidebar {
        background: linear-gradient(120deg, #2c3e50, #3498db);
        min-height: 100vh;
        width: 280px;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        box-shadow: 4px 0 15px rgba(0,0,0,0.1);
    }

    .main-content {
        background: #f5f6fa;
        min-height: 100vh;
        margin-left: 280px; /* Push content by sidebar width */
        width: calc(100% - 280px);
        padding: 20px;
        position: relative;
        z-index: 1;
    }

    /* Add to existing styles */
    .card-custom {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.05);
    }

    .btn-sm {
        padding: 0.35rem 0.75rem;
        font-size: 0.875rem;
    }
.toast-container {
    z-index: 1055; 
}

.toast {
    min-width: 250px;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 8px;
    padding: 12px 15px;
    animation: fadeInUp 0.5s ease-in-out;
   
}


.gradient-toast {
    background: linear-gradient(120deg, #2c3e50, #3498db);
    color: white;
    min-width: 250px;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 8px;
    padding: 12px 15px;
    animation: fadeInUp 0.5s ease-in-out;
}

.btn-close-white {
    filter: invert(1);
}


@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* For mobile responsiveness */
@media (max-width: 768px) {
    .sidebar {
        width: 0;
        margin-left: -280px;
        transition: all 0.3s;
    }
    
    .sidebar.active {
        width: 280px;
        margin-left: 0;
    }
    
    .main-content {
        width: 100%;
        margin-left: 0;
    }
}
</style>
@endpush

@push('scripts')
<script>
    // Sidebar Toggle Script
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
        document.querySelector('.main-content').classList.toggle('active');
    });
</script>

{{-- <script>
   document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
        const loginModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
        loginModal.show();
        @endif

        // Sidebar toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var successToast = document.getElementById("successToast");
        if (successToast) {
            var toast = new bootstrap.Toast(successToast, { delay: 4000 }); // Auto-hide after 4 seconds
            toast.show();
        }
    });
</script>


@endpush