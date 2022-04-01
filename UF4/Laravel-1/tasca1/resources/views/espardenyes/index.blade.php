<table>
    @foreach($espardenyes as $espardenya)
            <tr>  
                @foreach($espardenya as $f)
                    <td>{{$f}}</td>    
                @endforeach
            </tr>
    @endforeach
</table>