@extends('templete.index')

@section('title', 'customer')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data_Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Customer<h3>
            </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                   @foreach ($data as $item)
               <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->status == 1 ? 'Aktif' : 'Tidak'}}</td>
                  <td>{{ $item->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                  <td style="max-width: 50px">
                          <button type="button" class="btn btn-warning btn-sm">
                          <i class="far fa-edit"></i></button>
                          
                      <form action="/customer/{{ $item->id }}" method="GET">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-denger btn-sm">
                           <i class="far fa-trash-alt"></i></button>
                      </form>
                  </td>
               </tr>
            @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection