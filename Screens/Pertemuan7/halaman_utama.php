<!DOCTYPE html>
<html>
<head>
	<title>Menu Materi Pemrograman PHP</title>
	<script>
		function redirect() {
			var selectBox = document.getElementById("pilihan");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			if(selectedValue != "") {
				window.location.href = "materi_" + selectedValue + ".php";
			}
		}
	</script>
</head>
<body>

	<h3>Materi Pemrograman PHP</h3>
	<p>[1]	Penggunaan IF</p>
	<p>[2]	Penggunaan SWITCH..CASE</p>
	<p>[3]	Penggunaan Looping</p>
	<p>[4]	Penggunaan Array</p>

	<form>
		<label for="pilihan">Pilih Materi yang ingin anda pelajari :</label>
		<select name="pilihan" id="pilihan">
			<option value="1">[1]</option>
			<option value="2">[2]</option>
			<option value="3">[3]</option>
			<option value="4">[4]</option>
		</select>
		
		<input type="button" name="submit" value="Pilih" onclick="redirect()">
	</form>
<br>
<button onclick="location.href='../index.html'">Kembali ke Dashboard</button>
</body>
</html>
