@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Evacuee</h4>
                </div>
            </div>
        </div>

        {{-- end page title --}}

        {{-- start add evacuee --}}

        <div class="row" data-select2-id="147">
            <div class="col-lg-12" data-select2-id="146">
                <div class="card" data-select2-id="145">
                    <div class="card-body" data-select2-id="144">

                        {{-- Add --}}

                        <form action="{{ route('evacuee.store') }}" method="POST">
                            @csrf

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
                                                value="{{ old('last_name') }}">
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
                                                value=" {{ old('first_name') }}">
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
                                                value=" {{ old('middle_name') }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- dob --}}

                                <div class="col-md-2">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Birthdate</label>
                                        <div class="col-sm-10">
                                            <input name='dob' id="dob-input" class="form-control" type="date"
                                                value=" {{ old('dob') }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- age --}}

                                <div class="col-md-1">
                                    <div class="mb-0 position-relative">
                                        <br>
                                        <label class="form-label">Age</label>
                                        <div class="col-sm-10">
                                            <div id="age-container" class="form-control"></div>
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
                                            <option @error('gender') selected @enderror value="Male">Male</option>
                                            <option @error('gender') selected @enderror Value="Female">Female
                                            </option>
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
                                            <option @error('tenure_status') selected @enderror
                                                value="House & lot owner">House & lot owner</option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="Rented house & lot">Rented house & lot
                                            </option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="House owner & lot renter">House owner & lot renter
                                            </option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="House owner, rent-free lot w/ owner's consent">House owner,
                                                rent-free lot w/ owner's consent
                                            </option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="House owner, rent-free lot w/o owner's consent">House owner,
                                                rent-free lot w/o owner's consent
                                            </option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="Rent-free house & lot w/ owner's consent">Rent-free house & lot
                                                w/ owner's consent
                                            </option>
                                            <option @error('tenure_status') selected @enderror
                                                Value="Rent-free house & lot w/o owner's consent">Rent-free house & lot
                                                w/o owner's consent



                                        </select>
                                        @error('tenure_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- housing_condition --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Housing Condition</label>
                                        <select id="inputState"
                                            class="form-select @error('housing_condition') is-invalid @enderror"
                                            name="housing_condition">
                                            <option value="" disabled selected>Choose Condition</option>
                                            <option @error('housing_condition') selected @enderror
                                                value="Partially Damaged">Partially Damaged</option>
                                            <option @error('housing_condition') selected @enderror
                                                Value="Totally Damaged">Totally Damaged
                                            </option>
                                        </select>
                                        @error('housing_condition')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- health_condition --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Health Condition</label>
                                        <select id="inputState"
                                            class="form-select @error('health_condition') is-invalid @enderror"
                                            name="health_condition">
                                            <option value="" disabled selected>Choose Condition</option>
                                            <option @error('health_condition') selected @enderror value="Dead">Dead
                                            </option>
                                            <option @error('health_condition') selected @enderror Value="Missing">
                                                Missing
                                            </option>
                                            <option @error('health_condition') selected @enderror Value="Injured">
                                                Injured
                                            </option>
                                            <option @error('health_condition') selected @enderror Value="With Illness">
                                                With Illness
                                            </option>
                                        </select>
                                        @error('health_condition')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- barangay --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Barangay</label>
                                        <div class="col-sm-10">
                                            <select name="barangay_name" class="form-control" required>
                                                <option value="" disabled selected>Select Barangay</option>
                                                @foreach($barangays as $barangay)
                                                <option value="{{ $barangay->id }}">{{ $barangay->barangay_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- ec_name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Evacuation Center</label>
                                        <div class="col-sm-10">
                                            <select name="ec_name" class="form-control" required>
                                                <option value="" disabled selected>Select Evacuation</option>

                                                @php
                                                $get = DB::table('ecenters')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->ec_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            {{-- add evacuee button --}}

                            <div> <br>
                                <button type="submit"
                                    class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
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
