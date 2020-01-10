

{{-- <table>
    <thead>
    <tr>
        <th>INCOME</th> 
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $item->item }}</td>
        </tr>
    </tbody>
</table> --}}





<table>
    <thead>
    <tr>
        <th>ITEM</th>
        <th>AMOUNT</th>
        <th>PERCENTAGE</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($items as $item)
        <tr>
            {{-- <td>{{ $item->item }}</td> --}}
            <td>{{ $item->amount }}</td>
            {{-- <td>{{ $value }}</td> --}}
        </tr>
    @endforeach
    </tbody>
</table>