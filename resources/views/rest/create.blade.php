<form action="/rest" method="post">
    <table>
        @csrf
        <tr><th>message: </th><td><input type="text" name="message" id="" value="{{ old('url') }}"></td></tr>
        <tr><th>url: </th><td><input type="text" name="url" id="" value="{{ old('url') }}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>