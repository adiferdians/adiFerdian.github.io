@extends('admin.tamplate.layout')
@section('content')
@section('title_content', 'Service')
@section('service', 'active')

{{-- {{ dd($service_data) }} --}}
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Service</h5>
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
                  Color
                </th>
                <th>
                  Icon
                </th>
              </thead>
              <tbody>
                @foreach ($service_data as $service)
                <tr>
                  <td>
                    {{ $service['id'] }}
                  </td>
                  <td>
                    {{ $service['title'] }}
                  </td>
                  <td>
                    {{ $service['color'] }}
                  </td>
                  <td>
                    {{ $service['icon'] }}
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