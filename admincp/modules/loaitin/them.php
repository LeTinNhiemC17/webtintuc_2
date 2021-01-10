<form action="modules/loaitin/xuly.php" method="post">
<div class="content-left">
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm loại tin</div></td>
  </tr>
  <tr>
    <td>Tên loại tin</td>
    <td><label>
      <input type="text" name="tenloaitin" id="tenloaitin">
    </label></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td><label>
      <select name="trangthai" id="trangthai">
        <option value="Hiển thị" selected>Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label>
      <input type="text" name="thutu" id="thutu">
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm">
    </div></td>
  </tr>
</table>
</div>
</form>