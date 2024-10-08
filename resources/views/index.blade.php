@extends("Layout.layout")
@section('content')

    <Table>
        <thead>
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
@endsection