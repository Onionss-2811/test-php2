<h1>thêm khách hàng</h1>
<form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table border="1">
        <tr>
            <td>
                Họ và tên <input type="text" name="full_name">
            </td>
        </tr>
        <tr>
            <td>
                Email <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>
                giới tính <input type="radio" name="gender" value="1"> nam
                <input type="radio" name="gender" value="0"> nữ
            </td>
        </tr>
        <tr>
            <td>
                Phone <input type="text" name="phone">
            </td>
        </tr>
        <tr>
            <td>
                avatar <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>
                <button>thêm</button>
            </td>
        </tr>
    </table>
</form>