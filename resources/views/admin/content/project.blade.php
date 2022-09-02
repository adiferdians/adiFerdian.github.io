@extends('admin.tamplate.layout')
@section('content')
@section('title_content', 'Project')
@section('project', 'active')

{{-- {{ dd($r_data) }} --}}
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Project</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Title
                </th>
                <th>
                  Descriptions
                </th>
                <th>
                  Image
                </th>
                <th>
                  Category
                </th>
              </thead>
              <tbody>
                @foreach ($r_data as $project)
                  <tr>
                    <td>
                      {{ $project['id'] }}
                    </td>
                    <td>
                      {{ $project['title'] }}
                    </td>
                    <td style="max-width: 400px">
                      {{ $project['desc'] }}
                    </td>
                    <td>
                      {{ $project['img'] }}
                    </td>
                    <td>
                      {{ $project['category'] }}
                    </td>
                    <td>
                      <button class="btn btn-primary"><i class="nc-icon nc-settings-gear-65"></i></button>
                      <button class="btn btn-danger"><i class="nc-icon nc-simple-remove"></i></button>
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

@endsection