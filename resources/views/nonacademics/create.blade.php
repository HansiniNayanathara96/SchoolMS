@extends('nonacademics.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Non-Academic Staff Member</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nonacademics.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('nonacademics.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" class="form-control" value="{{ old('staffid') }}" placeholder="Enter Staff ID">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role ID:</strong>
                    <select type="text" name="roleid" class="form-control" placeholder="Select Role ID">
                        <option value="1" @if (Input::old('roleid') == '1') selected="selected" @endif>1</option>
                        <option value="2" @if (Input::old('roleid') == '2') selected="selected" @endif>2</option>
                        <option value="3" @if (Input::old('roleid') == '3') selected="selected" @endif>3</option>
                        <option value="4" @if (Input::old('roleid') == '4') selected="selected" @endif>4</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" placeholder="Enter Full Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" placeholder="Select the date of birth" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" class="form-control" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }}> Male<br>
                    <input type="radio" name="gender" class="form-control" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }}>Female<br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIC:</strong>
                    <input type="text" name="nic" class="form-control" value="{{ old('nic') }}" placeholder="XXXXXXXXXV">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permanant Address:</strong>
                    <textarea class="form-control" style="height:150px" name="paddress" placeholder="Enter Permanant address">{{ Input::old('paddress') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current Address:</strong>
                    <textarea class="form-control" style="height:150px" name="caddress" placeholder="Enter Current address">{{ Input::old('caddress') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact No:</strong>
                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}" placeholder="Enter contact no">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Address:</strong>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"  placeholder="Enter Email address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select type="text" name="profession" class="form-control" placeholder="Select your profession">
                        <option value="Clerical Clerk" @if (Input::old('profession') == 'Clerical Clerk') selected="selected" @endif>Clerical Clerk</option>
                        <option value="Accountant" @if (Input::old('profession') == 'Accountant') selected="selected" @endif>Accountant</option>
                        <option value="Inventory Manager" @if (Input::old('profession') == 'Inventory Manager') selected="selected" @endif>Inventory Manager</option>
                        <option value="Sales Manager" @if (Input::old('profession') == 'Sales Manager') selected="selected" @endif>Sales Manager</option>
                        <option value="Canteen Manager" @if (Input::old('profession') == 'Canteen Manager') selected="selected" @endif>Canteen Manager</option>
                        <option value="Bookshop Manager" @if (Input::old('profession') == 'Bookshop Manager') selected="selected" @endif>Bookshop Manager</option>
                        <option value="Librarian" @if (Input::old('profession') == 'Librarian') selected="selected" @endif>Librarian</option>
                        <option value="Lab Assistant" @if (Input::old('profession') == 'Lab Assistant') selected="selected" @endif>Lab Assistant</option>
                        <option value="Security Officer" @if (Input::old('profession') == 'Security Officer') selected="selected" @endif>Security Officer</option>
                        <option value="Cleaner" @if (Input::old('profession') == 'Cleaner') selected="selected" @endif>Cleaner</option>
                        <option value="Worker" @if (Input::old('profession') == 'Worker') selected="selected" @endif>Worker</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qualifications:</strong>
                    <textarea class="form-control" style="height:150px" name="qualifications" placeholder="Enter your qualifications">{{ Input::old('qualifications') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Experience(in years):</strong>
                    <input type="text" name="experience" class="form-control" value="{{ old('experience') }}" placeholder="Enter experience in years">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departmant:</strong>
                    <select type="text" name="department" class="form-control" placeholder="Select your department">
                        <option value="School Head Office" @if (Input::old('department') == 'School Head Office') selected="selected" @endif>School Head Office</option>
                        <option value="Finance Department" @if (Input::old('department') == 'Finance Department') selected="selected" @endif>Finance Department</option>
                        <option value="Inventory Department" @if (Input::old('department') == 'Inventory Department') selected="selected" @endif>Inventory Department</option>
                        <option value="Sales Department" @if (Input::old('department') == 'Sales Department') selected="selected" @endif>Sales Department</option>
                        <option value="Canteen" @if (Input::old('department') == 'Canteen') selected="selected" @endif>Canteen</option>
                        <option value="Bookshop" @if (Input::old('department') == 'Bookshop') selected="selected" @endif>Bookshop</option>
                        <option value="Library" @if (Input::old('department') == 'Library') selected="selected" @endif>Library</option>
                        <option value="Lab" @if (Input::old('department') == 'Lab') selected="selected" @endif>Lab</option>
                        <option value="Security Department" @if (Input::old('department') == 'Security Department') selected="selected" @endif>Security Department</option>
                        <option value="Cleaning Department" @if (Input::old('department') == 'Cleaning Department') selected="selected" @endif>Cleaning Department</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Leave Balance:</strong>
                    <select type="text" name="leavebalance" class="form-control" placeholder="Select leave balance">
                        <option value="1" @if (Input::old('leavebalance') == '1') selected="selected" @endif>1</option>
                        <option value="2" @if (Input::old('leavebalance') == '2') selected="selected" @endif>2</option>
                        <option value="3" @if (Input::old('leavebalance') == '3') selected="selected" @endif>3</option>
                        <option value="4" @if (Input::old('leavebalance') == '4') selected="selected" @endif>4</option>
                        <option value="5" @if (Input::old('leavebalance') == '5') selected="selected" @endif>5</option>
                        <option value="6" @if (Input::old('leavebalance') == '6') selected="selected" @endif>6</option>
                        <option value="7" @if (Input::old('leavebalance') == '7') selected="selected" @endif>7</option>
                        <option value="8" @if (Input::old('leavebalance') == '8') selected="selected" @endif>8</option>
                        <option value="9" @if (Input::old('leavebalance') == '9') selected="selected" @endif>9</option>
                        <option value="10" @if (Input::old('leavebalance') == '10') selected="selected" @endif>10</option>
                        <option value="11" @if (Input::old('leavebalance') == '11') selected="selected" @endif>11</option>
                        <option value="12" @if (Input::old('leavebalance') == '12') selected="selected" @endif>12</option>
                        <option value="13" @if (Input::old('leavebalance') == '13') selected="selected" @endif>13</option>
                        <option value="14" @if (Input::old('leavebalance') == '14') selected="selected" @endif>14</option>
                        <option value="15" @if (Input::old('leavebalance') == '15') selected="selected" @endif>15</option>
                        <option value="16" @if (Input::old('leavebalance') == '16') selected="selected" @endif>16</option>
                        <option value="17" @if (Input::old('leavebalance') == '17') selected="selected" @endif>17</option>
                        <option value="18" @if (Input::old('leavebalance') == '18') selected="selected" @endif>18</option>
                        <option value="19" @if (Input::old('leavebalance') == '19') selected="selected" @endif>19</option>
                        <option value="20" @if (Input::old('leavebalance') == '20') selected="selected" @endif>20</option>
                        <option value="21" @if (Input::old('leavebalance') == '21') selected="selected" @endif>21</option>
                        <option value="22" @if (Input::old('leavebalance') == '22') selected="selected" @endif>22</option>
                        <option value="23" @if (Input::old('leavebalance') == '23') selected="selected" @endif>23</option>
                        <option value="24" @if (Input::old('leavebalance') == '24') selected="selected" @endif>24</option>
                        <option value="25" @if (Input::old('leavebalance') == '25') selected="selected" @endif>25</option>
                        <option value="26" @if (Input::old('leavebalance') == '26') selected="selected" @endif>26</option>
                        <option value="27" @if (Input::old('leavebalance') == '27') selected="selected" @endif>27</option>
                        <option value="28" @if (Input::old('leavebalance') == '28') selected="selected" @endif>28</option>
                        <option value="29" @if (Input::old('leavebalance') == '29') selected="selected" @endif>29</option>
                        <option value="30" @if (Input::old('leavebalance') == '30') selected="selected" @endif>30</option>
                        <option value="31" @if (Input::old('leavebalance') == '31') selected="selected" @endif>31</option>
                        <option value="32" @if (Input::old('leavebalance') == '32') selected="selected" @endif>32</option>
                        <option value="33" @if (Input::old('leavebalance') == '33') selected="selected" @endif>33</option>
                        <option value="34" @if (Input::old('leavebalance') == '34') selected="selected" @endif>34</option>
                        <option value="35" @if (Input::old('leavebalance') == '35') selected="selected" @endif>35</option>
                        <option value="36" @if (Input::old('leavebalance') == '36') selected="selected" @endif>36</option>
                        <option value="37" @if (Input::old('leavebalance') == '37') selected="selected" @endif>37</option>
                        <option value="38" @if (Input::old('leavebalance') == '38') selected="selected" @endif>38</option>
                        <option value="39" @if (Input::old('leavebalance') == '39') selected="selected" @endif>39</option>
                        <option value="40" @if (Input::old('leavebalance') == '40') selected="selected" @endif>40</option>
                        <option value="41" @if (Input::old('leavebalance') == '41') selected="selected" @endif>41</option>
                    </select>
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Enter a username">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="passsword" class="form-control" value="{{ old('passsword') }}" placeholder="Enter a valid password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" name="confirmpassword" class="form-control" value="{{ old('confirmpassword') }}" placeholder="Confirm your password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Registered Date:</strong>
                    <input type="date" name="regdate" class="form-control" value="{{ old('regdate') }}" placeholder="dd/MM/yyyy">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection

