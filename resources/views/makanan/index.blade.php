<x-layout>

 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Create
                            </button>
<div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Kondisi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($makanans as $makanan)
                        <tr>
                            <td>{{ $makanan->nama }}</td>
                            <td>{{ $makanan->type }}</td>
                         <!-- <td>
                             <a href ="/reseller/edit/{{$makanan->id}}" class="btn btn-outline-warning">Edit</a><br>
                          <a href ="/reseller/destroy/{{$makanan->id}}"class="btn btn-outline-primary">Delete</a></td>
                        </td> -->
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
      <form action="/makanan/create" method="POST">
        
      {{csrf_field()}}
        <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" placeholder="Nama">
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
<x-sidebar/>
</x-layout>