@extends("Layout.layout")
@section('content')
<div style="width: 100%; display: flex; justify-content: center; font-size: 17px;">

    <Table border="1">
        <thead style="font-weight: bold; font-size: 24px;">
            <tr>
                <th>
                    Nama Pemain
                </th>
                <th>
                    Nomor Punggung
                </th>
                <th>
                    Posisi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPemain as $data)
            <tr>
                <td>
                    {{$data->nama_pemain}}
                </td>
                <td>
                    {{$data->nomor_pemain}}
                </td>
                <td>
                    {{$data->posisi}}
                </td>
            </tr>

            @endforeach

        </tbody>






    </Table>
</div>

@endsection