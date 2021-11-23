<div class="tab-pane fade" id="tailors">
    <h3>Tailors </h3>
    {{-- error and success messages --}}
    @include('partials.messaging')
    
    <div class="table_page table-responsive">
        <table>
            
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Brand Name</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                @php
               $count = 1;
              @endphp
            </thead>
            @forelse ($tailors as $key => $item)
            <tbody>
                <tr>
                    <td>{{ $count++ }} </td>
                    <td>{{ $item['fname'] }} {{ $item['lname'] }}</td>
                    <td>{{ $item['brand_name'] }}</td>
                    <td>{{ $item['phone_1'] }}</td>
                    <td><a href="{{ route('admin.tailor.show', ['id' => $item['id']]) }} " class="view">view</a> {{-- | <a href="{{ route('admin.tailor.edit', ['id' => $item['id']]) }}" class="view">Edit</a> --}} | <a href="{{ route('admin.tailor.delete', ['id' => $item['id']]) }}" class="view">Delete</a></td>
                </tr>
               
            </tbody>
            @empty
            <tr>
                <td colspan="7">No Record Found </td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
