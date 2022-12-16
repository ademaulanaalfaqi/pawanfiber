<form action="{{$url}}" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
    @csrf
    @method('delete')
    <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
</form>