<x-layout>
<x-slot name="main">
</x-slot>
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Create
                            </button>
<div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <tr>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($re as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->toko }}</td>
                            <td>{{ $data->tlp }}</td>
                         <td>
                             <a href ="/reseller/edit/{{$data->id}}" class="btn btn-outline-warning">Edit</a><br>
                          <a href ="/reseller/destroy/{{$data->id}}"class="btn btn-outline-primary">Delete</a></td>
                        </td>
                        </tr>
                     
                        @endforeach
                  </tbody>
                </table>
   
              </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/reseller/create" method="POST">
        
      {{csrf_field()}}
        <div class="form-group">
        <label for="nama">Nama Pemilik</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" placeholder="Nama Pemilik">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div>
        <div class="form-group">
        <label for="nama">Nama Toko</label>
        <input type="text" name="toko" id="toko" value="{{ old('toko') }}" class="form-control" placeholder="Toko">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div><div class="form-group">
        <label for="nama">No Telepon</label>
        <input type="number" name="tlp" id="tlp" value="{{ old('tlp') }}" class="form-control" placeholder="Telepon">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div>
       
        
        <button type="submit"  class="btn btn-success btn-block">Save </button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

</x-layout>