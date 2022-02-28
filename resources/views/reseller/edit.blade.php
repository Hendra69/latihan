<x-layout>
<x-slot name="main">
</x-slot>

      <div class="modal-body">
      <form action="/reseller/update/{{$reseller->id}}" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="nama">Nama Pemilik</label>
        <input type="text" name="nama" id="nama" value="{{ $reseller->nama }}" class="form-control" placeholder="Nama Pemilik">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div>
        <div class="form-group">
        <label for="nama">Nama Toko</label>
        <input type="text" name="toko" id="toko" value="{{ $reseller->toko }}" class="form-control" placeholder="Toko">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div><div class="form-group">
        <label for="nama">No Telepon</label>
        <input type="number" name="tlp" id="tlp" value="{{ $reseller->tlp }}" class="form-control" placeholder="Telepon">
        <span class="text-danger error-text title_error"  style="font-size: 13px"></span>
        </div>
       
        <button type="submit"  class="btn btn-success btn-block">Save </button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    
</x-layout>