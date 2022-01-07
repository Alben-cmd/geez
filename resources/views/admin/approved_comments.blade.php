<div class="tab-pane fade" id="approved_comments">
    <h3>Comments </h3>
    {{-- error and success messages --}}
    @include('partials.messaging')
    
    <div class="table_page table-responsive">
        <table>
            
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Cloth Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Actions</th>
                </tr>
                @php
               $count = 1;
              @endphp
            </thead>
            @forelse ($approved_comments as $key => $item)
            <tbody>
                <tr>
                    <td>{{ $count++ }} </td>
                    <td><a href="{{ route('cloth.show', ['slug' => $item ->cloth->slug  ]) }}">{{$item->cloth->name}}</a> </td>
                    <td>{{ $item['email'] }} </td>
                    <td>{{ $item['comment'] }}</td>
                    <td><a href="{{ route('admin.unapprove.comment', ['id' => $item['id']]) }} " class="view">Unapprove</a> {{-- | <a href="{{ route('admin.tailor.edit', ['id' => $item['id']]) }}" class="view">Edit</a> --}} | <a href="{{ route('admin.comment.delete', ['id' => $item['id']]) }}" class="view">Delete</a></td>
                </tr>
               
            </tbody>
            @empty
            <tr>
                <td><font color="#fb5d5d">No Approved comments Found! </font></td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
