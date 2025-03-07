<table id="data-table-simple" class="responsive-table display" cellspacing="0">
  <thead>
      <tr>
          <th>Tanggal dan Waktu</th>
          <th>CO2</th>
          <th>AQ</th>
          <th>Smoke</th>
          <th>CO</th>
      </tr>
  </thead>

  <tbody>
    @php
      $n=0;
    @endphp
    @foreach ($co as $key)
      @if ($carbon[$n] && $key && $aq[$n] && $carbon[$n])

      @endif
      <tr>
          <td>{{$key->created_at->format('Y-m-d H:i:s')??''}}</td>
          <td>{{$key->value??''}} ppm</td>
          <td>{{$aq[$n]->value??''}} ppm</td>
          <td>{{$smoke[$n]->value??''}} ppm</td>
          <td>{{$carbon[$n]->value??''}} ppm</td>

      </tr>
      @php
        $n++;
      @endphp
    @endforeach

  </tbody>
</table>
