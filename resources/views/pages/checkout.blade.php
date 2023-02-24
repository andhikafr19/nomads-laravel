@extends('layouts.chekout')
@section('title', 'Checkout Travel')

@section('content')
<!-- main -->
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
    <div class="container">
    <div class="row">
        <div class="col p-0">
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                Paket Travel
            </li>
            <li class="breadcrumb-item">
                Details
            </li>
            <li class="breadcrumb-item active">
                Checkout
            </li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 pl-lg-0">
        <div class="card card-details">
            <h1>Who is Going?</h1>
            <p>Trip to Ubud, Bali, Indonesia</p>
            <div class="attendee">
            <table class="table table-responsive-sm text-center">
                <thead>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Visa</th>
                    <th>Passport</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="align-middle">
                    <img src="{{ url('frontend/images/member-1.png') }}" height="60">
                    </td>
                    <td class="align-middle">
                    Angga Rizky
                    </td>
                    <td class="align-middle">
                    CN
                    </td>
                    <td class="align-middle">
                    N/A
                    </td>
                    <td class="align-middle">
                    Active
                    </td>
                    <td class="align-middle">
                    <a href="" class="text-decoration-none">X</a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                    <img src="{{ url('frontend/images/member-1.png') }}" height="60">
                    </td>
                    <td class="align-middle">
                    Angga Rizky
                    </td>
                    <td class="align-middle">
                    SG
                    </td>
                    <td class="align-middle">
                    30 Days
                    </td>
                    <td class="align-middle">
                    Active
                    </td>
                    <td class="align-middle">
                    <a href="" class="text-decoration-none">X</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="member mt-3">
            <h2>Add Member</h2>
            <form action="" class="form-inline row">
                <div class="col-3">
                <label for="inputUsername" class="visually-hidden">Name</label>
                <input type="text" name="inputUsername" class="form-control mb-2 me-sm-2" id="inputUsername" placeholder="Username">
                </div>
                <div class="col-3">
                <label for="inputVisa" class="visually-hidden">Visa</label>
                <select name="inputVisa" id="inputVisa" class="custom-select form-select mb-2 me-sm-2">
                    <option value="VISA">VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                </select>
                </div>
                <div class="col-3">
                <label for="doePassport" class="visually-hidden">DOE Passport</label>
                <div class="input-group mb-2 me-sm-2">
                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                </div>
                </div>
                <div class="col-3">
                <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                </button>
                </div>
            </form>
            <h3 class="mt-2 mb-0">Note</h3>
            <p class="disclaimer mb-0">
                You are only able to invite member that has registered.
            </p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-details card-right">
            <h2>Checkout Informations</h2>
            <table class="trip-informations">
            <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-end">2 Person</td>
            </tr>
            <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-end">$ 190,00</td>
            </tr>
            <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-end">$ 80,00 / person</td>
            </tr>
            <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-end">$ 280,00</td>
            </tr>
            <tr>
                <th width="50%">Total (+Unique Code)</th>
                <td width="50%" class="text-end">
                <span class="text-blue">$ 293,</span><span class="text-orange">33</span>
                </td>
            </tr>
            </table>
            <hr>
            <h2>Payment Instruction</h2>
            <p class="payment-instructions">
            Please complete your payment before to continue the wonderful trip
            </p>
            <div class="bank">
            <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="bank-image">
                <div class="description">
                <h3>PT Nomads ID</h3>
                <p>
                    0881 8829 8800
                    <br>
                    Bank Central Asia
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="bank-image">
                <div class="description">
                <h3>PT Nomads ID</h3>
                <p>
                    0881 8829 8800
                    <br>
                    Bank Central Asia
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
        <div class="join-container">
            <a href="#" class="btn d-block btn-join-now mt-3 py-2">
            I Have Made Payment
            </a>
        </div>
        <div class="text-center mt-3">
            <a href="#" class="text-muted">
            Cancel Booking
            </a>
        </div>
        </div>
    </div>
    </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/combined/js/gijgo.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15
        });

        // gijgo datepicker
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap5',
        })
    });
    </script>
@endpush
