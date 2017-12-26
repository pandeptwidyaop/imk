@extends('backend.layouts.app',['navigation' => 'owner','menuActive' => 'artikel'])
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Artikel</h4>
                </div>

            </div>
            <div class="alert alert-success hidden" id="buatArtikel">Berhasil membuat artikel</div>
            <div class="alert alert-success hidden" id="alertStatus">Status artikel berhasil diubah</div>
            <div class="alert alert-success hidden" id="alertHapus">Artikel berhasil di hapus</div>
            <button type="button"class="btn btn-primary" onclick="showArtikel()"> Buat Artikel</button>

            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Judul Artikel</th>
                            <th>Opsi</th>
                        </thead>
                        <tbody>
                            @for ($i=0; $i < 10; $i++)
                                <tr>
                                    <td>{{Carbon\Carbon::now()->addDays($i)}}</td>
                                    <td><span class="label label-primary">Publish</span></td>
                                    <td>COMPLETE FACILITIES AND INFRASTRUCTURE FOR THE CONVENIENCE OF TRAVELERS</td>
                                    <td>
                                        <div class="btn-group ">
										  <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Opsi <span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#" onclick="editArtikel()">Edit</a></li>
                                            <li><a href="#" onclick="ubahStatus()">Ubah Status</a></li>
											<li class="divider"></li>
											<li><a href="#" onclick="hapusArtikel()">Hapus</a></li>
										  </ul>
										</div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="createArtikel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="judulModal">Tambah Artikel</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Isi</label>
                <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
                <div class="sumer">

                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="simpanArtikel()">Simpan</button>
          </div>
        </div>
      </div>
    </div>
@endsection
@push('css')
    <link href="{{asset('backend/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endpush
@push('script')
    <script src="{{asset('backend/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset("frontend/plugins/bootbox.min.js")}}" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.4/tinymce.min.js"></script>
@endpush
@push('js')
    <script type="text/javascript">
        $(".table").dataTable();
        function showArtikel(){
            $("#createArtikel").modal("show");
        }
        function editArtikel(){
            $('#createArtikel').modal("show");
            $("#judulModal").text('Edit Artikel');
        }

        function ubahStatus(){
            bootbox.confirm("Apakah anda yakin ingin mengubah status artikel ini ?", function(ret){
                if(ret){
                    $('#alertStatus').removeClass('hidden');
                }
            });
        }

        function hapusArtikel(){
            bootbox.confirm("Apakah anda yakin ingin menghapus artikel ini ?", function(ret){
                if(ret){
                    $('#alertHapus').removeClass('hidden');
                }
            });
        }
        function simpanArtikel(){
            $("#buatArtikel").removeClass('hidden');
        }
        tinymce.init({
          selector: 'textarea',
          height: 500,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
          ],
          toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
        });
    </script>
@endpush
