<div class="tab-pane fade" id="category">
    <h3>Categories </h3>
    {{-- error and success messages --}}
    {{-- @include('partials.messaging') --}}
    <div class="row">
    <div class="col">
    <div class="table_page table-responsive">
        <table>
            
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                @php
               $count = 1;
              @endphp
            </thead>
            @forelse ($categories as $key => $item)
            <tbody>
                <tr>
                    <td>{{ $count++ }} </td>
                    <td>{{ $item['name'] }}</td>
                    
                    <td><a href="{{ route('admin.category.delete', ['id' => $item['id']]) }}" class="view">Delete</a></td>
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
</div>
</div>

