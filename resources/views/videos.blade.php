@extends('layout.general2')

@section('content')
        <style>
            body{
                background-image:url('../image/MASTER_BK.png');
                background-repeat: repeat-y;
                background-size: cover;
            }
			video {
				border: 1px solid black;
				border-radius: 0.2em;
			}
        </style>
        
        <div class = ' Ubication' style = 'top:'>
            <table width ='100%'>
				<tr>
                    <td style = 'padding-left:5%;'>
					@foreach( $datos['master'] as $d)
                        <video src="{{$d->url}}" width="70%"  controls></video>
					@endforeach
                    </td>
                </tr>
            </table>
            
        </div>
        <div class = 'flex-center Ubication2'>
            
        </div>
        
    <script>
        $(document).ready(function () {

        })
    </script>
@endsection
