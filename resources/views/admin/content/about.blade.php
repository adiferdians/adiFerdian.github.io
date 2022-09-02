@extends('admin.tamplate.layout')
@section('content')
@section('title_content', 'About')
@section('about', 'active')


{{-- modalAbout --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <input type="text" name="" id="id"  value="{{ $a_data['id'] }}" hidden>
                <div>
                  <label for="proff">Proffesion</label>
                  <input type="text" id="proff" class="form-control" value="{{ $a_data['Proffesion'] }}">
                </div>
                <div>
                  <label for="about">About</label>
                  <textarea id="about" style="min-height: 200px" class="form-control">{{ $a_data['about'] }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitAbout">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{-- modal end --}}

{{-- modalDetil --}}
<div class="modal fade" id="myModalDetil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div>
                  <label for="desc">Descriptions</label>
                  <input type="text" id="desc" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="sentDetil" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{-- modal end --}}

<div class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">About</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Proffesion
                                </th>
                                <th>
                                    About
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top">
                                        {{ $a_data['Proffesion'] }}
                                    </td>
                                    <td style="text-align: justify; max-width: 400px; padding-right: 20px">
                                        {{ $a_data['about'] }}
                                    </td>
                                    <td style="vertical-align: top">
                                        <button class="btn btn-primary" id="edit"><i class="nc-icon nc-settings-gear-65"></i></button>
                                        <button class="btn btn-danger" id="delete"><i class="nc-icon nc-simple-remove"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <div style="display: flex; justify-content: space-between; padding-right: 30px;">
                    <h5 class="card-title">About Detil</h5>
                    <button class="btn btn-default" id="addDetil">Add Detil</button>
                  </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Descriptions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($ad_data as $aboutDetil)
                                <tr>
                                    <td>
                                        {{ $aboutDetil['title'] }}
                                    </td>
                                    <td>
                                        {{ $aboutDetil['desc'] }}
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn btn-primary" id="editDetil" onclick="editDetil({{ $aboutDetil['id'] }})"><i class="nc-icon nc-settings-gear-65"></i></button>
                                            <button class="btn btn-danger" id="deleteDetil" onclick="deleteDetil({{ $aboutDetil['id'] }})"><i class="nc-icon nc-simple-remove"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

  $(document).ready( function() {

  });

  // edit about
  const edit = document.getElementById("edit");
  edit.addEventListener('click', function() {
    $("#myModal").modal();
  });

  // delete about
  const del = document.getElementById("delete");
  del.addEventListener('click', function(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  });

  const subAbout = document.getElementById("submitAbout");
  subAbout.addEventListener('click', function subAbouts() {
    const about = document.getElementById("about").value;
    const proffession = document.getElementById("proff").value;
    const id = document.getElementById("id").value;


    // console.log(about, proffession);
    axios.post('about/submit/'+id, {
            about,
            proffession
        }).then((response) => {
            Swal.fire({
                title: 'Success...',
                text: 'Sukses mengubah  data',
                type: 'success',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                  location.reload();
                }
            })
        }).catch((error) => {
            Swal.fire({
                title: 'Oops...',
                text: 'Something went wrong',
                type: 'error',
                confirmButtonText: 'Ok'
            })
        })
  })

  document.getElementById("addDetil").addEventListener('click', function addDetil() {
    $("#myModalDetil").modal();
  })

  document.getElementById("sentDetil").addEventListener('click', function addDetil() {
    const name = document.getElementById("name").value;
    const desc = document.getElementById("desc").value;

    axios.post('about/sentDetil', {
            name,
            desc
        }).then((response) => {
            Swal.fire({
                title: 'Success...',
                text: 'Sukses mengubah  data',
                type: 'success',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                  location.reload();
                }
            })
        }).catch((error) => {
            Swal.fire({
                title: 'Oops...',
                text: 'Something went wrong',
                type: 'error',
                confirmButtonText: 'Ok'
            })
        })
  })

  function editDetil(id) {
    $("#myModalDetil").modal();
  }

  function deleteDetil(id) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
  }
</script>

@endsection
