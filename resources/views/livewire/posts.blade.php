<div>
 @if (session()->has('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
@elseif (session()->has('update'))
<div class="alert alert-info">
    {{ session('update') }}
</div>
@elseif (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@elseif ($errors->any())
<div class="alert text-light bg-secondary">
  Invalid Argument!
</div>
    @endif
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td class="">
               <center> <button wire:click="edit({{ $value->id }})" class="btn btn-success btn-sm" style="padding-right:46px;padding-left:46px ">Edit</button></center>
                </td>
                <td>
                   <center> <button wire:click="delete({{ $value->id }})" class="btn btn-danger   btn-sm"style="padding-right:40px;padding-left:40px ">Delete</button></center>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>