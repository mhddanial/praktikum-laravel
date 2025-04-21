<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk'] }}</td>
                {{-- Data Lainnya --}}
            </tr>
        @endforeach
    </tbody>
</table>