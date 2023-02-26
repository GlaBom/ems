@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Evacuee</h4>
                </div>
            </div>
        </div>

        {{-- end page title --}}

        {{-- start add evacuee --}}

        <div class="row" data-select2-id="147">
            <div class="col-lg-12" data-select2-id="146">
                <div class="card" data-select2-id="145">
                    <div class="card-body" data-select2-id="144">

                        {{-- Edit --}}

                        <form action="{{ route('evacuee.update',$evacuee->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            <div class="row">

                                {{-- last name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input name='last_name' class="form-control" type="text"
                                                value="{{ $evacuee->last_name }}">
                                            @error('last_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- first name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input name='first_name' class="form-control" type="text"
                                                value=" {{ $evacuee->first_name }}">
                                            @error('first_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- middle name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Middle Name</label>
                                        <div class="col-sm-10">
                                            <input name='middle_name' class="form-control" type="text"
                                                value=" {{ $evacuee->middle_name }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- dob --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Birthdate</label>
                                        <div class="col-sm-10">
                                            <input name='dob' class="form-control" type="date"
                                                value="{{$evacuee->dob}}">
                                        </div>
                                    </div>
                                </div>

                                {{-- age --}}

                                <div class="col-md-1">
                                    <div class="mb-0 position-relative">
                                        <br>
                                        <label class="form-label">Age</label>
                                        <div class="col-sm-10">
                                            <div id="age-container" class="form-control">{{$evacuee->age}}</div>
                                            <input type="hidden" name="age" id="age-input">
                                        </div>
                                    </div>
                                </div>

                                {{-- gender --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Gender</label>
                                        <select id="inputState"
                                            class="form-select @error('gender') is-invalid @enderror" name="gender">
                                            <option value="" disabled selected>Choose Gender</option>
                                            <option value="Male" @if($evacuee->gender == 'Male') selected @endif>Male
                                            </option>
                                            <option value="Female" @if($evacuee->gender == 'Female') selected
                                                @endif>Female</option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- tenure_status --}}
                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Tenure Status</label>
                                        <select id="inputState"
                                            class="form-select @error('tenure_status') is-invalid @enderror"
                                            name="tenure_status">
                                            <option value="" disabled selected>Choose Status</option>
                                            <option @if($evacuee->tenure_status=='House & lot owner') selected
                                                @endif
                                                value="House & lot owner">House & lot owner</option>
                                            <option @if($evacuee->tenure_status=='Rented house & lot') selected
                                                @endif
                                                value="Rented house & lot">Rented house & lot</option>
                                            <option @if($evacuee->tenure_status=='House owner & lot renter')
                                                selected @endif
                                                value="House owner & lot renter">House owner & lot renter
                                            </option>
                                            <option @if($evacuee->tenure_status=='House owner, rent-free lot w/
                                                owners consent') selected @endif
                                                value="House owner, rent-free lot w/ owner's consent">House owner,
                                                rent-free lot w/ owner's consent
                                            </option>
                                            <option @if($evacuee->tenure_status=='House owner, rent-free lot w/o
                                                owners consent') selected @endif
                                                value="House owner, rent-free lot w/o owner's consent">House owner,
                                                rent-free lot w/o owner's consent
                                            </option>
                                            <option @if($evacuee->tenure_status=='Rent-free house & lot w/ owners
                                                consent') selected @endif
                                                value="Rent-free house & lot w/ owner's consent">Rent-free house & lot
                                                w/ owner's consent
                                            </option>
                                            <option @if($evacuee->tenure_status=='Rent-free house & lot w/o owners
                                                consent') selected @endif
                                                value="Rent-free house & lot w/o owner's consent">Rent-free house & lot
                                                w/o owner's consent
                                            </option>
                                        </select>
                                        @error('tenure_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- barangay_name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Barangay</label>
                                        <div class="col-sm-10">

                                            <select name="barangay_name" class="form-control" required>
                                                @foreach ($barangays as $barangay)
                                                <option value="{{ $barangay->id }}" {{ $barangay->id ===
                                                    $evacuee->barangay_id ? 'selected' : '' }}>{{
                                                    $barangay->barangay_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- ecenter_name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Evacuation Center</label>
                                        <div class="col-sm-10">

                                            <select name="ec_name" class="form-control" required>
                                                @foreach ($ecenters as $ecenter)
                                                <option value="{{ $ecenter->id }}" {{ $ecenter->id ===
                                                    $evacuee->ecenter ? 'selected' : '' }}>{{
                                                    $ecenter->ec_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- add evacuee button --}}

                            <div> <br>
                                <button type="submit"
                                    class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Edit
                                    Evacuee</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{-- end evacuee form --}}

    </div>
</div>
<script>
    // Get the date of birth input field and age container
const dobInput = document.getElementById('dob-input');
const ageContainer = document.getElementById('age-container');
const ageInput = document.getElementById('age-input');

// Add an event listener to the input field to listen for changes
dobInput.addEventListener('change', function() {
// Get the date of birth value and convert it to a Date object
const dob = new Date(this.value);

// Get the current date and time
const now = new Date();

// Calculate the difference in milliseconds between the two dates
const diff = now.getTime() - dob.getTime();

// Convert the difference to years and round down to the nearest whole number
const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));

// Set the age container's text to the calculated age
ageContainer.textContent = age;

// Set the value of the hidden age input field to the calculated age
ageInput.value = age;
});

// Add an event listener to the form to listen for submission
document.querySelector('form').addEventListener('submit', function(event) {
// If the age is null or not a number, prevent the form submission
if (ageInput.value === null || isNaN(ageInput.value)) {
event.preventDefault();
alert('Please enter a valid age.');
}
});
</script>
@endsection
