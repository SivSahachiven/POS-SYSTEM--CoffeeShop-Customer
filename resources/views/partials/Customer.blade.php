<div class="list-group w-auto p-3" style="border-radius: 10px">
    <div class="list-group-item" style="background-color: #3559E0" aria-current="true">
        <h4 style="color: #FFFFFF;"><b>Customer List</b></h4>
    </div>
    <div class="list-group-item">
        <div class="p-2 mt-3">
            <form action="/search" method="GET">
                <div class="input-group inline">
                    <input type="search" class="form-control search-bar me-5" style="border-radius: 10px"placeholder="Search for something........." aria-label="Search" aria-describedby="search-addon" /> 
                    <div class="">
                        
                        <a href="{{ route('hidding') }}" class="btn btn-primary "
                        style="background-color: #3559E0; margin-left: 22vw;"><i class="fas fa-eye-slash" style="color: #ffffff;"></i> Hide</a>
                        <a href="{{ route('create') }}" class="btn btn-primary "
                        style="background-color: #3559E0; "><i class="fas fa-plus-circle fa-lg"
                        style="color: #ffffff;"></i> Add New Customer</a>
                    </div>
                </div>
            </form>
        </div>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="p-3" scope="col">#</th>
                        <th class="p-3" scope="col">Customer Name</th>
                        <th class="p-3" scope="col">Company Name</th>
                        <th class="p-3" scope="col">Email</th>
                        <th class="p-3" scope="col">Phone</th>
                        <th class="p-3" scope="col">Address</th>
                        <th class="p-3" scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        @if ($customer->is_hidding == 0)
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->company_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone}}</td>
                        <td>{{ $customer->address}}</td>
                        {{-- <td> {{ $customer->status }}</td> --}}
                        <td class="p-3" >
                            <a href="{{ route('customers.edit',$customer->id) }}" type="button" class="btn btn-primary"><i class="fas fa-edit"
                                    style="color: #ffffff;"></i></a>
                            <a href="{{ route('customers.destroy',$customer->id) }}" type="button" class="btn btn-danger"><i class="fas fa-trash"
                                    style="color: #ffffff;"></i></a>
                        </td>
                        @endif
                        {{-- <th class="p-3" scope="row">1</th> --}}
                        {{-- <td class="p-3">Makara</td>
                        <td class="p-3">KOI</td>
                        <td class="p-3">Makara@gmail.com</td>
                        <td class="p-3">012000000</td>
                        <td class="p-3">Siemreap</td> --}}
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
