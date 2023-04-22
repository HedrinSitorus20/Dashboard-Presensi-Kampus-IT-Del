@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Mahasiswa'])
       <div class="row mx-2">
            <div class="col-12">
                <!-- START FORM -->
                <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
                    @csrf 
                    @method('PUT')
                    <div class="card my-3 p-3 bg-body rounded shadow-sm">
                        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nim' value="{{ $data->nim }}" id="nim">
                                {{-- {{ $data->nim }} --}}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                        </div>
                    </div>
                </form>
                <!-- AKHIR FORM -->
            </div>            
        </div>
    @include('layouts.footers.auth.footer')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> --}}
@endsection