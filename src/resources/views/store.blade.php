<form action="" method="post">
  <table>
  @csrf
    <tr>
      <th>name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>price</th>
      <td><input type="integer" name="price"></td>
    </tr>
    <tr>
      <th>image</th>
      <td><input type="text" name="image"></td>
    </tr>
    <tr>
      <th>season</th>
      <td><input type="text" name="season"></td>
    </tr>

    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
